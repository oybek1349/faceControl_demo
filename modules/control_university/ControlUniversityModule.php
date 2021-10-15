<?php

namespace app\modules\control_university;
use yii\base\Module;
/**
 * control_university module definition class
 */
class ControlUniversityModule extends Module {
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\control_university\controllers';
    
    public $defaultRoute = 'main';
    /**
     * {@inheritdoc}
     */
    public function init(){
        parent::init();        
    }
   
  /*  public function behaviors(){

	 return [
         'access' => [
           'class' => \yii\filters\AccessControl::className(),
           'only' => ['default'],
           'rules' => [
              'allow' => true,
              'roles' => ['@'],
		 ] 
	    ]
	 ];

    }*/
}
