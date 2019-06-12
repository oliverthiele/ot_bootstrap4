<?php

/************************************************************************
 * Extension Manager/Repository config file for ext: "ot_bootstrap4"
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ************************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap 4 Basis Template',
    'description' => 'Bootstrap 4 basis template',
    'category' => 'templates',
    'author' => 'Oliver Thiele',
    'author_email' => 'mailYYYY@oliver-thiele.de',
    'author_company' => 'Web Development Oliver Thiele',
    'state' => 'beta',
    'uploadfolder' => false,
    'clearCacheOnLoad' => true,
    'version' => '9.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.9.99',
            'fluid_styled_content' => ''
        ],
        'conflicts' => [],
        'suggests' => [
            'ot_divider' => '9.5.0-9.9.99'
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'OliverThiele\\OtBootstrap4\\' => 'Classes'
        ]
    ]
];
