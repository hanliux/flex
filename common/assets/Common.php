<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 2017/2/23
 * Time: 22:01
 */

namespace common\assets;


use kartik\icons\FontAwesomeAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;
use yii\widgets\PjaxAsset;

class Common extends AssetBundle
{
    public function init()
    {
        parent::init();
        $this->depends = array_merge($this->depends, [
            Lodash::className(),
            \rmrevin\yii\fontawesome\cdn\AssetBundle::className(),
//            \rmrevin\yii\fontawesome\AssetBundle::className(),
            YiiAsset::className(),
            PjaxAsset::className(),
        ]);
    }
}