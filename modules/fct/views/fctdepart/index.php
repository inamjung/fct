<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FctdepartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'แผนกที่ส่งเยี่ยม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fctdepart-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-primary">
        <div class="panel-heading"> แผนกที่ส่งเยี่ยม</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'striped' => false,
                'hover' => true,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    'name',
                    //'group_id',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
</div>
