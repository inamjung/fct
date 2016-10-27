<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fctdepart */

$this->title = 'Create Fctdepart';
$this->params['breadcrumbs'][] = ['label' => 'Fctdeparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fctdepart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
