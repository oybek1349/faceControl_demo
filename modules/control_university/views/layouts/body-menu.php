<?php

use yii\helpers\Url;

?>
              <div class="row clearfix row-deck">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">                                
                                <a href="<?= Url::to(['xodimlar/']) ?>" class="my_sort_cut text-muted">
                                    <i class="fa fa-users"></i><span>Xodimlar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= Url::to(['main/hisobot']) ?>" class="my_sort_cut text-muted">
                                    <i class="fa fa-clock-o"></i><span>Ish vaqtini hisobga olish hisoboti</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= Url::to(['ishjadvallari/']) ?>" class="my_sort_cut text-muted">
                                    <i class="fa fa-calendar-o"></i><span>Ish grafigi</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">                                
                                <a href="<?= Url::to(['bolimlar/']) ?>" class="my_sort_cut text-muted">
                                    <i class="fa fa-sitemap"></i><span>Bo'limlar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= Url::to(['lavozimlar/']) ?>" class="my_sort_cut text-muted">
                                    <i class="fa fa-black-tie"></i><span>Lavozimlar</span>
                                </a>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= Url::to(['qaydnoma/']) ?>" class="my_sort_cut text-muted">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Qaydnoma</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

