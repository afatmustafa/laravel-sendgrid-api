<?php
// config for Afatmustafa/LaravelSendgridApi
return [
    'api_key' => env('SENDGRID_API_KEY'),
    'from' => [
        'email' => env('SENDGRID_FROM_EMAIL', 'no-reply@verymoney.com'),
        'name' => env('SENDGRID_FROM_NAME', 'Verymoney'),
    ],
    'reply_to' => [
        'email' => env('SENDGRID_REPLY_TO_EMAIL', 'info@verymoney.com'),
        'name' => env('SENDGRID_REPLY_TO_NAME', 'Verymoney'),
    ],
];
