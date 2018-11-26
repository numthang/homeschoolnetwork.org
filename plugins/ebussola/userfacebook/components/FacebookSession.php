<?php namespace Ebussola\Userfacebook\Components;

use Cms\Classes\Page;
use eBussola\Userfacebook\Models\Settings;
use eBussola\Userfacebook\Models\SocialIds;
use Facebook\FacebookJavaScriptLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphObject;
use Auth;
use RainLab\User\Components\Session;
use RainLab\User\Models\User;
use Request;
use Redirect;

class FacebookSession extends Session
{

    public $appId;
    public $redirectSignup;
    public $redirectLogin;

    public function componentDetails()
    {
        return [
            'name'        => 'Facebook Session',
            'description' => \Lang::get('ebussola.userfacebook::lang.facebook_session.description')
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), [
            'redirectSignup' => [
                'title'       => 'ebussola.userfacebook::lang.session.redirect_signup_title',
                'description' => 'ebussola.userfacebook::lang.session.redirect_signup_desc',
                'type'        => 'dropdown',
                'default'     => ''
            ],
            'redirectLogin' => [
                'title'       => 'ebussola.userfacebook::lang.session.redirect_login_title',
                'description' => 'ebussola.userfacebook::lang.session.redirect_login_desc',
                'type'        => 'dropdown',
                'default'     => ''
            ]
        ]);
    }

    public function getRedirectSignupOptions()
    {
        return [''=>'- none -'] + Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getRedirectLoginOptions()
    {
        return [''=>'- none -'] + Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun() {
        $this->appId = Settings::get('app_id');
        $this->redirectSignup = $this->controller->pageUrl($this->property('redirectSignup'));
        $this->redirectLogin = $this->controller->pageUrl($this->property('redirectLogin'));

        return parent::onRun();
    }

    public function onLoginWithFacebook() {
        $isSignup = false;
        $fbJs = new FacebookJavaScriptLoginHelper();
        $response = (new FacebookRequest($fbJs->getSession(), 'GET', '/me'))->execute();
        /** @var GraphObject $user */
        $fbUser = $response->getGraphObject();

        $socialIds = SocialIds::where('facebook_id', $fbUser->getProperty('id'))->first();
        if (!$socialIds) {

	        $user = User::where( 'email', $fbUser->getProperty( 'email' ) )->first();
	        if (!$user) {
                $isSignup = true;
		        $password = uniqid();
		        $user = Auth::register([
			        'name' => $fbUser->getProperty('first_name'),
                    'surname' => $fbUser->getProperty('last_name'),
			        'email' => $fbUser->getProperty('email'),
			        'username' => $fbUser->getProperty('email'),
			        'password' => $password,
			        'password_confirmation' => $password
		        ], true);
	        }

            $socialIds = new SocialIds();
            $socialIds->user_id = $user->id;
            $socialIds->facebook_id = $fbUser->getProperty('id');
            $socialIds->save();

        } else {
            $user = $socialIds->user;
        }

        Auth::login($user, true);

        if (post('use_redirect', true)) {
            if ($isSignup) {
                return Redirect::to(post('redirect_signup', Request::fullUrl()));
            } else {
                return Redirect::to(post('redirect_login', Request::fullUrl()));
            }
        }
    }

}