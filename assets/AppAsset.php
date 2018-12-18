<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'template/slick/slick.css',
        'template/slick/slick-theme.css',
        'template/css/all.css',
//        'template/main/main.css',
    ];
    public $js = [
        '//code.jquery.com/jquery-1.11.0.min.js',
        '//code.jquery.com/jquery-migrate-1.2.1.js',
        'template/slick/slick.min.js',
        'template/main/main.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
