<?php

use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Qaydnoma';
Yii::$app->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

   <?= 
    GridView::widget([
      'dataProvider' => $dataProvider,      
      'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'employeeID',
        'authDateTime',        
        'authDate', 
        'authTime', 
        'direction',                                                  
        'personName',                                           
        'cardNo',                                           
        [
          'class' => 'yii\grid\ActionColumn',
          'template' => '{view} {update} {delete}',          
          'buttons'=>[
		  'view' => function($url, $model, $key){
		     return Html::a('', ['qaydnoma/view', 'id'=>$model->employeeID]);
	     	},
		  'update' => function($url, $model, $key){
		     return Html::a('', ['qaydnoma/update', 'id'=>$model->employeeID]);
	     	},
		  'delete' => function($url, $model, $key){
		     return Html::a('', ['qaydnoma/delete', 'id'=>$model->employeeID]);
	     	}
		],
	   ], 
	],  
    ])
  ?>
                                                                                                                  
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>