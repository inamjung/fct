<?php
    use yii\widgets\DetailView;
?>
<div class="well">
        <h2><div class="label label-info">ข้อมูลผู้ป่วย </div></h2>
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
                                        'label' => 'เลขบัตรประชาชน',
                                        'attribute' => 'cid'
                                    ],
                                    [
                                        'label' => 'ชื่อ-สกุล',
                                        'attribute' => 'ptname'
                                    ],
                                    [
                                        'label' => 'ที่อยู่',
                                        'attribute' => 'address',
                                    ],
                                    [
                                        'label' => 'เบอร์ติดต่อ',
                                        'attribute' => 'phone',
                                    ],
                                    [
                                        'label' => 'อายุ',
                                        'attribute' => 'age',
                                    ],
                                    [
                                        'label' => 'น้ำหนัก',
                                        'attribute' => 'bw',
                                    ],
                                    [
                                        'label' => 'ส่วนสูง',
                                        'attribute' => 'height',
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
                                        'label' => 'สิทธิ์การรักษา',
                                        'attribute' => 'pttypess.name',
                                    ],
                                    [
                                        'label' => 'กรุ๊ปเลือด',
                                        'attribute' => 'bloodgrp',
                                    ],                                    
                                    [
                                        'label' => 'โรคประจำตัว',
                                        'attribute' => 'disease',
                                    ],
                                    
                                    [
                                        'label' => 'ประวัติการแพ้ยา',
                                        'attribute' => 'drugallergy'
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
                                        'label' => 'วันที่รับบริการ',
                                        'attribute' => 'vstdate',
                                    ],
                                    [
                                        'label' => 'CC',
                                        'attribute' => 'cc',
                                    ],
                                    [
                                        'label' => 'PI',
                                        'attribute' => 'pi',
                                    ],                                  
                                    [
                                        'label' => 'การวินิจฉัย',
                                        'attribute' => 'diage',
                                    ],
                                ],
                            ])
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        
   
        
        </div>