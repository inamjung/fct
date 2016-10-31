<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'hn')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput(['readonly'=>true]) ?>
   
    <?= $form->field($model, 'clinic')->textInput(['readonly'=>true,'maxlength' => true]) ?>   

    <?= $form->field($model, 'drugallergy')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <?= $form->field($model, 'hometel')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <?= $form->field($model, 'informaddr')->textInput(['readonly'=>true,'maxlength' => true]) ?> 

    <?= $form->field($model, 'cid')->textInput(['readonly'=>true,'maxlength' => true]) ?>

  


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : '<i class="glyphicon glyphicon-ok"></i> ส่งเข้าระบบ FCT', 
    ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
