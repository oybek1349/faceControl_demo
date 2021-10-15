<?php
use app\modules\control_university\assets\MainControlUniversityAssets as MainAsset;
use yii\helpers\Url;

MainAsset::register($this);
?>

    <!-- Start Main leftbar navigation -->
      <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">Control university<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="" data-original-title="Grid &amp; List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">University</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">Admin</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade active show" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="<?= Url::to(['xodimlar/']) ?>"><i class="fa fa-users"></i><span>Xodimlar</span></a></li>
                        <li><a href="<?= Url::to(['main/hisobot']) ?>"><i class="fa fa-clock-o"></i><span>Ish vaqtini hisobga olish hisoboti</span></a></li>                        
                        <li><a href="<?= Url::to(['ishjadvallari/']) ?>"><i class="fa fa-calendar-o"></i><span>Ish grafigi</span></a></li>
                        <li><a href="<?= Url::to(['bolimlar/']) ?>"><i class="fa fa-sitemap"></i><span>Bo'limlar</span></a></li>
                        <li><a href="<?= Url::to(['lavozimlar/']) ?>"><i class="fa fa-black-tie"></i><span>Lavozimlar</span></a></li>
                        <li><a href="<?= Url::to(['qaydnoma/']) ?>"><i class="fa fa-bullhorn"></i><span>Qaydnoma</span></a></li>
                        <li class="g_heading">Extra</li>
                        <li><a href="events.html"><i class="fa fa-calendar"></i><span>Calender</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="menu-admin" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href=""><i class="fa fa-minus"></i><span>Foydalanuvchilar</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


