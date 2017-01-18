<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'confirmation_sent_at', 'confirmed_at', 'recovery_sent_at', 'blocked_at', 'registered_from', 'logged_in_from', 'logged_in_at', 'created_at', 'updated_at', 'last_login_at', 'department_id', 'position_id'], 'integer'],
            [['username', 'email', 'password_hash', 'auth_key', 'confirmation_token', 'unconfirmed_email', 'recovery_token', 'registration_ip', 'name', 'role', 'status', 'password_reset_token'], 'safe'],
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
        $query = Users::find();

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
            'confirmation_sent_at' => $this->confirmation_sent_at,
            'confirmed_at' => $this->confirmed_at,
            'recovery_sent_at' => $this->recovery_sent_at,
            'blocked_at' => $this->blocked_at,
            'registered_from' => $this->registered_from,
            'logged_in_from' => $this->logged_in_from,
            'logged_in_at' => $this->logged_in_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'last_login_at' => $this->last_login_at,
            'department_id' => $this->department_id,
            'position_id' => $this->position_id,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'confirmation_token', $this->confirmation_token])
            ->andFilterWhere(['like', 'unconfirmed_email', $this->unconfirmed_email])
            ->andFilterWhere(['like', 'recovery_token', $this->recovery_token])
            ->andFilterWhere(['like', 'registration_ip', $this->registration_ip])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'role', $this->role])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token]);

        return $dataProvider;
    }
}
