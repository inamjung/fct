<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcthhc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fct_id')->textInput() ?>

    <?= $form->field($model, 'fctdate')->textInput() ?>

    <?= $form->field($model, 'home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'homept')->textInput() ?>

    <?= $form->field($model, 't')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datenext')->textInput() ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datedc')->textInput() ?>

    <?= $form->field($model, 'notefct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fcthosin_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'tmbpart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bloodgrp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fcttype_id')->textInput() ?>

    <?= $form->field($model, 'fctcolour_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
