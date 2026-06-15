<?php
return [

    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'localhost'),

    'port' => env('MAIL_PORT', 1025),

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'mohamedrabeh197@gmail.com.com'),
        'name' => env('MAIL_FROM_NAME', 'Karam'),
    ],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
