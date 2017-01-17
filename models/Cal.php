<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cal".
 *
 * @property integer $id
 * @property string $cal_no
 * @property string $date
 * @property string $description
 * @property string $next
 */
class Cal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['cal_no'], 'string', 'max' => 10],
            [['description', 'next'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cal_no' => 'เลขที่สอบเทียบ',
            'date' => 'วันที่สอบเทียบ',
            'description' => 'หมายเหตุเพิ่มเติม',
            'next' => 'สอบเทียบครั้งถัดไป',
        ];
    }
}
