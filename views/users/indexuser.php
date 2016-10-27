<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-indexuser">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-user"></i>
            ข้อมูลส่วนตัว
        </div>
        <div class="panel-body">
<!--            <p>
                <?= Html::a('แก้ไขรหัสผ่าน', ['user/setting/account'], ['class' => 'btn btn-danger']) ?>
            </p>-->

            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    [
                    'attribute'=>'avatar',
                    'format'=>'html',
                    'value'=>function($model){
                        return html::img('avatars/'.$model->avatar,['class'=>'thumbnail-responsive',
                            'style'=>'width: 80px;']);
                }
            ],
                    'username',
                    'name',
                    'email:email',
                    'pos',
                    'fcthosin_id',                    

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'options' => ['style' => 'width:50px;'],
                        'template' => '<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}</div>',
                        'buttons' => [
//                    'view'=>function($url,$model,$key){
//                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>',$url,['class'=>'btn btn-default']);
//                    }, 
                            'update' => function($url, $model, $key) {
                                return Html::a('<i class="glyphicon glyphicon-edit"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-warning']);
                            },
//                    
//                    'delete'=>function($url,$model,$key){
//                         return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
//                                'title' => Yii::t('yii', 'Delete'),
//                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
//                                'data-method' => 'post',
//                                'data-pjax' => '0',
//                                'class'=>'btn btn-default'
//                                ]);
//                    }
                                ]
                            ],
                        //[
                        //'class' => 'yii\grid\ActionColumn'
                        //],
                        ],
                    ]);
                    ?>
        </div>
    </div>
</div>