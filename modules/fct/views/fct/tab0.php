<?php
    use yii\widgets\DetailView;
?>
<div class="well">
        <h2><div class="label label-info">ข้อมูลผู้ป่วย </div></h2>
        <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7">
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
                                        'attribute' => 'disease',
                                    ],
                                    
                                ],
                            ])
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-xs-5 col-sm-5 col-md-5">
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
                                        'label' => 'การวินิจฉัย',
                                        'attribute' => 'diage',
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
            </div>
        
   
        <div class="row" style="display: none">        

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <?=
                    $form->field($model, 'admit')->label('วันที่ Admit')->widget(\yii\jui\DatePicker::classname(), [
                        'language' => 'th',
                        'dateFormat' => 'yyyy-MM-dd',
                        'clientOptions' => [
                            'changeMonth' => true,
                            'changeYear' => true,
                        ],
                        'options' => ['class' => 'form-control',
                        //'disabled' => true
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <?=
                    $form->field($model, 'dc')->label('วันที่ D/C')->widget(\yii\jui\DatePicker::classname(), [
                        'language' => 'th',
                        'dateFormat' => 'yyyy-MM-dd',
                        'clientOptions' => [
                            'changeMonth' => true,
                            'changeYear' => true,
                        ],
                        'options' => ['class' => 'form-control',
                        //'disabled' => true
                        ],
                    ]);
                    ?>
                </div> 
            <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'cc')->label('CC')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'pi')->label('PI')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
            </div>
        </div>