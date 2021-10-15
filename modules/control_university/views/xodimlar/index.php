<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Xodimlar';
Yii::$app->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<p> 
  <?= Html::a('Yangi xodim qo\'shish', ['create'], ['class' => 'btn btn-success']) ?> 
</p>

   <?= 
    GridView::widget([
      'dataProvider' => $dataProvider,
      //'filterModel' => $searchModel, 
      'columns' => [
       ['class' => 'yii\grid\SerialColumn'],
       'xodimID',
       'ismi',        
       'tabel_nomer', 
       'cardNo', 
       'uy_manzil', 
       'tel_raqam',                                           
       ['class' => 'yii\grid\ActionColumn'], 
	],  
    ])
  ?>
                                                                                                                  
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>