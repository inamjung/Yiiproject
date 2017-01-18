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
    public $avatar_img;
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
            [['birthday', 'createdate', 'updatedate','interest'], 'safe'],
            [['name'], 'string', 'max' => 150],
            [['addr', 'fb', 'line', 'email'], 'string', 'max' => 100],
            [['cid'], 'string', 'max' => 17],
            [['p', 'tel', 'work', 'position_id', 'avatar'], 'string', 'max' => 255],
            [['avatar_img'],'file','skipOnEmpty'=>true,'on'=>'update','extensions'=>'jpg,png']
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
            'work' => 'งานที่ทำ',
            'department_id' => 'แผนก',
            'group_id' => 'กลุ่มงาน',
            'position_id' => 'ตำแหน่ง',
            'interest' => 'ความสนใจ',
            'avatar' => 'รูปประจำตัว',
            'fb' => 'Facebook',
            'line' => 'Line',
            'email' => 'Email',
            'createdate' => 'Createdate',
            'updatedate' => 'วันที่แก้ไข',
            'avatar_img'=>'รูปภาพ'
        ];
    }
    public function getCuschw(){
        return $this->hasOne(Chw::className(), ['id'=>'c']);
    }
    public function getCusamp(){
        return $this->hasOne(Amp::className(), ['id'=>'a']);
    }
    public function getCustmb(){
        return $this->hasOne(Tmb::className(), ['id'=>'t']);
    }
    public function getPos(){
        return $this->hasOne(Positions::className(), ['id'=>'position_id']);
    }
    public function getCusdep(){
        return $this->hasOne(Departments::className(), ['id'=>'department_id']);
    }
    
    public function getArray($value) {
        return explode(',', $value);
    }

    public function setToArray($value) {
        return is_array($value) ? implode(',', $value) : NULL;
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if (!empty($this->name)) {
                $this->interest = $this->setToArray($this->interest);
                
            }
            return true;
        } else {
            return false;
        }
                
    }
    public static function itemAlias($type, $code = NULL) {
        $_items = array(
            
            'interest' => [
                'php' => 'PHP',
                'yii' => 'YII',
                'c++' => 'C++',
                'c#' => 'C#',
                'java' => 'JAVA',                              
            ],             
        );
        if (isset($code)) {
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        } else {
            return isset($_items[$type]) ? $_items[$type] : false;
        }
    }
}
