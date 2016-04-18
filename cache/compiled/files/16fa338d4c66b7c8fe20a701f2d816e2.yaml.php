<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vxrbavit/public_html/user/config/plugins/email.yaml',
    'modified' => 1461003430,
    'data' => [
        'enabled' => true,
        'from' => 'no-reply@qwyk.ly',
        'from_name' => 'QWYK Blog',
        'to' => 'cadsoakley+qwyk@gmail.com',
        'to_name' => 'QWYK Blog',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
