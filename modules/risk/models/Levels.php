<?php

namespace app\modules\risk\models;

use Yii;

/**
 * This is the model class for table "levels".
 *
 * @property integer $id
 * @property string $name
 * @property string $namecode
 */
class Levels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'levels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 500],
            [['namecode'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ระดับความรุนแรง',
            'namecode' => 'รหัสระดับ',
        ];
    }
}
