<?php

namespace app\modules\risk\models;

use Yii;

/**
 * This is the model class for table "risktypes".
 *
 * @property integer $id
 * @property string $name
 * @property integer $programe_id
 */
class Risktypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'risktypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'programe_id'], 'required'],
            [['programe_id'], 'integer'],
            [['name'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'รายการความเสี่ยง',
            'programe_id' => 'โปรแกรม',
        ];
    }
}
