<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="box box-info">
    <div class="box-header"> </div>
    <div class="label label-primary"> 0 - 5 ปี</div>
    <hr>
    <div class="box-body"> 
             
            <div class="row">
                <div class="col-sm-offset-1 col-sm-6">
            <?= $form->field($model, 'chlid05_glow')->label('พัฒนาการ 0 - 5 ปี')->radioList([ 'ช้า' => 'ช้า', 'ล่าช้า' => 'ล่าช้า', 'สงสัยล่าช้า' => 'สงสัยล่าช้า']) ?>
        </div>
               
            </div>
        </div>
    </div>        
