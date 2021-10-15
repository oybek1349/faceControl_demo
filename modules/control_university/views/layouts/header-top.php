<?php

use yii\helpers\Url;


?>
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="<?= Url::to(\Yii::$app->getHomeUrl())?>"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>                    
                </div>
            </div>
            <div class="hright">
                <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
                <a href="<?= Url::to(['main/logout']) ?>" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>

