<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\checkbox\CheckboxX;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fct-form">
    
    <div class="fct-form">

    <?php
    $form = ActiveForm::begin([
                    //'options' => ['class' => 'form-inline'],
//    'fieldConfig' => [
//        'template' => "{label}\n<div class=\"col-md-10\">{input}</div>\n<div class=\"col-md-offset-2 col-md-10\">{error}</div>",
//    ],
    ]);
    ?>
    <div class="well">
        <h2><div class="label label-info">ข้อมูลผู้ป่วย </div></h2>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'ptname')->label('ชื่อ-สกุล')->textInput(['readonly' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'cid')->label('เลขบัตรประชาชน')->textInput(['readonly' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'bloodgrp')->label('กรุ๊ปเลือด')->textInput(['readonly' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'address')->label('ที่อยู่')->textInput(['readonly' => true]) ?>
        </div>  
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'phone')->label('เบอร์ติดต่อ')->textInput(['readonly' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'cc')->label('CC')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'pi')->label('PI')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'disease')->label('โรคประจำตัว')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'diage')->label('การวินิจฉัย')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
   </div>     
        <div class="row">

        <div class="col-xs-3 col-sm-3 col-md-3">
                        <?=
        $form->field($model, 'admit')->label('วันที่ Admit')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
                //'disabled' => true
            ],
        ]);
        ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
                        <?=
        $form->field($model, 'dc')->label('วันที่ D/C')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
                //'disabled' => true
            ],
        ]);
        ?>
        </div>        
       </div>
    
    <hr>
  

                <div class="row">        
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?=
                        $form->field($model, 'fcttype_id')->widget(\kartik\widgets\Select2::className(), [
                            'data' => yii\helpers\ArrayHelper::map(app\modules\fct\models\Fcttype::find()->all(), 'id', 'name'),
                            'options' => [
                                'placeholder' => '<--เลือกประเภท-->'
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ]
                        ])
                        ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'pass')->label('การเข้าเยี่ยม')->radioList(['อนุญาต' => 'อนุญาต', 'ไม่อนุญาต' => 'ไม่อนุญาต']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'colour_id')->label('ความเร่งด่วน')->radioList(['1' => 'เขียว', '2' => 'เหลือง', '3' => 'แดง']) ?>
                    </div>        
                </div>    

                <div class="row">

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
                    </div>
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'pain')->label('Pain Scale')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'painnote')->label('การจัดการกับความปวด')->textInput(['maxlength' => true]) ?>
                        </div>                        
                    </div>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'drugallergy')->label('ประวัติการแพ้ยา')->textInput(['readonly' => true, 'maxlength' => true]) ?>
        </div>
    </div>      
    
    <div class="row">        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'or')->label('การผ่าตัด')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">              
            <?=
            $form->field($model, 'ordate')->label('วันที่ผ่าตัด')->widget(\yii\jui\DatePicker::classname(), [
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
<?= $form->field($model, 'receive')->label('สถานที่รับยา')->textInput(['maxlength' => true]) ?>
         </div>
    </div>
    </div>
<hr>

<div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h4><i class="glyphicon glyphicon-plus"></i> บันทึกข้อมูลการส่งเยี่ยมบ้าน</h4>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          
          <h2><div class="label label-warning"> บันทึกการส่งเยี่ยม</div></h2>
 <div class="row">   
   <div class="col-xs-6 col-sm-6 col-md-6">           
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
 </div>

<?= $form->field($model, 'tra')->label('Tracheostomy tube การดูแล')->textInput(['maxlength' => true]) ?> 
                    
   
<?= $form->field($model, 'retng')->label('Retained NG tube การดูแล')->textInput(['maxlength' => true]) ?>
                    
<?= $form->field($model, 'ptcate')->label('Retained Foleys cath การดูแล')->textInput(['maxlength' => true]) ?>
                   
<?= $form->field($model, 'colobag')->label('Colostomy bag การดูแล')->textInput(['maxlength' => true]) ?>
                    
<?= $form->field($model, 'insulin')->label('การฉีดยาอินซูลิน')->textInput(['maxlength' => true]) ?>
       
<?= $form->field($model, 'windpipe')->label('การพ่นยาขยายหลอดลม')->textInput(['maxlength' => true]) ?>
        
<?= $form->field($model, 'lesion')->label('แผลที่มี')->textInput(['maxlength' => true]) ?>
                    
<?= $form->field($model, 'lesioncare')->label('การดูแลแผล')->textInput(['maxlength' => true]) ?>
                    
<?= $form->field($model, 'recov')->label('กายภาพบำบัด (ส่วนที่เป็น)')->textInput(['maxlength' => true]) ?>
                    
<?= $form->field($model, 'recovcare')->label('การดูแลการทำกายภาพบำบัด')->textInput(['maxlength' => true]) ?>
                    
<?= $form->field($model, 'oxygen')->label('Home oxygen therapy')->textInput(['maxlength' => true]) ?>
                   
<?= $form->field($model, 'equip')->label('อุปกรณ์')->textInput(['maxlength' => true]) ?>


<div class="row">        
        <div class="col-xs-5 col-sm-5 col-md-5">
            <?= $form->field($model, 'other')->label('อื่นๆ (โปรดระบุ)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">           
            <?=
            $form->field($model, 'appdate')->label('วันที่นัด')->widget(\yii\jui\DatePicker::classname(), [
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
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'doctorapp')->label('แพทย์ผู้นัด')->textInput(['maxlength' => true]) ?>
        </div>             
    </div>
<hr>
    <div class="label label-warning"> ส่งเยี่ยม</div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">            
            <?=
            $form->field($model, 'senddate')->label('วันที่ส่งเยี่ยม')->widget(\yii\jui\DatePicker::classname(), [
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
            $form->field($model, 'depart')->label('แผนกที่ส่งเยี่ยม')->widget(\kartik\widgets\Select2::className(), [
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
    <?= $form->field($model, 'officer')->label('ผู้ส่งเยี่ยม')->textInput(['maxlength' => true]) ?>
         </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'retfo')->label('แหล่งที่มา')->textInput(['maxlength' => true]) ?>
                    </div>  
    </div> 
    </div> 
        </div> 
    </div> 
           
    
    <hr>
<!--    <div class="label label-warning"> LR</div>-->

<!--    <div class="panel panel-info">
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
                
    </div>-->
    
<!--   <div class="row">
         <div class="col-xs-3 col-sm-3 col-md-3">            
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
                </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'tmbpart')->textInput(['readonly' => true, 'maxlength' => true]) ?>
                </div>
    </div>-->
    

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



