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
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js_a/jquery.js',
        'js_a/nicepage.js'
    ];
    public $css = [
        //Richiamo css contatti
        'css_a/Post-Template.css',
        'css_a/nicepage.css',
        //'css_a/nicepage1.css',
        'css_a/Home.css'
    ];
}