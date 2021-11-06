<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '418175179853546',  //client face của bạn
        'client_secret' => 'b54f375c53c37ad2933332e1b2170a16',  //client app service face của bạn
        'redirect' => 'http://3tlearning.com/laravel-firstweb/admin/callback' //callback trả về
    ],
    'google' => [
        'client_id' => '755799337320-5qm5abliuisg5aoabk1hrr9tmub6n5s9.apps.googleusercontent.com',
        'client_secret' => 'h5gWyeH6bYPtoLBYkoxyPY4r',
        'redirect' => 'http://3tlearning.com/laravel-firstweb/google/callback'
    ],

];
