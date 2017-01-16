<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property string $name
 * @property string $addr
 * @property integer $t
 * @property integer $a
 * @property integer $c
 * @property string $birthday
 * @property string $cid
 * @property string $p
 * @property string $tel
 * @property string $work
 * @property integer $department_id
 * @property integer $group_id
 * @property string $position_id
 * @property string $interest
 * @property string $avatar
 * @property string $fb
 * @property string $line
 * @property string $email
 * @property string $createdate
 * @property string $updatedate
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t', 'a', 'c', 'department_id', 'group_id'], 'integer'],
            [['birthday', 'createdate', 'updatedate'], 'safe'],
            [['name'], 'string', 'max' => 150],
            [['addr', 'fb', 'line', 'email'], 'string', 'max' => 100],
            [['cid'], 'string', 'max' => 13],
            [['p', 'tel', 'work', 'position_id', 'interest', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ - สกุล',
            'addr' => 'ที่อยู่ ',
            't' => 'ตำบล',
            'a' => 'อำเภอ',
            'c' => 'จังหวัด',
            'birthday' => 'วันเกิด',
            'cid' => 'เลขบัตร ปชช.',
            'p' => 'รหัสไปรษณย์',
            'tel' => 'โทรศัพท์',
            'work' => 'l5komujme\'ko',
            'department_id' => 'แผนก',
            'group_id' => 'กลุ่มงาน',
            'position_id' => 'ตำแหน่ง',
            'interest' => 'ความสนใจ',
            'avatar' => 'รูปถ่ายหลักฐาน',
            'fb' => 'Facebook',
            'line' => 'Line',
            'email' => 'Email',
            'createdate' => 'Createdate',
            'updatedate' => 'วันที่ชำระ',
        ];
    }
}
