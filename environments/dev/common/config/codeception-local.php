<?php
/*
 * @Author: jiajiazhang
 * @Date: 2022-02-11 21:29:17
 * @LastEditors: jiajiazhang
 * @LastEditTime: 2022-05-04 16:08:34
 * @Description: file content
 */

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/main.php',
    require __DIR__ . '/main-local.php',
    require __DIR__ . '/test.php',
    require __DIR__ . '/test-local.php',
    [
        'components' => [
            'request' => [
                // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
                'cookieValidationKey' => 'ZN0L46pd-vWXwWzg5xVLAcj9P7J5SOJY',
            ],
        ],
    ]
);
