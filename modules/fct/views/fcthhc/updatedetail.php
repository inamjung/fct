<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhc */

$this->title = 'ผู้ป่วย: ' . $model->hhcfct->ptname;
$this->params['breadcrumbs'][] = ['label' => 'Fcthhcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcthhc-update">

    <div class="panel panel-success">
        <div class="panel-heading"> บันทึกข้อมูลการเยี่ยม</div>
        <div class="panel-body">
            <?= $this->render('_formdetail', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>