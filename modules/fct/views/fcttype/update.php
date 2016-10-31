<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcttype */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fcttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcttype-update">

    <div class="panel panel-primary">
        <div class="panel-heading"> ประเภทผู้ป่วย</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>
