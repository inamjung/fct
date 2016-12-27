<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhctool */

$this->title = 'แก้ไข  : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fcthhctools', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcthhctool-update">

    <div class="panel panel-primary">
        <div class="panel-heading"> แก้ไขข้อมูลอุปกรณ์</div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

        </div>
    </div>
</div>
