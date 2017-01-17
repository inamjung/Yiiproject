<?php

namespace app\modules\risk\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\risk\models\Riskreports;

/**
 * RiskreportsSearch represents the model behind the search form about `app\modules\risk\models\Riskreports`.
 */
class RiskreportsSearch extends Riskreports
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'clinic_id', 'programe_id', 'risktype_id', 'user_id_report', 'department_id', 'department_id_risk', 'review', 'approve', 'qaapprove', 'complete'], 'integer'],
            [['date', 'name', 'description', 'namecode', 'sufferer', 'edit', 'edit_begin', 'moneydetail', 'how', 'reviewdate', 'reviewdetail', 'reviewteam', 'review_in', 'review_by', 'review_dateline', 'qateam', 'username', 'covenant', 'docs', 'ref', 'createDate', 'updateDate'], 'safe'],
            [['money'], 'number'],
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
        $query = Riskreports::find();

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
            'date' => $this->date,
            'clinic_id' => $this->clinic_id,
            'programe_id' => $this->programe_id,
            'risktype_id' => $this->risktype_id,
            'user_id_report' => $this->user_id_report,
            'department_id' => $this->department_id,
            'department_id_risk' => $this->department_id_risk,
            'money' => $this->money,
            'review' => $this->review,
            'reviewdate' => $this->reviewdate,
            'approve' => $this->approve,
            'qaapprove' => $this->qaapprove,
            'review_dateline' => $this->review_dateline,
            'complete' => $this->complete,
            'createDate' => $this->createDate,
            'updateDate' => $this->updateDate,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'namecode', $this->namecode])
            ->andFilterWhere(['like', 'sufferer', $this->sufferer])
            ->andFilterWhere(['like', 'edit', $this->edit])
            ->andFilterWhere(['like', 'edit_begin', $this->edit_begin])
            ->andFilterWhere(['like', 'moneydetail', $this->moneydetail])
            ->andFilterWhere(['like', 'how', $this->how])
            ->andFilterWhere(['like', 'reviewdetail', $this->reviewdetail])
            ->andFilterWhere(['like', 'reviewteam', $this->reviewteam])
            ->andFilterWhere(['like', 'review_in', $this->review_in])
            ->andFilterWhere(['like', 'review_by', $this->review_by])
            ->andFilterWhere(['like', 'qateam', $this->qateam])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'covenant', $this->covenant])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'ref', $this->ref]);

        return $dataProvider;
    }
}
