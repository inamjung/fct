<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthosin */

$this->title = 'Update Fcthosin: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fcthosins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcthosin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
