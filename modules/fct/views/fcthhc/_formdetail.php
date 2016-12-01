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

<div class="fcthhc-form">
    
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
    
    
    
    <?php //echo $form->field($model, 'fctname1')->label('ผู้เข้าเยี่ยม')->checkboxList([ 'ทีมFCTอำเภอ' => 'ทีมFCTอำเภอ','ทีมFCTรพ.สต' => 'ทีมFCTรพ.สต','ทีม อสม.' => 'ทีม อสม.','ทีม มอค.' => 'ทีม มอค.','หน่วยงานภายนอก' => 'หน่วยงานภายนอก']) ?>

    <?php //echo $form->field($model, 'fctname2')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname3')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname4')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname5')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname6')->textInput(['maxlength' => true]) ?>

    <div class="row" style="display: none">
        <?= $form->field($model, 'status')->radioList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม', ], ['prompt' => '']) ?>    
    </div>
    



    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : ' <i class="glyphicon glyphicon-ok"></i> ส่งเยี่ยมซ้ำ', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
