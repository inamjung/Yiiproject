<?php

namespace app\modules\risk\models;

use Yii;

/**
 * This is the model class for table "clinics".
 *
 * @property integer $id
 * @property string $name
 */
class Clinics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clinics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ความเสี่ยงด้าน',
        ];
    }
}
