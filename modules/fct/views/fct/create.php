<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */

$this->title = 'Create Fct';
$this->params['breadcrumbs'][] = ['label' => 'Fcts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fct-create">

    <div class="panel panel-primary">
        <div class="panel-heading"> บันทึกข้อมูลการส่งเยี่ยม</div>
        <div class="panel-body">
            <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
