<?php

namespace app\modules\control_university\controllers;
use app\modules\control_university\models\Xodimlar;
use app\modules\control_university\models\XodimlarSearch;
use app\modules\control_university\models\Bolimlar;
use app\modules\control_university\models\Lavozimlar;
use app\modules\control_university\models\Qaydnoma;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;
/**
 * Default controller for the `control_university` module
 */
class MainController extends Controller {

    public $layout = 'main';

    public function actionIndex(){

        $searchModel = new XodimlarSearch();         
        $dataProvider  = new ActiveDataProvider([
	    'query' => Xodimlar::find()->select(['xodimID','ismi','tabel_nomer','cardNo','uy_manzil','tel_raqam']),
         'pagination' => [
            'pageSize' => 15,
	    ],         
	   ]);
        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
	   ]);
    }
    public function actionLogout(){

	   if( !Yii::$app->user->isGuest ){
	       Yii::$app->user->logout();
            return $this->goHome();   
	   }
        return $this->goHome();
    }
    public function actionHisobot(){
         
	 $query = new Query();
      $query->select([
          'id'=>'xd.id',
          'xodimID'=>'xd.xodimID',   
          'tabel_nomer'=>'xd.tabel_nomer',
          'ismi' => 'xd.ismi',
          'bolim' => 'b.nomlanishi',
          'lavozim' => 'l.nomlanishi',
          'qaydlov_vaqti' => 'q.authDateTime', 
          'karta_nomer' => 'q.cardNo'  
		])->from([
          'xd' => Xodimlar::tableName() 
		])->innerJoin(['q' => Qaydnoma::tableName()], 'q.employeeID=xd.xodimID OR q.cardNo=xd.cardNo' 
      	  )->innerJoin(['b'=> Bolimlar::tableName()], 'b.id=xd.bolimlar_id'
		  )->innerJoin(['l'=> Lavozimlar::tableName()], 'l.id=xd.lavozimlar_id'
		  )->all();
  
        $searchModel = new XodimlarSearch();       
        $dataProvider  = new ActiveDataProvider([
	    'query' => $query,
         'pagination' => [
            'pageSize' => 15,
	    ],         
	   ]);

        return $this->render('hisobot', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
       
    }    
    
}
