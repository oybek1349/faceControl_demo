<?php

use app\modules\control_university\assets\MainControlUniversityAssets as MainAsset;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$bundle = MainAsset::register($this);

?>

    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body" id="page_top">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Siz nimani topmoqchisiz?">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="right">                       
                        <div class="notification d-flex">                                            
                            
                            <div class="dropdown d-flex">
                                <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url(<?=$bundle->baseUrl?>/images/xs/avatar.jpg)"></span>Name</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href=""><i class="dropdown-icon fe fe-user"></i> Profil</a>
                                    <a class="dropdown-item" href=""><i class="dropdown-icon fe fe-settings"></i> Sozlamalar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Yordam kerakmi?</a>
                                    <a class="dropdown-item" href="<?= Url::to(['main/logout']) ?>"><i class="dropdown-icon fe fe-log-out"></i> Chiqish</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Page title and tab bredcumbs -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title"></h1>

                        <?=Breadcrumbs::widget([
                        'homeLink' => ['label'=>'Bosh menu', 'url'=>Url::to(['main/index']) ],
                        'links' => isset(Yii::$app->params['breadcrumbs']) ? Yii::$app->params['breadcrumbs'] : [],
                        'tag' => 'ol',
                        'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                        'activeItemTemplate' => "<li class=\"breadcrumb-item active\" aria-current=\"page\">{link}</li>\n",
                        'options' => ['class'=>'breadcrumb page-breadcrumb']                              
                        ]) 
                        ?>                      

                    </div>
                    
                </div>
            </div>
        </div>
    

