<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/mdgvg/user/themes/mdgvg-theme/blueprints.yaml',
    'modified' => 1671532718,
    'size' => 555,
    'data' => [
        'name' => 'Mdgvg Theme',
        'slug' => 'mdgvg-theme',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'mdgvg theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'arthello',
            'email' => 'info@arthello.com'
        ],
        'homepage' => NULL,
        'demo' => NULL,
        'keywords' => 'grav, theme, etc',
        'bugs' => NULL,
        'readme' => NULL,
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
