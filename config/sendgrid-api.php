<?php
// config for Afatmustafa/LaravelSendgridApi
return [
    'api_key' => env('SENDGRID_API_KEY'),
    'from' => [
        'email' => env('SENDGRID_FROM_EMAIL'),
        'name' => env('SENDGRID_FROM_NAME'),
    ],
    'reply_to' => [
        'email' => env('SENDGRID_REPLY_TO_EMAIL'),
        'name' => env('SENDGRID_REPLY_TO_NAME'),
    ],
];
