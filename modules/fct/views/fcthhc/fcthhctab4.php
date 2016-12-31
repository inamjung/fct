<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

?>

<div class="box box-warning">
        <div class="box-header"></div>
        <div class="box-body">
            <div class="label label-warning"> ประเมิน ADL</div><hr>
            <div class="row">
            <div class="col-sm-offset-2 col-sm-5">
                <?= $form->field($model, 'deg01')->label('1.Feeding (รับประทานอาหาร)')->radioList([ '0' => 'ไม่สามารถตักอาหารเข้าปากได้', '0' => 'ไม่สามารถตักอาหารเข้าปากได้','1' => 'ตักอาหารและช่วยตัวเองได้เป็นปกติ']) ?>
              	
                <?= $form->field($model, 'deg02')->label('2.Grooming (ล้างหน้าหวีผม)')->radioList([ '0' => 'ต้องการความช่วยเหลือ', '1' => 'ทำเองได้']) ?>
            	
                <?= $form->field($model, 'deg03')->label('3.Transfer (ลุกนั่งจากที่นอน)')->radioList([ '0' => 'ไม่สามารถนั่งได้', '1' => 'ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้','2' => 'ต้องการความช่วยเหลือบ้าง', '3' => 'ทำได้เอง']) ?>
            	
                <?= $form->field($model, 'deg04')->label('4.Toilet use (ใช้ห้องน้ำ)')->radioList([ '0' => 'ช่วยตัวเองไม่ได้', '1' => 'ทำเองได้บ้าง','2' => 'ช่วยเหลือตัวเองได้ดี']) ?>
            	
                <?= $form->field($model, 'deg05')->label('5.Mobility (การเคลื่อนที่)')->radioList([ '0' => 'เคลื่อนที่ไปไหนไม่ได้', '1' => 'ต้องใช้รถเข็นช่วยตัวเอง','2' => 'เดินหรือเคลื่อนที่โดยมีคนช่วย', '3' => 'เดินหรือเคลื่อนที่ได้เอง']) ?>
            </div>            
            <div class="col-xs-5 col-sm-5 col-md-5">
                <?= $form->field($model, 'deg06')->label('6.Dressing (การใส่่เสื้อผ้า)')->radioList([ '0' => 'ต้องมีคนสวมใส่ให้', '1' => 'ช่วยเหลือตัวเองได้บ้าง','2' => 'ช่วยตัวเองได้ดี']) ?>
                	
                <?= $form->field($model, 'deg07')->label('7.Stairs (การขึ้นลงบันได)')->radioList([ '0' => 'ไม่สามารถทำได้', '1' => 'ต้องการคนช่วย','2' => 'ขึ้นลงได้เอง']) ?>
                	
                <?= $form->field($model, 'deg08')->label('8.Bathing (การอาบน้ำ)')->radioList([ '0' => 'ต้องมีคนช่วยหรือทำให้', '1' => 'อาบน้ำเองได้']) ?>
                	
                <?= $form->field($model, 'deg09')->label('9.Bowels (การกลั้นอุจจาระ)')->radioList([ '0' => 'กลั้นไม่ได้', '1' => 'กลั้นไม่ได้บางครั้ง','2' => 'กลั้นได้เป็นปกติ']) ?>
                	
                <?= $form->field($model, 'deg10')->label('10.Bladder (การกลั้นปัสสาวะ)')->radioList([ '0' => 'กลั้นไม่ได้', '1' => 'กลั้นไม่ได้บางครั้ง','2' => 'กลั้นได้เป็นปกติ']) ?>
    
            </div>                
            </div>     
    </div></div>