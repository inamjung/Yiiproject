<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cal_item".
 *
 * @property integer $id
 * @property integer $tool_id
 * @property string $result
 * @property string $number_group
 * @property string $numberpas
 * @property integer $department_id
 * @property integer $cal_id
 * @property string $remark
 */
class CalItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cal_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tool_id', 'department_id', 'cal_id'], 'integer'],
            [['result', 'remark'], 'string', 'max' => 255],
            [['number_group'], 'string', 'max' => 20],
            [['numberpas'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tool_id' => 'รายการ',
            'result' => 'ผลการสอบเทียบ',
            'number_group' => 'เลขที่ประจำรายการ',
            'numberpas' => 'เลขครุภัณฑ์',
            'department_id' => 'หน่วยงาน',
            'cal_id' => 'Cal ID',
            'remark' => 'เพิ่มเติม',
        ];
    }
}
