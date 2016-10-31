<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hn')->label('HN')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->label('วันเกิด')->textInput(['readonly'=>true]) ?>
   
    <?= $form->field($model, 'clinic')->label('โรคประจำตัว')->textInput(['readonly'=>true,'maxlength' => true]) ?>   

    <?= $form->field($model, 'drugallergy')->label('ประวัติการแพ้ยา')->textInput(['readonly'=>true,'maxlength' => true]) ?>
    
    <?= $form->field($model, 'bloodgrp')->label('กรุ๊ปเลือด')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'hometel')->label('เบอร์ติดต่อ')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <?= $form->field($model, 'informaddr')->label('ที่อยู่')->textInput(['readonly'=>true,'maxlength' => true]) ?> 

    <?= $form->field($model, 'cid')->label('เลขบัตรประชาชน')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : '<i class="glyphicon glyphicon-ok"></i> นำเข้าFCT',
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
