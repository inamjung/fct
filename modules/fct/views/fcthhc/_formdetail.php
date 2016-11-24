<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\widgets\DetailView;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcthhc-formdetail">
    
    <div class="row">
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
                                'label' => 'CID',
                                'attribute' => 'cid'
                            ],
                            [
                                'label' => 'ชื่อ-สกุล',
                                'attribute' => 'cid',
                                'value'=> $model->hhcfct->ptname,
                            ],
                            [
                                'label' => 'ที่อยู่',
                                'attribute' => 'fcttype_id',
                                'value'=> $model->hhcfct->address,
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
                                'label' => 'ประเภท',
                                'attribute' => 'fcttype_id',
                                'value'=> $model->hhcfct->type->name,
                            ],
                            [
                                'label' => 'ความเร่งด่วน',
                                'attribute' => 'fctcolour_id',
                                'value'=> $model->hhcfct->colourfct->name,
                            ],
                            [
                                'label' => 'การอนุญาต',
                                'attribute' => 'cid',
                                'value'=> $model->hhcfct->pass1->name,
                            ],
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        
    </div>
    

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
        
              <div class="col-sm-offset-2 col-sm-1">
            <?= $form->field($model, 'hhclot')->label('เยี่ยมครั้งที่')->textInput(['maxlength' => true]) ?>
        </div>
         <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'fctdate')->label('วันที่เข้าเยี่ยม')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-MM-dd',
        'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
                //'disabled' => true
            ],
    ]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'home')->label('จำนวนสมาชิกในบ้าน/คน')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'homept')->label('ผู้ดูแล')->textInput() ?>
        </div>
    </div>
    <div class="row">    
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 't')->label('อุณหภูมิร่างกาย/T')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'pr')->label('PR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'rr')->label('RR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
    

    
    <?= $form->field($model, 'status')->radioList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม', ], ['prompt' => '']) ?>    



    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
