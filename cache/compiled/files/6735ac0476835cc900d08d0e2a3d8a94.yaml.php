<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vxrbavit/public_html/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1452883046,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
