<?php
/*
 * @Author: jiajiazhang
 * @Date: 2022-02-11 21:29:17
 * @LastEditors: jiajiazhang
 * @LastEditTime: 2022-05-05 09:51:55
 * @Description: file content
 */
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' =>  ['error', 'warning', 'trace', 'info'],
					'logFile' => '@runtime/logs/app-'.date('Y-m-d', time()).'.log',
					'maxFileSize' => 512
                ],
            ],
            
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
