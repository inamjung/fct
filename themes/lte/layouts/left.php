<?php

use yii\helpers\Url;
use yii\helpers\Html;
use dektrium\user\models\User;
use yii\bootstrap\Nav;
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?php if (!Yii::$app->user->isGuest) { ?>
            <!-- Sidebar user panel -->
        <div class="user-panel">
                <div class="pull-left image">
                    <?=
                    Html::img('avatars/' . Yii::$app->user->identity->avatar, ['class' => 'img-circle', 'width' => '40px;'])
                    ?>
                </div>           
            <!--        //แสดงชื่อผู้ใช้งาน-->
            <div class="pull-left info">
                <p>
                    <?php echo Yii::$app->user->identity->name; ?>
                </p>
            </div>
        </div>
            <hr>
<?php } ?>
            
        <!--        //เมนูการตั้งค่า-->


        <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i> <span>ตั้งค่าระบบ</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/fct/fctdepart/index']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                แผนกส่งเยี่ยม</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['/fct/fcttype/index']); ?>"><i class="fa fa-circle text-blue"></i> 
                            <span>
                                ประเภทผู้ป่วย</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    
<!--เมนูใหม่-->
                </ul>
                
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-new-window"></i> <span>นำเข้าข้อมูล FCT</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['patient/indexfct']); ?>"><i class="fa fa-circle text-red"></i> 
                            <span>
                                รับผู้ป่วยเข้าระบบ FCT</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>                    

                </ul>
                
                </ul>
                <hr>
                
    <!--เมนูใหม่-->            
                
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-save"></i> <span>ส่งเยี่ยม</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/fct/fct/index']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                บันทึกการส่งเยี่ยม</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>                    

                </ul>
                
    <!--เมนูใหม่-->             
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-save"></i> <span>รับเยี่ยม</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">
                    
                    <li><a href="<?php echo Url::to(['/fct/fct/indexcase']); ?>"><i class="fa fa-circle text-red"></i> 
                            <span>
                                ผู้ป่วยที่ส่งเยี่ยม</span><small class="label pull-right bg-aqua">
                                <?php echo \app\modules\fct\models\Fct::find()->Where(['okcase'=>'0'])                                                                                    
                                                                                    ->andWhere(['send'=>'1'])                                                                                   
                                                                                    ->count(); ?>
                            </small>
                        </a>
                    </li> 

                    <li><a href="<?php echo Url::to(['/fct/fct/indexcaseok']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                บันทึกการเยี่ยม</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>                    

                </ul>
                
                
        </ul>
    </section>

</aside>
