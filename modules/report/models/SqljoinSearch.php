<?php

namespace app\modules\report\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\report\models\Sqljoin;

/**
 * SqljoinSearch represents the model behind the search form about `app\modules\report\models\Sqljoin`.
 */
class SqljoinSearch extends Sqljoin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pass', 'fcttype_id', 'colour_id', 'hosin', 'confirm', 'confirmfct', 'send', 'okcase', 'age'], 'integer'],
            [['cid', 'hn', 'an', 'ptname', 'ptage', 'diage', 'pps', 'pain', 'painnote', 'cc', 'pi', 'bt', 'pr', 'rr', 'bp', 'drugallergy', 'admit', 'dc', 'or', 'ordate', 'disease', 'receive', 'address', 'ptcate', 'phone', 'hossub', 'tra', 'retng', 'retfo', 'colobag', 'lesion', 'lesioncare', 'recov', 'recovcare', 'oxygen', 'lr01', 'lr02', 'lr03', 'lr04', 'lr05', 'lr06', 'lr07', 'lr08', 'lr09', 'lr10', 'lrl01', 'lrl02', 'lrl03', 'lrl04', 'lrl05', 'lrl06', 'lrl07', 'lrl08', 'lr', 'lrl09', 'lrl10', 'lrl11', 'lrl12', 'lrl13', 'other', 'appdate', 'doctorapp', 'appdate2', 'doctorapp2', 'appdate3', 'doctorapp3', 'senddate', 'windpipe', 'insulin', 'equip', 'depart', 'officer', 'birthday', 'tmbpart', 'sex', 'bloodgrp', 'pttype', 'moopart', 'vstdate'], 'safe'],
            [['bw', 'height'], 'number'],
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
        $query = Sqljoin::find();

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
            'pass' => $this->pass,
            'fcttype_id' => $this->fcttype_id,
            'colour_id' => $this->colour_id,
            'admit' => $this->admit,
            'dc' => $this->dc,
            'ordate' => $this->ordate,
            'appdate' => $this->appdate,
            'appdate2' => $this->appdate2,
            'appdate3' => $this->appdate3,
            'senddate' => $this->senddate,
            'hosin' => $this->hosin,
            'confirm' => $this->confirm,
            'confirmfct' => $this->confirmfct,
            'send' => $this->send,
            'okcase' => $this->okcase,
            'birthday' => $this->birthday,
            'bw' => $this->bw,
            'height' => $this->height,
            'age' => $this->age,
            'vstdate' => $this->vstdate,
        ]);

        $query->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'an', $this->an])
            ->andFilterWhere(['like', 'ptname', $this->ptname])
            ->andFilterWhere(['like', 'ptage', $this->ptage])
            ->andFilterWhere(['like', 'diage', $this->diage])
            ->andFilterWhere(['like', 'pps', $this->pps])
            ->andFilterWhere(['like', 'pain', $this->pain])
            ->andFilterWhere(['like', 'painnote', $this->painnote])
            ->andFilterWhere(['like', 'cc', $this->cc])
            ->andFilterWhere(['like', 'pi', $this->pi])
            ->andFilterWhere(['like', 'bt', $this->bt])
            ->andFilterWhere(['like', 'pr', $this->pr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'bp', $this->bp])
            ->andFilterWhere(['like', 'drugallergy', $this->drugallergy])
            ->andFilterWhere(['like', 'or', $this->or])
            ->andFilterWhere(['like', 'disease', $this->disease])
            ->andFilterWhere(['like', 'receive', $this->receive])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'ptcate', $this->ptcate])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'hossub', $this->hossub])
            ->andFilterWhere(['like', 'tra', $this->tra])
            ->andFilterWhere(['like', 'retng', $this->retng])
            ->andFilterWhere(['like', 'retfo', $this->retfo])
            ->andFilterWhere(['like', 'colobag', $this->colobag])
            ->andFilterWhere(['like', 'lesion', $this->lesion])
            ->andFilterWhere(['like', 'lesioncare', $this->lesioncare])
            ->andFilterWhere(['like', 'recov', $this->recov])
            ->andFilterWhere(['like', 'recovcare', $this->recovcare])
            ->andFilterWhere(['like', 'oxygen', $this->oxygen])
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
            ->andFilterWhere(['like', 'lrl09', $this->lrl09])
            ->andFilterWhere(['like', 'lrl10', $this->lrl10])
            ->andFilterWhere(['like', 'lrl11', $this->lrl11])
            ->andFilterWhere(['like', 'lrl12', $this->lrl12])
            ->andFilterWhere(['like', 'lrl13', $this->lrl13])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'doctorapp', $this->doctorapp])
            ->andFilterWhere(['like', 'doctorapp2', $this->doctorapp2])
            ->andFilterWhere(['like', 'doctorapp3', $this->doctorapp3])
            ->andFilterWhere(['like', 'windpipe', $this->windpipe])
            ->andFilterWhere(['like', 'insulin', $this->insulin])
            ->andFilterWhere(['like', 'equip', $this->equip])
            ->andFilterWhere(['like', 'depart', $this->depart])
            ->andFilterWhere(['like', 'officer', $this->officer])
            ->andFilterWhere(['like', 'tmbpart', $this->tmbpart])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'bloodgrp', $this->bloodgrp])
            ->andFilterWhere(['like', 'pttype', $this->pttype])
            ->andFilterWhere(['like', 'moopart', $this->moopart]);

        return $dataProvider;
    }
}
