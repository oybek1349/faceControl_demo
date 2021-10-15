<?php

use yii\grid\GridView;
use yii\bootstrap\Html;

$this->title = 'Ish grafigi';
Yii::$app->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>
<p> 
  <?= Html::a('Yangi ish grafigi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?> 
</p>

   <?= 
    GridView::widget([
      'dataProvider' => $dataProvider,
      //'filterModel' => $searchModel, 
      'columns' => [
       ['class' => 'yii\grid\SerialColumn'],
       'id',
       'ish_boshlanish_vaqti',
       'ish_tugash_vaqti',        
       'ish_grafigi', 
       'tarif', 
       'qoshimcha', 
       ['class' => 'yii\grid\ActionColumn'], 
	],  
    ])
  ?>
                                                                                                                  
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>