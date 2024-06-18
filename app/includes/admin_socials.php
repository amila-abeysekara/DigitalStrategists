<?php
/*
 * @copyright Copyright (c) 2023 AltumCode (https://altumcode.com/)
 *
 * This software is exclusively sold through https://altumcode.com/ by the AltumCode author.
 * Downloading this product from any other sources and running it without a proper license is illegal,
 *  except the official ones linked from https://altumcode.com/.
 */

/* Easily configurable footer socials */

return [
    'youtube' => [
        'name' => 'YouTube',
        'icon' => 'fab fa-youtube',
        'format' => 'https://youtube.com/%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'facebook' => [
        'name' => 'Facebook',
        'icon' => 'fab fa-facebook',
        'format' => 'https://facebook.com/%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'threads' => [
        'name' => 'Threads',
        'icon' => 'fab fa-threads',
        'format' => 'https://threads.net/@%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'twitter' => [
        'name' => 'X',
        'icon' => 'fab fa-x-twitter',
        'format' => 'https://x.com/%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'instagram' => [
        'name' => 'Instagram',
        'icon' => 'fab fa-instagram',
        'format' => 'https://instagram.com/%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'tiktok' => [
        'name' => 'TikTok',
        'icon' => 'fab fa-tiktok',
        'format' => 'https://tiktok.com/@%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'linkedin' => [
        'name' => 'LinkedIn',
        'icon' => 'fab fa-linkedin',
        'format' => 'https://linkedin.com/%s',
        'input_display_format' => true,
        'placeholder' => '',
    ],

    'whatsapp' => [
        'name' => 'WhatsApp',
        'icon' => 'fab fa-whatsapp',
        'format' => 'https://wa.me/%s',
        'input_display_format' => false,
        'placeholder' => '+010101010101'
    ],

    'email'=> [
        'name' => 'Email',
        'icon' => 'fas fa-envelope',
        'format' => 'mailto:%s',
        'input_display_format' => false,
        'placeholder' => 'hey@example.com'
    ],
    'crunchbase'=> [
        'name' => 'CrunchBase',
        'icon' => '<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="16" height="16">
        <title>Crunchbase</title>
        <defs>
            <image  width="100" height="100" id="img1" href="data:image/png;base64,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"/>
        </defs>
        <style>
        </style>
        <use id="Background" href="#img1" x="0" y="0"/>
    </svg>',
        'format' => 'https://www.crunchbase.com/organization/%s',
        'input_display_format' => true,
        'placeholder' => ''
    ],
    'F6S'=> [
        'name' => 'F6S',
        'icon' => '<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="16" height="16">
        <title>F6S</title>
        <defs>
            <image  width="100" height="100" id="img2" href="data:image/png;base64,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"/>
        </defs>
        <style>
        </style>
        <use id="Background1" href="#img2" x="0" y="0"/>
    </svg>',
        'format' => 'https://www.f6s.com/%s',
        'input_display_format' => true,
        'placeholder' => ''
    ],
];
