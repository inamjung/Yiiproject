<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Repairs;

/**
 * RepairsSearch represents the model behind the search form about `app\models\Repairs`.
 */
class RepairsSearch extends Repairs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'department_id', 'tool_id', 'user_id', 'engineer_id'], 'integer'],
            [['datenotuse', 'problem', 'stage', 'startdate', 'satatus', 'dateplan', 'remark', 'answer', 'enddate', 'createDate', 'updateDate', 'approve'], 'safe'],
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
        $query = Repairs::find();

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
            'department_id' => $this->department_id,
            'datenotuse' => $this->datenotuse,
            'tool_id' => $this->tool_id,
            'startdate' => $this->startdate,
            'dateplan' => $this->dateplan,
            'enddate' => $this->enddate,
            'user_id' => $this->user_id,
            'createDate' => $this->createDate,
            'updateDate' => $this->updateDate,
            'engineer_id' => $this->engineer_id,
        ]);

        $query->andFilterWhere(['like', 'problem', $this->problem])
            ->andFilterWhere(['like', 'stage', $this->stage])
            ->andFilterWhere(['like', 'satatus', $this->satatus])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'approve', $this->approve]);

        return $dataProvider;
    }
}
