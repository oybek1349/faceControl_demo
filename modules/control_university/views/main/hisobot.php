<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\grid\GridView;

$this->title = 'Ish vaqtini hisobga olish hisoboti';
Yii::$app->params['breadcrumbs'][] = $this->title;

?>
<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>
   <?= 
     GridView::widget([
      'dataProvider' => $dataProvider,
     // 'filterModel' => $searchModel, 
      'columns' => [
       ['class' => 'yii\grid\SerialColumn'],       
       'xodimID',
       'tabel_nomer',
       'ismi',
       'bolim',
       'lavozim',
       'qaydlov_vaqti',
       'karta_nomer',                                                                                     
       ['class' => 'yii\grid\ActionColumn'], 
	 ],  
	])
    ?>                                                                                                                
<?php 
      
?>
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>

