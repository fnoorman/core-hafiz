<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\assets\inspinia;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UserPageAsset extends AssetBundle
{
    public $sourcePath = '@themes/inspinia/assets';
    public $baseUrl = '@web';
    public $css = [
        'css/custom.css',
        'css/morris-0.4.3.min.css',
        'css/datepicker3.css',
    ];
    public $js = [
      "js/plugins/morris/raphael-2.1.0.min.js",
      "js/plugins/morris/morris.js",
      "js/plugins/datapicker/bootstrap-datepicker.js",
    ];
    public $depends = [
          'common\assets\inspinia\InspiniaAsset',
    ];
}
