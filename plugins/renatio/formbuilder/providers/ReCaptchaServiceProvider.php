<?php

namespace Renatio\FormBuilder\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use ReCaptcha\ReCaptcha;
use Renatio\FormBuilder\Models\Settings;

/**
 * Class ReCaptchaServiceProvider
 * @package Renatio\FormBuilder\Providers
 */
class ReCaptchaServiceProvider extends ServiceProvider
{

    /**
     * @var ReCaptcha
     */
    protected $reCaptcha;

    public function __construct($app)
    {
        parent::__construct($app);

        $this->reCaptcha = new ReCaptcha(Settings::get('secret_key'));
    }

    /**
     * Save reCaptcha in session to handle ajax validation
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('recaptcha', function ($attribute, $value) {
            if (session()->has('reCaptcha')) {
                session()->reflash();

                return session('reCaptcha')->isSuccess();
            }

            $response = $this->reCaptcha->verify($value, request()->ip());
            session()->flash('reCaptcha', $response);

            return $response->isSuccess();
        }, e(trans('renatio.formbuilder::lang.reCaptcha.error')));
    }

}