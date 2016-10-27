<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fcts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fct-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fcttype_id',
            'pass',
            'colour_id',
            'hn',
            'an',
            'ptname',
            'ptage',
            'diage',
            'pps',
            'pain',
            'painnote',
            'cc',
            'pi',
            'bt',
            'pr',
            'rr',
            'bp',
            'drugallergy',
            'admit',
            'dc',
            'or',
            'ordate',
            'disease',
            'receive',
            'address',
            'ptcate',
            'phone',
            'hossub',
            'tra',
            'retng',
            'retfo',
            'colobag',
            'lesion',
            'lesioncare',
            'recov',
            'recovcare',
            'oxygen',
            'lr01',
            'lr02',
            'lr03',
            'lr04',
            'lr05',
            'lr06',
            'lr07',
            'lr08',
            'lr09',
            'lr10',
            'lrl01',
            'lrl02',
            'lrl03',
            'lrl04',
            'lrl05',
            'lrl06',
            'lrl07',
            'lrl08',
            'lr',
            'lrl09',
            'lrl10',
            'lrl11',
            'lrl12',
            'lrl13',
            'other',
            'appdate',
            'doctorapp',
            'appdate2',
            'doctorapp2',
            'appdate3',
            'doctorapp3',
            'senddate',
            'windpipe',
            'insulin',
            'equip',
            'depart',
            'hosin',
            'officer',
            'confirm',
            'confirmfct',
            'cid',
            'send',
            'okcase',
        ],
    ]) ?>

</div>
