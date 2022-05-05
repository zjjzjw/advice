<?php
/*
 * @Author: jiajiazhang
 * @Date: 2022-02-11 21:29:17
 * @LastEditors: jiajiazhang
 * @LastEditTime: 2022-05-05 09:51:39
 * @Description: file content
 */

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
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
    ],
    'params' => $params,
];
