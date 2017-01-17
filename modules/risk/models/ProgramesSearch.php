<?php

namespace app\modules\risk\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\risk\models\Programes;

/**
 * ProgramesSearch represents the model behind the search form about `app\modules\risk\models\Programes`.
 */
class ProgramesSearch extends Programes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'clinic_id'], 'integer'],
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
        $query = Programes::find();

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
            'clinic_id' => $this->clinic_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
