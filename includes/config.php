<?php
return [
    'app' => [
        'name' => 'Pulse Community',
        'base_url' => 'http://localhost:8000',
        'default_theme' => 'system',
    ],
    'database' => [
        'host' => 'localhost',
        'name' => 'pulse_community',
        'user' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
    ],
    'security' => [
        'jwt_secret' => 'change-me',
        'token_expiry' => 3600,
    ],
];
