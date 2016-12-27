<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhctool */

$this->title = 'Create Fcthhctool';
$this->params['breadcrumbs'][] = ['label' => 'Fcthhctools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthhctool-create">

   <div class="panel panel-primary">
        <div class="panel-heading"> บันทึกข้อมูลอุปกรณ์</div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

        </div>
    </div>
</div>
