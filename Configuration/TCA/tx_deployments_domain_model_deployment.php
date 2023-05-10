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
        '1' => ['showitem' => 'hidden, street, house_number, zip_code, city, lpt_street, lpt_house_number, lpt_zip_code, lpt_city, annotation'],
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
        'lpt_street' => [
            'exclude' => false,
            'label' => 'Local Public Transport Street',
            'config' => [
                'type' => 'input',
            ],
        ],
        'lpt_house_number' => [
            'exclude' => false,
            'label' => 'Local Public Transport House Number',
            'config' => [
                'type' => 'input',
            ],
        ],
        'lpt_zip_code' => [
            'exclude' => false,
            'label' => 'Local Public Transport ZIP Code',
            'config' => [
                'type' => 'input',
            ],
        ],
        'lpt_city' => [
            'exclude' => false,
            'label' => 'Local Public Transport City',
            'config' => [
                'type' => 'input',
            ],
        ],
        'annotoation' => [
            'exclude' => false,
            'label' => 'Annotation',
            'config' => [
                'type' => 'input',
            ],
        ],
    ],
];
