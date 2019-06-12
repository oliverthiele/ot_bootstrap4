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
    'bootstrap_css_outer, bootstrap_css_inner, --linebreak--,' .
    'after: space_after_class'
);
