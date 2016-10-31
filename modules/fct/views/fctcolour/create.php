<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fctcolour */

$this->title = 'Create Fctcolour';
$this->params['breadcrumbs'][] = ['label' => 'Fctcolours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fctcolour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
