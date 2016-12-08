<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Pttype */

$this->title = 'Update Pttype: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->pttype]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pttype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
