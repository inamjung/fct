<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fct-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="label label-info"> ข้อมูลผู้ป่วย</div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'ptname')->textInput(['readonly' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'cid')->textInput(['readonly' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'bloodgrp')->textInput(['readonly' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'address')->textInput(['readonly' => true]) ?>
        </div>  
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'phone')->textInput(['readonly' => true]) ?>
        </div>
    </div>
    <div class="row">
        <!--        <div class="col-xs-3 col-sm-3 col-md-3">            
        <?=
        $form->field($model, 'birthday')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
                'disabled' => true
            ],
        ]);
        ?>
                </div>-->
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'drugallergy')->label('ประวัติการแพ้ยา')->textInput(['readonly' => true, 'maxlength' => true]) ?>
        </div>        
        <!--        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'tmbpart')->textInput(['readonly' => true, 'maxlength' => true]) ?>
                </div>              -->
    </div>
    <hr>
    <div class="label label-info"> ประวัติการผ่าตัด</div>
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'or')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">              
            <?=
            $form->field($model, 'ordate')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'disease')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">

        </div>        
    </div>
    <hr>
    <div class="label label-warning"> ส่งเยี่ยม</div>


    <div class="panel panel-warning">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4><i class="glyphicon glyphicon-plus"></i> คลิกบันทึกข้อมูลเกี่ยวกับโรค</h4>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">

                <div class="row">        
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'fcttype_id')->widget(\kartik\widgets\Select2::className(),[
                            'data'=> yii\helpers\ArrayHelper::map(app\modules\fct\models\Fcttype::find()->all(),'id' , 'name'),
                            'options'=>[
                                'placeholder'=>'<--เลือกประเภท-->'
                            ],
                            'pluginOptions'=>[
                                'allowClear'=>true
                            ]
                        ]) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'pass')->radioList(['1'=>'อนุญาต','2'=>'ไม่อนุญาต']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'colour_id')->radioList(['1'=>'เขียว','2'=>'เหลือง','3'=>'แดง']) ?>
                    </div>        
                </div>    

                <div class="row">
<!--                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'diage')->textInput(['maxlength' => true]) ?>
                    </div>-->
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <?= $form->field($model, 'pps')->label('PPS Scale')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <?= $form->field($model, 'bt')->label('BT(C)')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <?= $form->field($model, 'pr')->label('PR(min)')->textInput(['maxlength' => true]) ?>
                    </div> 
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <?= $form->field($model, 'rr')->label('RR(min)')->textInput(['maxlength' => true]) ?>
                    </div>
                   <div class="col-xs-2 col-sm-2 col-md-2">
                        <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>
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
                    
                           
                </div>

                <div class="row">
                    
                    
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'admit')->textInput() ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'dc')->textInput() ?>
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
                        <?= $form->field($model, 'retng')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'tra')->textInput(['maxlength' => true]) ?> 
                    </div>        
                </div>

                <div class="row">       

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'retfo')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'colobag')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'lesion')->textInput(['maxlength' => true]) ?>
                    </div>   
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'lesioncare')->textInput(['maxlength' => true]) ?>
                    </div>  
                </div>

                <div class="row"> 
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
            </div>
        </div>
    </div>
    <hr>
    <div class="label label-warning"> LR</div>

    <div class="panel panel-info">
        <div class="panel-heading" role="tab" id="headingOne2">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                    <h4><i class="glyphicon glyphicon-plus"></i> คลิกบันทึกข้อมูล LR</h4>
                </a>
            </h4>
        </div>
        <div id="collapseOne2" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="panel-body">

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

            </div>
        </div>
    </div>




    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">           
            <?=
            $form->field($model, 'appdate')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'doctorapp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'appdate2')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>        
    </div>

    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'doctorapp2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'appdate3')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
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
    </div>
    <hr>
    <div class="label label-warning"> ส่งเยี่ยม</div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">            
            <?=
            $form->field($model, 'senddate')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'depart')->widget(\kartik\widgets\Select2::className(), [
                'data' => yii\helpers\ArrayHelper::map(\app\modules\fct\models\Fctdepart::find()->all(), 'id', 'name'),
                'options' => [
                    'placeholder' => '<-- แผนกที่ส่งเยี่ยม -->'
                ],
                'pluginOptions' => [
                    'allowClear' => true
                ]
            ])
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">           
            <?=
            $form->field($model, 'hosin')->widget(\kartik\widgets\Select2::className(), [
                'data' => yii\helpers\ArrayHelper::map(app\modules\fct\models\Pcuchild::find()->all(), 'hcode', 'name'),
                'options' => [
                    'placeholder' => '<-- รพ.สต -->'
                ],
                'pluginOptions' => [
                    'allowClear' => true
                ]
            ])
            ?>
        </div> 
        <!--         <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'officer')->textInput(['maxlength' => true]) ?>
                </div>-->
    </div>    

<?php
echo $form->field($model, 'send', ['labelOptions' => ['style' => 'color:red;']])->widget(CheckboxX::classname(), [
    'pluginOptions' => ['threeState' => false],
])->label('ยืนยันส่งผู้ป่วย');
?>



    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
