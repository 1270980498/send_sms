<?php
// +----------------------------------------------------------------------
// | 胜家云 [ SingKa Cloud ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2020 https://www.singka.net All rights reserved.
// +----------------------------------------------------------------------
// | 宁波晟嘉网络科技有限公司
// +----------------------------------------------------------------------
// | Author: ShyComet <shycomet@qq.com>
// +----------------------------------------------------------------------
return [
    'aliyun'       => [
        'version'       => '2017-05-25',
        'host'          => 'dysmsapi.aliyuncs.com',
        'scheme'        => 'http',
        'region_id'     => 'cn-hangzhou',
        'access_key'    => '',
        'access_secret' => '',
        'sign_name'     => '',
        'actions'       => [
            'register'        => [
                'actions_name'      => '注册验证',
                'template_id'  => 'SMS_53115055',
            ],
            'login'           => [
                'actions_name'      => '登录验证',
                'template_id'  => 'SMS_53115057',
            ],
            'change_password' => [
                'actions_name'      => '修改密码',
                'template_id'  => 'SMS_53115053',
            ],
            'change_userinfo' => [
                'actions_name'      => '变更信息',
                'template_id'  => 'SMS_53115052',
            ],
        ],
    ],
    'qcloud'       => [
        'appid'   =>  '',
        'appkey'  =>  '',
        'sign_name'       => '',
        'actions'       => [
            'register'        => [
                'actions_name'      => '注册验证',
                'template_id'  => '566198',
            ],
            'login'           => [
                'actions_name'      => '登录验证',
                'template_id'  => '566197',
            ],
            'change_password' => [
                'actions_name'      => '修改密码',
                'template_id'  => '566199',
            ],
            'change_userinfo' => [
                'actions_name'      => '变更信息',
                'template_id'  => '566200',
            ],
        ],
    ]
];