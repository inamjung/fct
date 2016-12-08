<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Pttype */

$this->title = 'Create Pttype';
$this->params['breadcrumbs'][] = ['label' => 'Pttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pttype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
