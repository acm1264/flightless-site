<?php

return [
    'production' => false,
    'baseUrl' => 'https://flightless-game.netlify.app',
    'site' => [
        'title' => 'Flightless',
        'description' => 'A work-in-progress Adventure RPG Game!',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Flightless Team',
        'twitter' => 'johndoe',
        'github' => 'johndoe',
    ],
    'services' => [
        'cmsVersion' => '2.10.52',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'flightless',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'dabid9eo5',
            'apiKey' => '936558176835535',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
