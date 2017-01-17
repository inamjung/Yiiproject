<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technicians".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $speciallist
 */
class Technicians extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'technicians';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['speciallist'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'ช่าง',
            'speciallist' => 'ประเภทช่าง',
        ];
    }
}
