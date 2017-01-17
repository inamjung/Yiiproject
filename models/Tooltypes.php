<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tooltypes".
 *
 * @property integer $id
 * @property string $name
 * @property integer $timeuse
 */
class Tooltypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tooltypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timeuse'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ประเภท',
            'timeuse' => 'อายุงาน',
        ];
    }
}
