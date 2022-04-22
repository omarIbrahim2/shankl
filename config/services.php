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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

     'facebook' =>[
         'client_id' => '506814264503560',
         'client_secret' => 'b65df8f574a1a04895d35286be406891',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
     ],
     'google' =>[
        'client_id' =>'609938086199-v3rqhdj5c3kd70oeoj7kecn37nj0ou9l.apps.googleusercontent.com',
        'client_secret'=>'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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
     ],


];
