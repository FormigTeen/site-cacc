<?php

return [
    'production' => false,
    'baseUrl' => '',
    'project' => [
        'title' => 'Departamento de Computação da UFBA',
        'description' => 'Website description.',
    ],
    'bot_url' => 'https://t.me/ufba_bot',
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

    'logo_url' => 'https://i.imgur.com/XrcGZbH.png',

    'ROUTES' => [
        'home' => '/',
        'teachers' => '/professores',
        'courses' => '/cursos',
        'blog' => '/blog',
        'news' => '/noticias',
        'colabore' => '/colabore',
    ],

    'isActive' => function ($page, $path) {
        return ( $page->getUrl() ===  $path ? "active" : "" );
    },

    'dateToStr' => function ($page, $date) {
        return Carbon\Carbon::parse($date)->format('d \d\e F \d\e Y');
    },

    'dateToCarbon' => function ($page, $date) {
        return Carbon\Carbon::parse($date);
    },

    'collections' => [
        'professores' => [
            'path' => '{collection}/{-name}',
            'sort' => 'name',
            'filter' => function ($item) {
                return $item->is_published ?? false;
            }
        ],
        'cursos' => [
            'path' => '{collection}/{-title}',
            'sort' => 'title',
            'filter' => function ($item) {
                return $item->is_published ?? false;
            }
        ],
        'posts' => [
            'path' => 'blog/post/{-title}',
            'sort' => '-date',
            'filter' => function ($item) {
                return ( ( $item->is_published ?? false ) && \Carbon\Carbon::now()->timestamp >= $item->date );
            }
        ],
        'noticias' => [
            'path' => 'noticias/date/{-title}',
            'sort' => '-date',
            'filter' => function ($item) {
                return ( ( $item->is_published ?? false ) && \Carbon\Carbon::now()->timestamp >= $item->date);
            }
        ],
        'eventos' => [
            'sort' => 'date',
            'filter' => function ($item) {
                return ( ( $item->is_published ?? false ) && \Carbon\Carbon::now()->timestamp <= $item->date);
            }
        ],
        'feedbacks' => [
            'filter' => function ($item) {
                return ( $item->is_published ?? false ) ;
            }
        ],
    ],
];
