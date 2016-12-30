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
        $form = ActiveForm::begin();?>        
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading"> ระบุ ข้อมูลสำคัญผู้ป่วยที่ค้นพบ</div>
                    <div class="panel-body">
                        <?= $form->field($model, 'cid')->label('เลขที่บัตรประชาชน')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'ptname')->label('ชื่อ - สกุล')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'sex')->label('เพศ')->radioList(['1' => 'ชาย','2'=>'หญิง']) ?>
                        <?= $form->field($model, 'age')->label('อายุ')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'address')->label('ที่อยู่')->textarea(['row' => 3]) ?>
                        
                        <?= $form->field($model, 'bw')->label('น้ำหนัก')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'height')->label('ส่วนสูง')->textInput(['maxlength' => true]) ?>
                        
                        <?=
                                $form->field($model, 'pttype')->label('สิทธิ์การรักษา')->widget(\kartik\widgets\Select2::className(), [
                                    'data' => yii\helpers\ArrayHelper::map(app\modules\fct\models\Pttype::find()->all(), 'pttype', 'name'),
                                    'options' => [
                                        'placeholder' => '<-- สิทธิ์การรักษา -->',
                                        //'required' => ''
                                    ],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ]
                                ])
                                ?> 
                        <?= $form->field($model, 'phone')->label('เบอร์โทรติดต่อ')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'disease')->label('โรคประจำตัว')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'drugallergy')->label('ประวัติการแพ้ยา')->textInput(['maxlength' => true]) ?>
                        
                        
                        
                        
                    </div>
                </div>
            </div>    
            </div>  
            


<hr>

<div class="form-group">
    <div class="col-sm-offset-8 col-sm-4">
<?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i> บันทึก' : '<i class="glyphicon glyphicon-ok"></i> บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
    </div>

<?php ActiveForm::end(); ?>

</div>



