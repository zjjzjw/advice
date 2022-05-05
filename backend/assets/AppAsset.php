<?php
/*
 * @Author: jiajiazhang
 * @Date: 2022-02-11 21:29:17
 * @LastEditors: jiajiazhang
 * @LastEditTime: 2022-05-05 08:26:03
 * @Description: file content
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
