<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\FcthhcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcthhc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fct_id') ?>

    <?= $form->field($model, 'fctdate') ?>

    <?= $form->field($model, 'home') ?>

    <?= $form->field($model, 'homept') ?>

    <?php // echo $form->field($model, 't') ?>

    <?php // echo $form->field($model, 'pr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'bp') ?>

    <?php // echo $form->field($model, 'datenext') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'other2') ?>

    <?php // echo $form->field($model, 'datedc') ?>

    <?php // echo $form->field($model, 'notefct') ?>

    <?php // echo $form->field($model, 'cid') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'fcthosin_id') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'tmbpart') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'bloodgrp') ?>

    <?php // echo $form->field($model, 'fcttype_id') ?>

    <?php // echo $form->field($model, 'fctcolour_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
