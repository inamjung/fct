<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcttype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcttype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('ประเภทผู้ป่วย')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
