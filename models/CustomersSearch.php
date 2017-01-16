<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customers;

/**
 * CustomersSearch represents the model behind the search form about `app\models\Customers`.
 */
class CustomersSearch extends Customers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 't', 'a', 'c', 'department_id', 'group_id'], 'integer'],
            [['name', 'addr', 'birthday', 'cid', 'p', 'tel', 'work', 'position_id', 'interest', 'avatar', 'fb', 'line', 'email', 'createdate', 'updatedate'], 'safe'],
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
        $query = Customers::find();

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
            't' => $this->t,
            'a' => $this->a,
            'c' => $this->c,
            'birthday' => $this->birthday,
            'department_id' => $this->department_id,
            'group_id' => $this->group_id,
            'createdate' => $this->createdate,
            'updatedate' => $this->updatedate,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'p', $this->p])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'work', $this->work])
            ->andFilterWhere(['like', 'position_id', $this->position_id])
            ->andFilterWhere(['like', 'interest', $this->interest])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'fb', $this->fb])
            ->andFilterWhere(['like', 'line', $this->line])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
