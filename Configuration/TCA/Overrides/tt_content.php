<?php
defined('TYPO3_MODE') or die();

$tempColumns = [
    'bootstrap_col_xs' => [
        'exclude' => true,
        'label' => 'Extra small (<576px)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', '0'],
                ['Auto (col)', '100'],
                ['1/12', '1'],
                ['2/12', '2'],
                ['3/12', '3'],
                ['4/12', '4'],
                ['5/12', '5'],
                ['6/12', '6'],
                ['7/12', '7'],
                ['8/12', '8'],
                ['9/12', '9'],
                ['10/12', '10'],
                ['11/12', '11'],
                ['12/12', '12'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'bootstrap_col_sm' => [
        'exclude' => true,
        'label' => 'Small (≥576px)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', '0'],
                ['Auto (col-sm)', '100'],
                ['1/12', '1'],
                ['2/12', '2'],
                ['3/12', '3'],
                ['4/12', '4'],
                ['5/12', '5'],
                ['6/12', '6'],
                ['7/12', '7'],
                ['8/12', '8'],
                ['9/12', '9'],
                ['10/12', '10'],
                ['11/12', '11'],
                ['12/12', '12'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'bootstrap_col_md' => [
        'exclude' => true,
        'label' => 'Medium (≥768px)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', '0'],
                ['Auto (col-md)', '100'],
                ['1/12', '1'],
                ['2/12', '2'],
                ['3/12', '3'],
                ['4/12', '4'],
                ['5/12', '5'],
                ['6/12', '6'],
                ['7/12', '7'],
                ['8/12', '8'],
                ['9/12', '9'],
                ['10/12', '10'],
                ['11/12', '11'],
                ['12/12', '12'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'bootstrap_col_lg' => [
        'exclude' => true,
        'label' => 'Large (≥992px)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', '0'],
                ['Auto (col-lg)', '100'],
                ['1/12', '1'],
                ['2/12', '2'],
                ['3/12', '3'],
                ['4/12', '4'],
                ['5/12', '5'],
                ['6/12', '6'],
                ['7/12', '7'],
                ['8/12', '8'],
                ['9/12', '9'],
                ['10/12', '10'],
                ['11/12', '11'],
                ['12/12', '12'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'bootstrap_col_xl' => [
        'exclude' => true,
        'label' => 'Extra Large (≥1200px)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', '0'],
                ['Auto (col-xl)', '100'],
                ['1/12', '1'],
                ['2/12', '2'],
                ['3/12', '3'],
                ['4/12', '4'],
                ['5/12', '5'],
                ['6/12', '6'],
                ['7/12', '7'],
                ['8/12', '8'],
                ['9/12', '9'],
                ['10/12', '10'],
                ['11/12', '11'],
                ['12/12', '12'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'bootstrap_css_outer' => [
        'exclude' => true,
        'label' => 'CSS for outer <div>',
        'config' => [
            'type' => 'input',
            'size' => '30',
            'max' => '255',
            'eval' => ''
        ]
    ],
    'bootstrap_css_inner' => [
        'exclude' => true,
        'label' => 'CSS for inner <div>',
        'config' => [
            'type' => 'input',
            'size' => '30',
            'max' => '255',
            'eval' => ''
        ]
    ],
    'bootstrap_shadow' => [
        'exclude' => true,
        'label' => 'Shadow',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', ''],
                ['No shadow', 'shadow-none'],
                ['Small shadow', 'shadow-sm'],
                ['Regular shadow', 'shadow'],
                ['Large shadow', 'shadow-lg'],
            ],
            'size' => 1,
            'maxitems' => 1,
            'default' => ''
        ]
    ],
    'animation_type' => [
        'exclude' => true,
        'label' => 'Animation Type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', '0'],
                ['fadeIn', 'fadeIn'],
                ['fadeInUp', 'fadeInUp'],
                ['fadeInLeft', 'fadeInLeft'],
                ['fadeInRight', 'fadeInRight'],
                ['fadeInDown', 'fadeInDown'],
                ['zoomIn', 'zoomIn'],
            ],
            'size' => 1,
            'maxitems' => 1,
            'default' => ''
        ]
    ],
    'animation_delay' => [
        'exclude' => true,
        'label' => 'Animation Delay in seconds',
        'config' => [
            'type' => 'input',
            'size' => '1',
            'max' => '1',
            'eval' => 'int',
            'default' => '0'
        ]
    ],
    'animation_speed' => [
        'exclude' => true,
        'label' => 'Animation Speed (ms)',
        'config' => [
            'type' => 'input',
            'size' => '4',
            'max' => '6',
            'eval' => '',
            'default' => '1000'
        ]
    ],
    'animation_offset' => [
        'exclude' => true,
        'label' => 'Offset',
        'config' => [
            'type' => 'input',
            'size' => '4',
            'max' => '4',
            'eval' => 'trim',
            'default' => '90%'
        ]
    ],
    'disable_div_wrapper' => [
        'exclude' => true,
        'label' => 'Disable DIV-Wrapper',
        'config' => [
            'type' => 'check',
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

// Adds fields after palette frames, so that all content elements will use the additional fields.
// addToAllTCAtypes() is not possible!
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    '  --linebreak--, disable_div_wrapper, --linebreak--, ' .
    'bootstrap_col_xs, bootstrap_col_sm, bootstrap_col_md, bootstrap_col_lg, bootstrap_col_xl, --linebreak--, ' .
    'bootstrap_shadow, --linebreak--,' .
    'bootstrap_css_outer, bootstrap_css_inner, --linebreak--,' .
    'animation_type, animation_delay, animation_speed, animation_offset, --linebreak--',
    'after: space_after_class'
);
