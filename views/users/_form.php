<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'username')->textInput(['readonly' => true, 'maxlength' => true]) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>    
    <?=
    $form->field($model, 'fcthosin_id')->label('สังกัดหน่วยงาน')->widget(\kartik\widgets\Select2::className(), [
        'data' => yii\helpers\ArrayHelper::map(\app\modules\fct\models\Fcthosin::find()->all(), 'id', 'name'),
        'options' => [
            'placeholder' => '<-- เลือกสังกัด -->',
            'required' => ''
        ],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ])
    ?> 
    <?= $form->field($model, 'pos')->textInput() ?>
    <?= $form->field($model, 'role')->textInput(['readonly'=>true]) ?>
    <div class="row">        
        <div class="col-xs-12 col-sm-12 col-md-12  ">
            <?= $form->field($model, 'avatar_img')->label('รูปประจำตัว')->fileInput() ?>       
        </div>    
    </div>     
    <?php if ($model->avatar) { ?>
        <?= Html::img('avatars/' . $model->avatar, ['class' => 'img-responsive img-circle', 'width' => '150px;']); ?>
    <?php } ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



