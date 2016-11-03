<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fct-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="label label-info"> ข้อมูลผู้ป่วย</div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'ptname')->textInput() ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'cid')->textInput() ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
             <?= $form->field($model, 'bloodgrp')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'address')->textInput() ?>
        </div>  
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'phone')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'birthday')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'drugallergy')->label('ประวัติการแพ้ยา')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'bloodgrp')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           
        </div>              
    </div>
    
    <hr>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'senddate')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'fcttype_id')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
          <?= $form->field($model, 'pass')->passwordInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'colour_id')->textInput() ?>
        </div>        
    </div>
    
    
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'diage')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
              <?= $form->field($model, 'pps')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
          <?= $form->field($model, 'pain')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'painnote')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'cc')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'pi')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
         <?= $form->field($model, 'bt')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'pr')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'bp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
         <?= $form->field($model, 'admit')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
               <?= $form->field($model, 'dc')->textInput() ?>
        </div>        
    </div>
    <hr>
    <div class="label label-info"> ประวัติการผ่าตัด</div>
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'or')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
              <?= $form->field($model, 'ordate')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'disease')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
              
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'receive')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'ptcate')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'hossub')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'tra')->textInput(['maxlength' => true]) ?> 
        </div>        
    </div>
        
        <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'retng')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'retfo')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'colobag')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'lesion')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lesioncare')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'recov')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'recovcare')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'oxygen')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
   
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr01')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr02')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'lr03')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr04')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr05')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr06')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'lr07')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr08')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>

    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr09')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr10')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'lrl01')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl02')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl03')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl04')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'lrl05')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl06')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
     <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl07')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl08')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'lr')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl09')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl10')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lrl11')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'lrl12')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'lrl13')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'appdate')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'doctorapp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'appdate2')->textInput() ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'doctorapp2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'appdate3')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'doctorapp3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'windpipe')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'insulin')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'equip')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'depart')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'hosin')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'officer')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'confirm')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'confirmfct')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'tmbpart')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
   

    

    

    
   

    <?= $form->field($model, 'send')->textInput() ?>

    <?= $form->field($model, 'okcase')->textInput() ?>

   

    

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
