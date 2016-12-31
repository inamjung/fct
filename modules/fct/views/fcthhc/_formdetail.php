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
                                'label' => 'อายุ',
                                'attribute' => 'cid',
                                'value'=> $model->hhcfct->age,
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
                            
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4" style="display: none">
            <div class="panel panel-info">
                <div class="panel-heading"> ข้อมูลการเยี่ยม</div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],                        
                        'attributes' => [    
                             [
                                'label' => 'เยี่ยมครั้งที่',
                                'attribute' => 'hhclot',
                               
                            ],
                             [
                                'label' => 'วันที่เข้าเยี่ยม',
                                'attribute' => 'fctdate',
                               
                            ],
                            [
                                'label' => 'จำนวนสมาชิกในบ้าน/คน',
                                'attribute' => 'home',
                               
                            ],
                            [
                                'label' => 'ผู้ดูแล',
                                'attribute' => 'homept',                                
                            ],
                            [
                                'label' => 'อุณหภูมิร่างกาย/T',
                                'attribute' => 't',
                               
                            ],
                            [
                                'label' => 'PR(ครั้ง/นาที',
                                'attribute' => 'pr',                                
                            ],
                            [
                                'label' => 'RR(ครั้ง/นาที',
                                'attribute' => 'rr',
                               
                            ],
                            [
                                'label' => 'BP(mmHg)',
                                'attribute' => 'bp',                                
                            ],
                            
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        
    </div>
    

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row" style="display: none">
        
        <?= $form->field($model, 'status')->radioList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม', ], ['prompt' => '']) ?>    
    </div>
   

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : '<i class="glyphicon glyphicon-ok"></i> ส่งเยี่ยม', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
