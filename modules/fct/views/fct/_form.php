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
    $form = ActiveForm::begin(['id'=>'form1']);
    ?>
    <div class="well">
        <h2><div class="label label-info">ข้อมูลผู้ป่วย </div></h2>
        <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7">
                    <div class="panel panel-info">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <?=
                            DetailView::widget([
                                'model' => $model,
                                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                                'attributes' => [
                                    [
                                        'label' => 'เลขบัตรประชาชน',
                                        'attribute' => 'cid'
                                    ],
                                    [
                                        'label' => 'ชื่อ-สกุล',
                                        'attribute' => 'ptname'
                                    ],
                                    [
                                        'label' => 'ที่อยู่',
                                        'attribute' => 'address',
                                    ],
                                    [
                                        'label' => 'เบอร์ติดต่อ',
                                        'attribute' => 'phone',
                                    ],
                                    [
                                        'label' => 'อายุ',
                                        'attribute' => 'disease',
                                    ],
                                    
                                ],
                            ])
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-xs-5 col-sm-5 col-md-5">
                    <div class="panel panel-info">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <?=
                            DetailView::widget([
                                'model' => $model,
                                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                                'attributes' => [
                                    [
                                        'label' => 'สิทธิ์การรักษา',
                                        'attribute' => 'pttypess.name',
                                    ],
                                    [
                                        'label' => 'กรุ๊ปเลือด',
                                        'attribute' => 'bloodgrp',
                                    ],                                    
                                    [
                                        'label' => 'โรคประจำตัว',
                                        'attribute' => 'disease',
                                    ],
                                    [
                                        'label' => 'การวินิจฉัย',
                                        'attribute' => 'diage',
                                    ],
                                    [
                                        'label' => 'ประวัติการแพ้ยา',
                                        'attribute' => 'drugallergy'
                                    ],
                                ],
                            ])
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        
   
        <div class="row" style="display: none">        

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
            <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'cc')->label('CC')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'pi')->label('PI')->textInput(['readonly' => true,'maxlength' => true]) ?>
        </div>
            </div>
        </div>
        
 <ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li class="disabled"><a>Disabled</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
    </ul>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
    tab1
    <?php
    echo $this->render('tab1',[
        'model' => $model,
        'form' => $form
    ]);    
    ?>
  </div>
  <div class="tab-pane fade" id="profile">
    tab2
    <?php
    echo $this->render('tab2',[
        'model' => $model,
        'form' => $form
    ]);    
    ?>
  
  </div>
  <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
</div>
        
        
        
        
        
        
<!-- <div class="panel panel-info">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                    <h4><i class="glyphicon glyphicon-plus"></i> บันทึกข้อมูลสุขภาพก่อนส่งเยี่ยม</h4>
                </a>
            </h4>
        </div>
        <div id="collapseOne2" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                
        
            </div>   
            </div>
</div>-->
        
    
<!--  <div class="panel panel-warning">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4><i class="glyphicon glyphicon-plus"></i> บันทึกข้อมูลการที่ต้องการส่งให้เยี่ยม</h4>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                 
    </div>     
    </div> 
    </div>-->
    
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



