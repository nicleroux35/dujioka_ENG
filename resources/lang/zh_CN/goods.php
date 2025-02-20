<?php

return [
    'labels' => [
        'Goods' => 'Goods',
        'goods' => 'Goods',
    ],
    'fields' => [
        'actual_price' => 'Actual Selling Price',
        'group_id' => 'Category',
        'api_hook' => 'Callback Event',
        'buy_prompt' => 'Purchase Prompt',
        'description' => 'Product Description',
        'gd_name' => 'Product Name',
        'gd_description' => 'Product Description',
        'gd_keywords' => 'Product Keywords',
        'in_stock' => 'Stock',
        'ord' => 'Sorting Weight',
        'other_ipu_cnf' => 'Other Input Box Configuration',
        'picture' => 'Product Image',
        'retail_price' => 'Retail Price',
        'sales_volume' => 'Sales Volume',
        'type' => 'Product Type',
        'buy_limit_num' => 'Limit on Maximum Quantity per Order',
        'wholesale_price_cnf' => 'Wholesale Price Configuration',
        'automatic_delivery' => 'Automatic Delivery',
        'manual_processing' => 'Manual Processing',
        'is_open' => 'Is Available',
        'coupon_id' => 'Available Coupon Code'
    ],
    'options' => [
    ],
    'helps' => [
        'retail_price' => 'This is optional and is mainly used for display purposes',
        'picture' => 'This is optional; a default image will be used if not uploaded',
        'in_stock' => 'When the product type is "Manual Processing", the stock quantity entered manually will take effect. For "Automatic Delivery" type, the system will automatically manage stock quantity',
        'buy_limit_num' => 'Prevents malicious inventory manipulation. A value of 0 means there is no restriction on the maximum quantity per order',
        'other_ipu_cnf' => 'Format: [Unique Identifier (in English) = Input Box Name = Required] For example: qq_account=QQ Account=true means a new input box labeled "QQ Account" will appear on the product detail page, and it is required. (One per line)',
        'wholesale_price_cnf' => 'For example: 5=3 means when customers purchase 5 or more items, the price per item will be 3. (One per line)',
    ]
];

