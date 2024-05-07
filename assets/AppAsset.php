<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
        'https://fonts.googleapis.com/css2?family=Inter&display=swap>',
        'css/layout/main-footer.css',
        'css/layout/main-header.css',
        'css/font-style.css',
        'css/normalize.css',
        'css/style.css',
        'css/pages/index.css',
        'css/pages/vacancy.css',
        'css/pages/events.css',
        'css/pages/activity.css',
        'css/pages/form.css',
    ];
    public $js = [

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}
