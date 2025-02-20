<?php

return [
    'labels' => [
        'Carmis' => 'Card Key',
        'carmis' => 'Card Key',
    ],
    'fields' => [
        'goods_id' => 'Associated Product',
        'status' => 'Status',
        'carmi' => 'Card Key Content',
        'status_unsold' => 'Unsold',
        'status_sold' => 'Sold',
        'is_loop' => 'Loop Card Key',
        'yes' => 'Yes',
        'import_carmis' => 'Import Card Keys',
        'carmis_list' => 'Card Key List',
        'carmis_txt' => 'Card Key Text',
        'are_you_import_sure' => 'Are you sure you want to import the card keys?',
        'remove_duplication' => 'Remove Duplicates?',
    ],
    'options' => [
    ],
    'helps' => [
        'carmis_list' => 'One per line, separated by Enter. Please do not import card keys with excessively long text as it may cause memory overflow. If the card key is too large, it is recommended to change the product to manual processing.'
    ],
    'rule_messages' => [
        'carmis_list_and_carmis_txt_can_not_be_empty' => 'Please provide card keys to import or select the card key file to upload.',
        'import_carmis_success' => 'Card keys imported successfully!',
    ]
];
