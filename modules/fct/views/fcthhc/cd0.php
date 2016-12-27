<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<form class="form-horizontal">
<fieldset>
<div class="box box-danger">
                    <div class="box-header"></div>
                    <div class="box-body">
    <div class="label label-danger"> 0 - 5 ปี</div><hr>
    
    <div class="row">
        <div class="col-sm-offset-1 col-sm-6">
            <?= $form->field($model, 'chlid05_glow')->label('พัฒนาการ 0 - 5 ปี')->radioList([ 'ช้า' => 'ช้า', 'ล่าช้า' => 'ล่าช้า', 'สงสัยล่าช้า' => 'สงสัยล่าช้า']) ?>
        </div>
        
    </div>            
</div>
</div> 
    </fieldset>
</form>
