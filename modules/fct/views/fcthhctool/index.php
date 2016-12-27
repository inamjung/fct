<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthhctoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fcthhctools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthhctool-index">

    <div class="panel panel-primary">
    <div class="panel-heading"> รายการอุปกรณ์</div>
    <div class="panel-body">

        <p>
            <?= Html::a('เพิ่มรายการ', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                'name',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
</div>
