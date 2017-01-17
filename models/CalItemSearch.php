<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CalItem;

/**
 * CalItemSearch represents the model behind the search form about `app\models\CalItem`.
 */
class CalItemSearch extends CalItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tool_id', 'department_id', 'cal_id'], 'integer'],
            [['result', 'number_group', 'numberpas', 'remark'], 'safe'],
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
        $query = CalItem::find();

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
            'tool_id' => $this->tool_id,
            'department_id' => $this->department_id,
            'cal_id' => $this->cal_id,
        ]);

        $query->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'number_group', $this->number_group])
            ->andFilterWhere(['like', 'numberpas', $this->numberpas])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
