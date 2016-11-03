<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\widgets\DetailView;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fct-form">
    <div class="well">
    <?php $form = ActiveForm::begin(); ?>    

    <?php
    echo $form->field($model, 'okcase', ['labelOptions' => ['style' => 'color:red;']])->widget(CheckboxX::classname(), [
        'pluginOptions' => ['threeState' => false],
    ])->label('รับเยี่ยมผู้ป่วย');
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : '<i class="glyphicon glyphicon-ok"></i> บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"> ข้อมูลผู้ป่วย</div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                        'attributes' => [
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
                                'label' => 'เลขบัตรประชาชน',
                                'attribute' => 'cid'
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

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"> ข้อมูลการส่งเยี่ยม</div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                        'attributes' => [
                            [
                                'label' => 'วันที่ส่งเยี่ยม',
                                'attribute' => 'senddate'
                            ],
                            [
                                'label' => 'การอนุญาต',
                                'attribute' => 'pass'
                            ],
                            [
                                'label' => 'ความเร่งด่วน',
                                'attribute' => 'colour_id',
                            ],
                            [
                                'label' => 'โรคประจำตัว',
                                'attribute' => 'disease',
                            ],
                            [
                                'label' => 'ส่งจาก',
                                'attribute' => 'depart',
                            ],
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>

    </div>



    

</div>
