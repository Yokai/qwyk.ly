<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vxrbavit/public_html/user/config/plugins/comments.yaml',
    'modified' => 1461003331,
    'data' => [
        'enabled' => true,
        'enable_on_routes' => [
            0 => '/'
        ],
        'disable_on_routes' => [
            0 => '/blog/blog-post-to-ignore',
            1 => '/ignore-this-route'
        ],
        'form' => [
            'name' => 'comments',
            'fields' => [
                0 => [
                    'name' => 'name',
                    'label' => 'Name',
                    'placeholder' => 'Enter your name',
                    'autocomplete' => 'on',
                    'type' => 'text',
                    'validate' => [
                        'required' => true
                    ]
                ],
                1 => [
                    'name' => 'email',
                    'label' => 'Email',
                    'placeholder' => 'Enter your email address',
                    'type' => 'email',
                    'validate' => [
                        'required' => true
                    ]
                ],
                2 => [
                    'name' => 'text',
                    'label' => 'Message',
                    'placeholder' => 'Enter your message',
                    'type' => 'textarea',
                    'validate' => [
                        'required' => true
                    ]
                ],
                3 => [
                    'name' => 'date',
                    'type' => 'hidden',
                    'process' => [
                        'fillWithCurrentDateTime' => true
                    ]
                ],
                4 => [
                    'name' => 'title',
                    'type' => 'hidden',
                    'evaluateDefault' => 'grav.page.header.title'
                ],
                5 => [
                    'name' => 'lang',
                    'type' => 'hidden',
                    'evaluateDefault' => 'grav.language.getLanguage'
                ],
                6 => [
                    'name' => 'path',
                    'type' => 'hidden',
                    'evaluateDefault' => 'grav.uri.path'
                ],
                7 => [
                    'name' => 'g-recaptcha-response',
                    'label' => 'Captcha',
                    'type' => 'captcha',
                    'recatpcha_site_key' => '6LdZqxMTAAAAADv9hvXKeC5c6fRSqwMhidxRcrN2',
                    'recaptcha_not_validated' => 'Captcha not valid!',
                    'validate' => [
                        'required' => true
                    ],
                    'process' => [
                        'ignore' => true
                    ]
                ]
            ],
            'buttons' => [
                0 => [
                    'type' => 'submit',
                    'value' => 'Submit'
                ]
            ],
            'process' => [
                0 => [
                    'email' => [
                        'subject' => '[New Comment] from {{ form.value.name|e }}',
                        'body' => '{% include \'forms/data.html.twig\' %}'
                    ]
                ],
                1 => [
                    'captcha' => [
                        'recatpcha_secret' => '6LdZqxMTAAAAAOAm2IaI1eH2k538UnglbQU0JhA5'
                    ]
                ],
                2 => [
                    'addComment' => NULL
                ],
                3 => [
                    'message' => 'Thank you for writing your comment!'
                ]
            ]
        ]
    ]
];
