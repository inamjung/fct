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

            
        <!--        //เมนูการตั้งค่า-->
<?php  if(Yii::$app->user->identity->role == dektrium\user\models\User::ROLE_ADMIN) {?>

        <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i> <span>ตั้งค่าระบบ ( แม่ข่าย )</span>
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
                    <li><a href="<?php echo Url::to(['/fct/fcthhctool/index']); ?>"><i class="fa fa-circle text-blue"></i> 
                            <span>
                                อุปกรณ์</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['/fct/fcthosin/index']); ?>"><i class="fa fa-circle text-blue"></i> 
                            <span>
                                หน่วยงาน/ทีมเยี่ยม</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    

                </ul>
     <?php }?>   
<!--เมนูใหม่-->
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-new-window"></i> <span>นำเข้าข้อมูล COC ( แม่ข่าย )</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/fct/patient/indexfct']); ?>"><i class="fa fa-circle text-red"></i> 
                            <span>
                                รับผู้ป่วยเข้าระบบ COC</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>  
                    <li><a href="<?php echo Url::to(['/fct/fct/create']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                เพิ่มรายชื่อผู้ป่วย</span><small class="label pull-right bg-aqua"></small>
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
                    <i class="glyphicon glyphicon-save"></i> <span>ส่งเยี่ยม ( แม่ข่าย )</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/fct/fct/index']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                บันทึกส่งเยี่ยม</span><small class="label pull-right bg-orange-active">
                                
                                     <?php echo \app\modules\fct\models\Fct::find()->Where(['send'=>'0'])                                                                                    
                                                                                    //->andWhere(['send'=>'1'])                                                                                    
                                                                                    ->count(); ?>
                            </small>
                        </a>
                    </li> 
                    <li><a href="<?php echo Url::to(['/fct/fct/indexall']); ?>"><i class="fa fa-circle text-green"></i> 
                            <span>
                                ผลการเยี่ยม</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li> 
                </ul>
                
    <!--เมนูใหม่-->             
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-save"></i> <span>รับเยี่ยม ( รพ.สต )</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">
                    
                    <li><a href="<?php echo Url::to(['/fct/fct/indexcase']); ?>"><i class="fa fa-circle text-blue"></i> 
                            <span>
                                รับผู้ป่วยที่ส่งเยี่ยม</span><small class="label pull-right bg-aqua">
                                    
                                <?php echo \app\modules\fct\models\Fct::find()->Where(['hosin' => Yii::$app->user->identity->fcthosin_id])
                                                                                    ->andWhere(['okcase'=>'0'])                                                                                    
                                                                                    ->andWhere(['send'=>'1'])                                                                                   
                                                                                    ->count(); ?>
                            </small>
                        </a>
                    </li> 

                    <li><a href="<?php echo Url::to(['/fct/fcthhc/indexfct']); ?>"><i class="fa fa-circle text-red"></i> 
                            <span>
                                บันทึกผลเยี่ยม</span><small class="label pull-right bg-red-gradient">
                                
                                    <?php echo \app\modules\fct\models\Fcthhc::find()->Where(['fcthosin_id'=> Yii::$app->user->identity->fcthosin_id])
                                                                                        ->andWhere(['status'=>'ยังไม่เยี่ยม'])                                                                                    
                                                                                    //->andWhere(['send'=>'1'])                                                                                    
                                                                                    ->count(); ?>
                            </small>
                        </a>
                    </li> 
                    <li><a href="<?php echo Url::to(['/fct/fcthhc/indexfctok']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                ค้นหา / ส่งเยี่ยมซ้ำ</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>

                </ul>
                
                
        </ul>
    <?php } ?>
    </section>

</aside>
