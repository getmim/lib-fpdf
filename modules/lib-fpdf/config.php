<?php

return [
    '__name' => 'lib-fpdf',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-fpdf.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-fpdf' => ['install','update','remove'],
        'etc/static/lib-fpdf/font' => ['install', 'update', 'remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibFpdf\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-fpdf/library'
            ]
        ],
        'files' => []
    ]
];
