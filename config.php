<?php

return [
    'production' => false,
    'baseUrl' => '',
    'project' => [
        'title' => 'Departamento de Computação da UFBA',
        'description' => 'Website description.',
    ],
    'address' => 'Av. Adhemar de Barros, s/nº - Ondina, Salvador - BA, 40170-110 | Instituto de Matemática - Sala 106',
    'email' => 'dcc@ufba.br',
    'phone' => '+55 71 3283-6264',

    'foundation_year' => 1950,
    'students_number' => '12.222',
    'teachers_number' => 44,
    'awards_number' => 13,

    'social' => [
//        'facebook' => '',
//        'twitter' => '',
//        'instagram' => '',
//        'youtube' => 'a',
//        'telegram' => '',
    ],

    'logo_url' => 'https://lh3.googleusercontent.com/proxy/A-rTdMyYcwElvN_jyBLrjrgi33iyTV9SUkf7tjsRAodGvbJ869POstfNWyQuy1929TRoiKtZ2HM-QF4LTdz-Lxa81pYlYqI',

    'ROUTES' => [
        'home' => '/',
        'teachers' => '/professores'
    ],

    'isActive' => function ($page, $path) {
        return ( $page->getUrl() ===  $path ? "active" : "" );
    },

    'collections' => [
        'professores' => [
            'path' => '{collection}/{-name}',
            'sort' => 'name',
        ]
    ],
];
