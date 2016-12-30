<?php
use yii\widgets\DetailView;
?>
<div class="box box-success">
        <div class="box-header"></div>
        <div class="box-body">
<div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                        'attributes' => [
                            [
                                'label' => 'CID',
                                'attribute' => 'cid'
                            ],
                            [
                                'label' => 'ชื่อ-สกุล',
                                'attribute' => 'cid',
                                'value'=> $model->fctmain->ptname,
                            ],
                            [
                                'label' => 'อายุ',
                                'attribute' => 'cid',
                                'value'=> $model->fctmain->age,
                            ],
                            [
                                'label' => 'น้ำหนัก',
                                'attribute' => 'cid',
                                'value'=> $model->fctmain->bw,
                            ],
                            [
                                'label' => 'ที่อยู่',
                                'attribute' => 'fcttype_id',
                                'value'=> $model->fctmain->address,
                            ],
                            
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],                        
                        'attributes' => [                            
                            [
                                'label' => 'ประเภท',
                                'attribute' => 'fcttype_id',
                                'value'=> $model->fctmain->type->name,
                            ],
                            [
                                'label' => 'ความเร่งด่วน',
                                'attribute' => 'fctcolour_id',
                                'value'=> $model->fctmain->colourfct->name,
                            ],
                            
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"> </div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],                        
                        'attributes' => [                            
                            [
                                'label' => 'จำนวนสมาชิกในบ้าน/คน',
                                'attribute' => 'home',   
                                'value'=> $model->fctdeltail->home,
                               
                            ],
                            [
                                'label' => 'ผู้ดูแล',
                                'attribute' => 'homept',   
                                'value'=> $model->fctdeltail->homept,
                            ],                            
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>