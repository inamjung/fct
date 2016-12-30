<div class="box box-success">
        <div class="box-header"></div>
        <div class="box-body">
<div class="row">       
        
        <div class="col-xs-2 col-sm-2 col-md-2">
             <?= $form->field($model, 'fctdate',['labelOptions'=>['style'=>'color:red']])->label('วันที่เข้าเยี่ยม')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-MM-dd',
        'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
            'required' => ''
            ],
    ]) ?>
        </div>        
   
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 't')->label('อุณหภูมิร่างกาย/T')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'pr')->label('PR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'rr')->label('RR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
             <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
     </div>        
    </div>
