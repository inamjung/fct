<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Pttype */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pttype-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pttype], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pttype], [
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
            'pttype',
            'name',
            'editmask',
            'isuse',
            'pcode',
            'requirecode',
            'doctor_fee',
            'fee_code',
            'discount',
            'contract',
            'paidst',
            'in_region',
            'uc',
            'require_hcode',
            'oldcode',
            'fee_code2',
            'price_type',
            'debtor',
            'noexpire',
            'hipdata_code',
            'min_age',
            'max_age',
            'bill_sss',
            'bill_type',
            'hipdata_pttype',
            'use_contract_id',
            'yearly_charge',
            'yearly_charge_icode1',
            'yearly_charge_icode2',
            'region_type',
            'pttype_group1',
            'pttype_group2',
            'pttype_guid',
            'max_debt_money',
            'allow_finance_edit',
            'print_csmb_statement',
            'pttype_information:ntext',
            'fee_code_paidst',
            'fee_code2_paidst',
            'debt_due_day',
            'rx_pay_debit_tr',
            'separate_rcpno',
            'rcp_bookno',
            'separate_debt_id',
            'admit_fee_code',
            'use_package',
            'charge_df_perday',
            'nhso_code',
            'ipd_hour_cut',
            'pttype_spp_id',
            'print_presc_ned',
            'hos_guid',
            'sks_benefit_plan_type_id',
            'pttype_std_code',
            'export_eclaim',
            'round_money',
            'pttype_price_policy_type_id',
            'emp_privilege',
            'is_pttype_plan',
            'finance_round_money',
            'emp_financial',
            'pttype_eclaim_id',
        ],
    ]) ?>

</div>
