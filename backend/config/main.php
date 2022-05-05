<?php
/*
 * @Author: jiajiazhang
 * @Date: 2022-02-11 21:29:17
 * @LastEditors: jiajiazhang
 * @LastEditTime: 2022-05-05 10:17:41
 * @Description: file content
 */
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        
        'request' => [
            'csrfParam' => '_csrf-backend',
			'enableCookieValidation' => true,//https://blog.csdn.net/Guzarish/article/details/118627408
			'cookieValidationKey' => 'abcdefg1234567890',
        ],
        'user' => file_exists(Yii::getAlias('@frontend') . '/web/data/install.lock') ? [
            'identityClass' => 'common\models\UserModel',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
			'loginUrl' => ['user/login']
        ] : null,
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'urlManager' => [
            'enablePrettyUrl' => true,//是否开启美化效果
            'showScriptName' => false,//是否或略脚本名index.php
            'enableStrictParsing' => false,//是否开启严格解析路由
            'suffix' => '',
            'rules' => [//包含了路由的匹配规则列表
                '<controller:\w+>/<action:\w+>/<page:\d+>' => '<controller>/<action>',
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",
            ],
        ],
    ],
    'params' => $params,
];
