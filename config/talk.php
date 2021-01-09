<?php

return [
    'user' => [
        'model' => 'App\User',
        'foreignKey' => null,
        'ownerKey' => null,
    ],
    'broadcast' => [
        'enable' => false,
        'app_name' => 'laravel',
        'pusher' => [
            'app_id' => '1131249',
            'app_key' => '7f8bbf5915d638f78f5a',
            'app_secret' => 'b68d73ae36e92201d0b2',
            'options' => [
                'cluster' => 'mt1',
                'encrypted' => true
            ]
        ],
    ],
    'oembed' => [
        'enabled' => false,
        'url' => 'http://localhost',
        'key' => 'base64:UMNWA+d6fDLujEHZ6oG4jl/Od2yuPoN7v/vVJiHSBHM='
    ]
];
