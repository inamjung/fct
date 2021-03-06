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
    <?php $form = ActiveForm::begin(['id' => 'form2']); ?>  
        <?= DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                        'attributes' => [
                            [
                                'label' => 'หน่วยงานที่รับเยี่ยม',
                                'attribute' => 'fcthosin.name'
                            ],
                              ],
                    ])
                    ?>

    <?php
    echo $form->field($model, 'okcase', ['labelOptions' => ['style' => 'color:red;']])->widget(CheckboxX::classname(), [
        'pluginOptions' => ['threeState' => false]])->label('รับเยี่ยมผู้ป่วย *');
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
                                'label' => 'อายุ(ปี)',
                                'attribute' => 'age',
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
                                'label' => 'ความเร่งด่วน',
                                'attribute' => 'colourfct.name',
                            ],
                            [
                                'label' => 'โรคประจำตัว',
                                'attribute' => 'disease',
                            ],
                            [
                                'label' => 'ส่งจาก',
                                'attribute' => 'dep.name',
                            ],
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-warning">
                <div class="panel-heading"> ข้อมูลการส่งเยี่ยม</div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                        'attributes' => [
                            [
                                'label' => 'CC',
                                'attribute' => 'cc'
                            ],
                            [
                                'label' => 'PI',
                                'attribute' => 'pi',
                            ],
                            
                        ],
                    ])
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
