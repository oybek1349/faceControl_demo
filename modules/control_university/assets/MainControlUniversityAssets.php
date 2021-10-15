<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of MainControlUniversityAssets
 *
 * @author Admin
 */

namespace app\modules\control_university\assets;
use yii\web\AssetBundle;

class MainControlUniversityAssets extends AssetBundle {

    public $sourcePath = '@mcu/web/assets';

    public $css = [
       'plugins/bootstrap/css/bootstrap.min.css',
  //     'plugins/summernote/dist/summernote.css',
       'css/style.min.css',   
    ];
   
    public $js = [
       'bundles/lib.vendor.bundle.js',
  //     'bundles/counterup.bundle.js',
   //    'bundles/apexcharts.bundle.js',
   //    'bundles/summernote.bundle.js',
       'js/core.js', 
   //    'js/page/index.js',
   //    'js/page/summernote.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',        
    ];

    public $cssOptions = [ 'position'=> \yii\web\View::POS_HEAD ];
    public $jsOptions = [ 'position'=> \yii\web\View::POS_END ];  
}
