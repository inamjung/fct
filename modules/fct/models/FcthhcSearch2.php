<?php

namespace app\modules\fct\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\fct\models\Fcthhc;

/**
 * FcthhcSearch represents the model behind the search form about `app\modules\fct\models\Fcthhc`.
 */
class FcthhcSearch extends Fcthhc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fct_id', 'homept', 'fcttype_id', 'fctcolour_id'], 'integer'],
            [['fctdate', 'home', 't', 'pr', 'rr', 'bp', 'datenext', 'other', 'other2', 'datedc', 'notefct', 'cid', 'status', 'fcthosin_id', 'birthday', 'tmbpart', 'sex', 'bloodgrp'], 'safe'],
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
        $query = Fcthhc::find();

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
            'id' => $this->id,
            'fct_id' => $this->fct_id,
            'fctdate' => $this->fctdate,
            'homept' => $this->homept,
            'datenext' => $this->datenext,
            'datedc' => $this->datedc,
            'birthday' => $this->birthday,
            'fcttype_id' => $this->fcttype_id,
            'fctcolour_id' => $this->fctcolour_id,
        ]);

        $query->andFilterWhere(['like', 'home', $this->home])
            ->andFilterWhere(['like', 't', $this->t])
            ->andFilterWhere(['like', 'pr', $this->pr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'bp', $this->bp])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'other2', $this->other2])
            ->andFilterWhere(['like', 'notefct', $this->notefct])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'fcthosin_id', $this->fcthosin_id])
            ->andFilterWhere(['like', 'tmbpart', $this->tmbpart])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'bloodgrp', $this->bloodgrp]);

        return $dataProvider;
    }
}
