<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Shinagawa
 * Date: 15/03/15
 * Time: 18:10
 */

return [
    'plugin' => [
        'description' => 'RainLab.User extension to login and register with Facebook'
    ],

    'facebook_session' => [
        'description' => 'Use this session instead of Rainlab.User\'s Session.'
    ],

    'permissions' => [
        'settings' => [
            'facebook' => 'Manager facebook token'
        ]
    ],

    'session' => [
        'redirect_signup_title' => 'Redirect to (after signup)',
        'redirect_signup_desc' => 'Page to redirect after the user signed up',

        'redirect_login_title' => 'Redirect to (after login)',
        'redirect_login_desc' => 'Page to redirect after the user login'
    ]
];