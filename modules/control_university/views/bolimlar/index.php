<?php

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Bo\'limlar';
\Yii::$app->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>
 <p> 
  <?= Html::a('Yangi bo\'lim qo\'shish', ['create'], ['class' => 'btn btn-success']) ?> 
</p>

   <?= 
    GridView::widget([
      'dataProvider' => $dataProvider,
    //  'filterModel' => $searchModel, 
      'columns' => [
       ['class' => 'yii\grid\SerialColumn'],
       'id',
       'nomlanishi',        
       'tarif', 
       ['class' => 'yii\grid\ActionColumn'], 
	],  
    ])
  ?>
                                                                                                                  
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>