<?php
/**
 * The file was created by Assimon.
 *
 * @author    assimon<ashang@utf8.hk>
 * @copyright assimon<ashang@utf8.hk>
 * @link      http://utf8.hk/
 */

return [
    'labels' => [
        'SystemSetting' => 'System Settings',
        'system_setting' => 'System Settings',
        'base_setting' => 'Basic Settings',
        'mail_setting' => 'Email Service',
        'order_push_setting' => 'Order Push Configuration',
        'geetest' => 'Geetest Verification',
    ],

    'fields' => [
        'title' => 'Website Title',
        'text_logo' => 'Text Logo',
        'img_logo' => 'Image Logo',
        'keywords' => 'Website Keywords',
        'description' => 'Website Description',
        'notice' => 'Site Announcement',
        'footer' => 'Footer Custom Code',
        'manage_email' => 'Admin Email',
        'is_open_anti_red' => 'Enable WeChat/QQ Anti-Red',
        'is_open_img_code' => 'Enable Image Captcha',
        'is_open_search_pwd' => 'Enable Search Password',
        'is_open_google_translate' => 'Enable Google Translate',

        'is_open_server_jiang' => 'Enable ServerJiang',
        'server_jiang_token' => 'ServerJiang Communication Token',
        'is_open_telegram_push' => 'Enable Telegram Push',
        'telegram_userid' => 'Telegram User ID',
        'telegram_bot_token' => 'Telegram Bot Token',
        'is_open_bark_push' => 'Enable Bark Push',
        'is_open_bark_push_url' => 'Push Order URL',
        'bark_server' => 'Bark Server',
        'bark_token' => 'Bark Communication Token',
        'is_open_qywxbot_push' => 'Enable Enterprise WeChat Bot Push',
        'qywxbot_key' => 'Enterprise WeChat Bot Communication Key',

        'template' => 'Site Template',
        'language' => 'Site Language',
        'order_expire_time' => 'Order Expiry Time (Minutes)',

        'driver' => 'Email Driver',
        'host' => 'SMTP Server Address',
        'port' => 'Port',
        'username' => 'Username',
        'password' => 'Password',
        'encryption' => 'Protocol',
        'from_address' => 'From Address',
        'from_name' => 'From Name',

        'geetest_id' => 'Geetest ID',
        'geetest_key' => 'Geetest Key',
        'is_open_geetest' => 'Enable Geetest',
    ],
    'options' => [
    ],
    'rule_messages' => [
        'save_system_setting_success' => 'System Configuration Saved Successfully!',
        'change_reboot_php_worker' => 'Modifying some configurations requires restarting [supervisor] or PHP process management tools to take effect, such as email service, ServerJiang, etc.'
    ]
];
