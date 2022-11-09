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
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'http://example.com/callback-url',
    ],

   

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
    

   
    'twitter' => [
        'client_id' => 'Vzc2M0xsN1VUUlhMa3dYeS1kV046MTpjaQ',
        'client_secret' => 'xqw1j_MuXFwCWSAK0ABYw2x6ZVotLHbS6Sqd4woW6m-MNJvZmd',
        'redirect' => 'http://localhost:8000/auth/callback/twitter',
        'oauth' => 2,
    ],
   
'facebook' => [
    'client_id' => '1067159990632663',
    'client_secret' => '9020a940f08f78a5af4b3897aa73df72',
    'redirect' => 'https://localhost:8000/auth/callback/facebook',
 ],

];
