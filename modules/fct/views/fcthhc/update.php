<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhc */

$this->title = 'Update Fcthhc: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fcthhcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcthhc-update">

    <div class="panel panel-primary">
        <div class="panel-heading"> บันทึกข้อมูลการเยี่ยม</div>
        <div class="panel-body">
            <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>