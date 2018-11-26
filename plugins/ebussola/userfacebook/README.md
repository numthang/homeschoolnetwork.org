October CMS User Facebook
==========================

RainLab.User extension to login and register with Facebook.

If you are not familiar and for better understanding of whole functionality, please read the documentation of RainLab.User too.

## Installation

1.1. Open the update panel and search for eBussola.UserFacebook plugin.

OR

1.2. Copy all files to plugins/ebussola/userfacebook and execute `composer install` to install the dependencies libraries.

1. Configure the _App ID_ and _App Secret_ on the settings page. (Settings -> User Facebook Settings)
2. Add the Facebook Session component on your page or layout. NOTE: This component extends User's Session, so you don't need to use both.
3. Add `{% component 'facebookSession::fb-sdk' %}` to include facebook's SDK.
4. Add `{% component 'facebookSession::login-button' %}` anywhere on your page/layout.

Of course all snippets can be customized, they are used just to faster the development and to be used as a guide.

## Example
    
    {# Loads the facebook SDK #}
    {% component 'facebookSession::fb-sdk' %}
   
    {% if user %}
        Logged in as {{ user.name }} <a href="#" data-request="facebookSession::onLogout">Logout</a>
    {% else %}
        {% component 'facebookSession::login-button' %}
    {% endif %}
    
    
## FacebookSession Component API

### onLoginWithFacebook

#### Redirect

You can use _use_redirect_ property passed by POST to enable or disable the redirect.

Use _redirect_signup_ to specify the address to redirect the user when he is signing up. Or _redirect_login_ when he 
is loggin in.