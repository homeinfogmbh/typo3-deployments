<?php

return [
    'ctrl' => [
        'title' => 'Deployments',
        'label' => 'address',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'name,',
        'iconfile' => 'EXT:deployments/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, address'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'Hide',
            'config' => [
                'type' => 'check',
            ],
        ],
        'street' => [
            'exclude' => false,
            'label' => 'Street',
            'config' => [
                'type' => 'input',
            ],
        ],
        'house_number' => [
            'exclude' => false,
            'label' => 'House Number',
            'config' => [
                'type' => 'input',
            ],
        ],
        'zip_code' => [
            'exclude' => false,
            'label' => 'ZIP Code',
            'config' => [
                'type' => 'input',
            ],
        ],
        'city' => [
            'exclude' => false,
            'label' => 'City',
            'config' => [
                'type' => 'input',
            ],
        ],
    ],
];
