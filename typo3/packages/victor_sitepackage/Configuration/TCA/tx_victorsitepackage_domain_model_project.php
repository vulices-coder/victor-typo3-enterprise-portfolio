<?php

return [
    'ctrl' => [
        'title' => 'Project',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'iconfile' => 'EXT:victor_sitepackage/Resources/Public/Icons/project.svg',
        'searchFields' => 'title,description,tech_stack',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],

    'types' => [
        '1' => [
            'showitem' => '
                title,
                description,
                tech_stack,
                github_url,
                demo_url,
                featured
            ',
        ],
    ],

    'columns' => [
        'title' => [
            'label' => 'Titel',
            'config' => [
                'type' => 'input',
                'required' => true,
                'max' => 255,
            ],
        ],

        'description' => [
            'label' => 'Beschreibung',
            'config' => [
                'type' => 'text',
                'rows' => 5,
            ],
        ],

        'tech_stack' => [
            'label' => 'Tech Stack',
            'config' => [
                'type' => 'input',
                'max' => 255,
            ],
        ],

        'github_url' => [
            'label' => 'GitHub URL',
            'config' => [
                'type' => 'input',
                'max' => 255,
            ],
        ],

        'demo_url' => [
            'label' => 'Demo URL',
            'config' => [
                'type' => 'input',
                'max' => 255,
            ],
        ],

        'featured' => [
            'label' => 'Featured Project',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => '',
                        'value' => '',
                    ],
                ],
            ],
        ],
    ],
];