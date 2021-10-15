<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = 'Qoida buzarlik';
Yii::$app->params['breadcrumbs'][] = $this->title;

?>
<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>
   <?= 
     GridView::widget([
      'dataProvider' => $dataProvider,
      //'filterModel' => $searchModel, 
      'columns' => [
       ['class' => 'yii\grid\SerialColumn'],
       'tabel_nomer',
       'ismi',
       'bolim',
       'lavozim',
       'qaydlov vaqti',
       'karta nomer',                                                                                     
       ['class' => 'yii\grid\ActionColumn'], 
	 ],  
	])
    ?>                                                                                                                

<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>

