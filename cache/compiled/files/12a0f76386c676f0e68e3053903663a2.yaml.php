<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vxrbavit/public_html/user/plugins/gmaps/blueprints.yaml',
    'modified' => 1460175053,
    'data' => [
        'name' => 'Google Maps',
        'version' => '1.0.4',
        'description' => 'This plugin add Google Maps [GMaps](http://googlemaps.com) into your **Grav site**.',
        'icon' => 'map-marker',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-gmaps',
        'keywords' => 'google, maps, plugin',
        'bugs' => 'https://github.com/nunopress/grav-plugin-gmaps/issues',
        'docs' => 'https://github.com/nunopress/grav-plugin-gmaps/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
