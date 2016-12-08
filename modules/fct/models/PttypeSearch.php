<?php

namespace app\modules\fct\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\fct\models\Pttype;

/**
 * PttypeSearch represents the model behind the search form about `app\modules\fct\models\Pttype`.
 */
class PttypeSearch extends Pttype
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pttype', 'name', 'editmask', 'isuse', 'pcode', 'requirecode', 'doctor_fee', 'fee_code', 'contract', 'paidst', 'in_region', 'uc', 'require_hcode', 'oldcode', 'fee_code2', 'debtor', 'noexpire', 'hipdata_code', 'bill_sss', 'hipdata_pttype', 'use_contract_id', 'yearly_charge', 'yearly_charge_icode1', 'yearly_charge_icode2', 'pttype_group1', 'pttype_group2', 'pttype_guid', 'allow_finance_edit', 'print_csmb_statement', 'pttype_information', 'fee_code_paidst', 'fee_code2_paidst', 'rx_pay_debit_tr', 'separate_rcpno', 'separate_debt_id', 'admit_fee_code', 'use_package', 'charge_df_perday', 'nhso_code', 'print_presc_ned', 'hos_guid', 'pttype_std_code', 'export_eclaim', 'round_money', 'emp_privilege', 'is_pttype_plan', 'finance_round_money', 'emp_financial', 'pttype_eclaim_id'], 'safe'],
            [['discount', 'price_type', 'min_age', 'max_age', 'bill_type', 'region_type', 'debt_due_day', 'rcp_bookno', 'ipd_hour_cut', 'pttype_spp_id', 'sks_benefit_plan_type_id', 'pttype_price_policy_type_id'], 'integer'],
            [['max_debt_money'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pttype::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'discount' => $this->discount,
            'price_type' => $this->price_type,
            'min_age' => $this->min_age,
            'max_age' => $this->max_age,
            'bill_type' => $this->bill_type,
            'region_type' => $this->region_type,
            'max_debt_money' => $this->max_debt_money,
            'debt_due_day' => $this->debt_due_day,
            'rcp_bookno' => $this->rcp_bookno,
            'ipd_hour_cut' => $this->ipd_hour_cut,
            'pttype_spp_id' => $this->pttype_spp_id,
            'sks_benefit_plan_type_id' => $this->sks_benefit_plan_type_id,
            'pttype_price_policy_type_id' => $this->pttype_price_policy_type_id,
        ]);

        $query->andFilterWhere(['like', 'pttype', $this->pttype])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'editmask', $this->editmask])
            ->andFilterWhere(['like', 'isuse', $this->isuse])
            ->andFilterWhere(['like', 'pcode', $this->pcode])
            ->andFilterWhere(['like', 'requirecode', $this->requirecode])
            ->andFilterWhere(['like', 'doctor_fee', $this->doctor_fee])
            ->andFilterWhere(['like', 'fee_code', $this->fee_code])
            ->andFilterWhere(['like', 'contract', $this->contract])
            ->andFilterWhere(['like', 'paidst', $this->paidst])
            ->andFilterWhere(['like', 'in_region', $this->in_region])
            ->andFilterWhere(['like', 'uc', $this->uc])
            ->andFilterWhere(['like', 'require_hcode', $this->require_hcode])
            ->andFilterWhere(['like', 'oldcode', $this->oldcode])
            ->andFilterWhere(['like', 'fee_code2', $this->fee_code2])
            ->andFilterWhere(['like', 'debtor', $this->debtor])
            ->andFilterWhere(['like', 'noexpire', $this->noexpire])
            ->andFilterWhere(['like', 'hipdata_code', $this->hipdata_code])
            ->andFilterWhere(['like', 'bill_sss', $this->bill_sss])
            ->andFilterWhere(['like', 'hipdata_pttype', $this->hipdata_pttype])
            ->andFilterWhere(['like', 'use_contract_id', $this->use_contract_id])
            ->andFilterWhere(['like', 'yearly_charge', $this->yearly_charge])
            ->andFilterWhere(['like', 'yearly_charge_icode1', $this->yearly_charge_icode1])
            ->andFilterWhere(['like', 'yearly_charge_icode2', $this->yearly_charge_icode2])
            ->andFilterWhere(['like', 'pttype_group1', $this->pttype_group1])
            ->andFilterWhere(['like', 'pttype_group2', $this->pttype_group2])
            ->andFilterWhere(['like', 'pttype_guid', $this->pttype_guid])
            ->andFilterWhere(['like', 'allow_finance_edit', $this->allow_finance_edit])
            ->andFilterWhere(['like', 'print_csmb_statement', $this->print_csmb_statement])
            ->andFilterWhere(['like', 'pttype_information', $this->pttype_information])
            ->andFilterWhere(['like', 'fee_code_paidst', $this->fee_code_paidst])
            ->andFilterWhere(['like', 'fee_code2_paidst', $this->fee_code2_paidst])
            ->andFilterWhere(['like', 'rx_pay_debit_tr', $this->rx_pay_debit_tr])
            ->andFilterWhere(['like', 'separate_rcpno', $this->separate_rcpno])
            ->andFilterWhere(['like', 'separate_debt_id', $this->separate_debt_id])
            ->andFilterWhere(['like', 'admit_fee_code', $this->admit_fee_code])
            ->andFilterWhere(['like', 'use_package', $this->use_package])
            ->andFilterWhere(['like', 'charge_df_perday', $this->charge_df_perday])
            ->andFilterWhere(['like', 'nhso_code', $this->nhso_code])
            ->andFilterWhere(['like', 'print_presc_ned', $this->print_presc_ned])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'pttype_std_code', $this->pttype_std_code])
            ->andFilterWhere(['like', 'export_eclaim', $this->export_eclaim])
            ->andFilterWhere(['like', 'round_money', $this->round_money])
            ->andFilterWhere(['like', 'emp_privilege', $this->emp_privilege])
            ->andFilterWhere(['like', 'is_pttype_plan', $this->is_pttype_plan])
            ->andFilterWhere(['like', 'finance_round_money', $this->finance_round_money])
            ->andFilterWhere(['like', 'emp_financial', $this->emp_financial])
            ->andFilterWhere(['like', 'pttype_eclaim_id', $this->pttype_eclaim_id]);

        return $dataProvider;
    }
}
