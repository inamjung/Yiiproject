<?php

namespace app\modules\risk\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\risk\models\Risktypes;

/**
 * RisktypesSearch represents the model behind the search form about `app\modules\risk\models\Risktypes`.
 */
class RisktypesSearch extends Risktypes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'programe_id'], 'integer'],
            [['name'], 'safe'],
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
        $query = Risktypes::find();

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
            'programe_id' => $this->programe_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
