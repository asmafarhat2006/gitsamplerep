<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key' => '',
        'secret' => '',
    ],
	'facebook' => [
    'client_id' => '1475189436124786',
    'client_secret' => '89a99fff0c352b062fc3377ff05561d9',
    'redirect' => 'http://localhost/laranew/public/auth/facebook/callback',
    ],
	'twitter' => [
    'client_id' => '7d5uL3aiV82QP8FAPm1BGAcjL',
    'client_secret' => 'xUMQ3njK1iTykzYvO5qyFw52K97hUa9TVMX6ANITNRM5XWVrCN',
    'redirect' => 'http://localhost/laranew/public/auth/twitter/callback',
    ]

];
