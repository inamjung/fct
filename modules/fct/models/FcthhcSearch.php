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
            [['id', 'fct_id', 'home', 'fcttype_id', 'fctcolour_id','hhclot', 'fcthosin_id'], 'integer'],
            [['fctdate', 'homept', 't', 'pr', 'rr', 'bp', 'feel', 'eat', 'stool', 'urin', 'commu', 'mental', 'self', 'lesion', 'fall', 'sore', 'heart', 'hearta', 'heartnote', 'social', 'sociala', 'socialnote', 'bored', 'borednote', 'depress', 'depressnote', 'foley', 'foleynote', 'ng', 'ngnote', 'pcn', 'pcnnote', 'tra', 'tranote', 'wound', 'woundnote', 'insulin', 'insulinnote', 'windpipe', 'windpipenote', 'phy', 'phynote', 'pra', 'pranote', 'diet', 'dietnote', 'env', 'envnote', 'ser', 'sernote', 'comp', 'compnote', 'timeu', 'times', 'datenext', 'other', 'other2', 'datedc', 'notefct', 'tr01', 'tr02', 'tr03', 'deg04', 'deg15', 'deg14', 'deg13', 'deg12', 'deg11', 'deg10', 'deg09', 'deg08', 'deg07', 'deg06', 'deg05', 'deg03', 'deg02', 'deg01', 'tr15', 'tr14', 'tr13', 'tr12', 'tr11', 'tr10', 'tr09', 'tr08', 'tr07', 'tr06', 'tr05', 'tr04', 'fctname1', 'fctname2', 'fctname3', 'fctname4', 'fctname5', 'fctname6', 'departfct', 'lr01', 'lr02', 'lr03', 'lr04', 'lr05', 'lr06', 'lr07', 'lr08', 'lr09', 'lr10', 'lrl01', 'lrl02', 'lrl03', 'lrl04', 'lrl05', 'lrl06', 'lrl07', 'lrl08', 'lr', 'lrl10', 'lrl11', 'lrl09', 'cid', 'status', 'birthday', 'tmbpart', 'sex', 'bloodgrp','chlid05_glow','child614_food','dc','tool','cc','pi','moopart','smoke','alcohol','fcthos'], 'safe'],
            [['chlid614_bw','chlid614_hg'],'number']
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
            'hhclot'=> $this->hhclot,
            'chlid614_bw'=>$this->chlid614_bw,
            'chlid614_hg'=>$this->chlid614_hg,
            'fcthosin_id' => $this->fcthosin_id,
        ]);

        $query->andFilterWhere(['like', 'home', $this->home])
            ->andFilterWhere(['like', 't', $this->t])
            ->andFilterWhere(['like', 'pr', $this->pr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'bp', $this->bp])
            ->andFilterWhere(['like', 'feel', $this->feel])
            ->andFilterWhere(['like', 'eat', $this->eat])
            ->andFilterWhere(['like', 'stool', $this->stool])
            ->andFilterWhere(['like', 'urin', $this->urin])
            ->andFilterWhere(['like', 'commu', $this->commu])
            ->andFilterWhere(['like', 'mental', $this->mental])
            ->andFilterWhere(['like', 'self', $this->self])
            ->andFilterWhere(['like', 'lesion', $this->lesion])
            ->andFilterWhere(['like', 'fall', $this->fall])
            ->andFilterWhere(['like', 'sore', $this->sore])
            ->andFilterWhere(['like', 'heart', $this->heart])
            ->andFilterWhere(['like', 'hearta', $this->hearta])
            ->andFilterWhere(['like', 'heartnote', $this->heartnote])
            ->andFilterWhere(['like', 'social', $this->social])
            ->andFilterWhere(['like', 'sociala', $this->sociala])
            ->andFilterWhere(['like', 'socialnote', $this->socialnote])
            ->andFilterWhere(['like', 'bored', $this->bored])
            ->andFilterWhere(['like', 'borednote', $this->borednote])
            ->andFilterWhere(['like', 'depress', $this->depress])
            ->andFilterWhere(['like', 'depressnote', $this->depressnote])
            ->andFilterWhere(['like', 'foley', $this->foley])
            ->andFilterWhere(['like', 'foleynote', $this->foleynote])
            ->andFilterWhere(['like', 'ng', $this->ng])
            ->andFilterWhere(['like', 'ngnote', $this->ngnote])
            ->andFilterWhere(['like', 'pcn', $this->pcn])
            ->andFilterWhere(['like', 'pcnnote', $this->pcnnote])
            ->andFilterWhere(['like', 'tra', $this->tra])
            ->andFilterWhere(['like', 'tranote', $this->tranote])
            ->andFilterWhere(['like', 'wound', $this->wound])
            ->andFilterWhere(['like', 'woundnote', $this->woundnote])
            ->andFilterWhere(['like', 'insulin', $this->insulin])
            ->andFilterWhere(['like', 'insulinnote', $this->insulinnote])
            ->andFilterWhere(['like', 'windpipe', $this->windpipe])
            ->andFilterWhere(['like', 'windpipenote', $this->windpipenote])
            ->andFilterWhere(['like', 'phy', $this->phy])
            ->andFilterWhere(['like', 'phynote', $this->phynote])
            ->andFilterWhere(['like', 'pra', $this->pra])
            ->andFilterWhere(['like', 'pranote', $this->pranote])
            ->andFilterWhere(['like', 'diet', $this->diet])
            ->andFilterWhere(['like', 'dietnote', $this->dietnote])
            ->andFilterWhere(['like', 'env', $this->env])
            ->andFilterWhere(['like', 'envnote', $this->envnote])
            ->andFilterWhere(['like', 'ser', $this->ser])
            ->andFilterWhere(['like', 'sernote', $this->sernote])
            ->andFilterWhere(['like', 'comp', $this->comp])
            ->andFilterWhere(['like', 'compnote', $this->compnote])
            ->andFilterWhere(['like', 'timeu', $this->timeu])
            ->andFilterWhere(['like', 'times', $this->times])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'other2', $this->other2])
            ->andFilterWhere(['like', 'notefct', $this->notefct])
            ->andFilterWhere(['like', 'tr01', $this->tr01])
            ->andFilterWhere(['like', 'tr02', $this->tr02])
            ->andFilterWhere(['like', 'tr03', $this->tr03])
            ->andFilterWhere(['like', 'deg04', $this->deg04])
            ->andFilterWhere(['like', 'deg15', $this->deg15])
            ->andFilterWhere(['like', 'deg14', $this->deg14])
            ->andFilterWhere(['like', 'deg13', $this->deg13])
            ->andFilterWhere(['like', 'deg12', $this->deg12])
            ->andFilterWhere(['like', 'deg11', $this->deg11])
            ->andFilterWhere(['like', 'deg10', $this->deg10])
            ->andFilterWhere(['like', 'deg09', $this->deg09])
            ->andFilterWhere(['like', 'deg08', $this->deg08])
            ->andFilterWhere(['like', 'deg07', $this->deg07])
            ->andFilterWhere(['like', 'deg06', $this->deg06])
            ->andFilterWhere(['like', 'deg05', $this->deg05])
            ->andFilterWhere(['like', 'deg03', $this->deg03])
            ->andFilterWhere(['like', 'deg02', $this->deg02])
            ->andFilterWhere(['like', 'deg01', $this->deg01])
            ->andFilterWhere(['like', 'tr15', $this->tr15])
            ->andFilterWhere(['like', 'tr14', $this->tr14])
            ->andFilterWhere(['like', 'tr13', $this->tr13])
            ->andFilterWhere(['like', 'tr12', $this->tr12])
            ->andFilterWhere(['like', 'tr11', $this->tr11])
            ->andFilterWhere(['like', 'tr10', $this->tr10])
            ->andFilterWhere(['like', 'tr09', $this->tr09])
            ->andFilterWhere(['like', 'tr08', $this->tr08])
            ->andFilterWhere(['like', 'tr07', $this->tr07])
            ->andFilterWhere(['like', 'tr06', $this->tr06])
            ->andFilterWhere(['like', 'tr05', $this->tr05])
            ->andFilterWhere(['like', 'tr04', $this->tr04])
            ->andFilterWhere(['like', 'fctname1', $this->fctname1])
            ->andFilterWhere(['like', 'fctname2', $this->fctname2])
            ->andFilterWhere(['like', 'fctname3', $this->fctname3])
            ->andFilterWhere(['like', 'fctname4', $this->fctname4])
            ->andFilterWhere(['like', 'fctname5', $this->fctname5])
            ->andFilterWhere(['like', 'fctname6', $this->fctname6])
            ->andFilterWhere(['like', 'departfct', $this->departfct])
            ->andFilterWhere(['like', 'lr01', $this->lr01])
            ->andFilterWhere(['like', 'lr02', $this->lr02])
            ->andFilterWhere(['like', 'lr03', $this->lr03])
            ->andFilterWhere(['like', 'lr04', $this->lr04])
            ->andFilterWhere(['like', 'lr05', $this->lr05])
            ->andFilterWhere(['like', 'lr06', $this->lr06])
            ->andFilterWhere(['like', 'lr07', $this->lr07])
            ->andFilterWhere(['like', 'lr08', $this->lr08])
            ->andFilterWhere(['like', 'lr09', $this->lr09])
            ->andFilterWhere(['like', 'lr10', $this->lr10])
            ->andFilterWhere(['like', 'lrl01', $this->lrl01])
            ->andFilterWhere(['like', 'lrl02', $this->lrl02])
            ->andFilterWhere(['like', 'lrl03', $this->lrl03])
            ->andFilterWhere(['like', 'lrl04', $this->lrl04])
            ->andFilterWhere(['like', 'lrl05', $this->lrl05])
            ->andFilterWhere(['like', 'lrl06', $this->lrl06])
            ->andFilterWhere(['like', 'lrl07', $this->lrl07])
            ->andFilterWhere(['like', 'lrl08', $this->lrl08])
            ->andFilterWhere(['like', 'lr', $this->lr])
            ->andFilterWhere(['like', 'lrl10', $this->lrl10])
            ->andFilterWhere(['like', 'lrl11', $this->lrl11])
            ->andFilterWhere(['like', 'lrl09', $this->lrl09])
            ->andFilterWhere(['like', 'cid', $this->cid])                
            ->andFilterWhere(['like', 'status', $this->status])            
            ->andFilterWhere(['like', 'tmbpart', $this->tmbpart])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'bloodgrp', $this->bloodgrp])
                
            ->andFilterWhere(['like', 'dc', $this->dc])    
            ->andFilterWhere(['like', 'cc', $this->cc])
            ->andFilterWhere(['like', 'pi', $this->pi])
            ->andFilterWhere(['like', 'tool', $this->tool])
                ->andFilterWhere(['like', 'smoke', $this->smoke])
                ->andFilterWhere(['like', 'alcohol', $this->alcohol])
                ->andFilterWhere(['like', 'fcthos', $this->fcthos])
            ->andFilterWhere(['like', 'moopart', $this->moopart])
            ->andFilterWhere(['like', 'chlid05_glow', $this->chlid05_glow])
            ->andFilterWhere(['like', 'child614_food', $this->child614_food])    
                
                ;

        return $dataProvider;
    }
}
