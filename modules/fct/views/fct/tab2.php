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
        <?php $form = ActiveForm::begin(['id' => 'tab-form']); ?>    

        <?= $form->field($model, 'pps')->label('PPS Scale(%)')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'bt')->label('BT(C)')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'pr')->label('PR(min)')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'rr')->label('RR(min)')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>



        <?php ActiveForm::end(); ?>
    </div>