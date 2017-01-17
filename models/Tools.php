<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tools".
 *
 * @property integer $id
 * @property string $name
 * @property integer $company_id
 * @property integer $tooltype_id
 * @property integer $department_id
 * @property string $price
 * @property string $buy_date
 * @property string $picture
 * @property string $exp_date
 * @property integer $use
 */
class Tools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $tool_img;
    public static function tableName()
    {
        return 'tools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'tooltype_id', 'department_id', 'use'], 'integer'],
            [['price'], 'number'],
            [['buy_date', 'exp_date'], 'safe'],
            [['name', 'picture'], 'string', 'max' => 255],
            [['tool_img'],'file','skipOnEmpty'=>true,'on'=>'update','extensions'=>'jpg,png']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'รายการอุปกรณ์',
            'company_id' => 'บริษัท',
            'tooltype_id' => 'ประเภทอุปกรณ์',
            'department_id' => 'แผนก',
            'price' => 'ราคา',
            'buy_date' => 'วันที่ซื้อ',
            'picture' => 'รูปภาพ',
            'exp_date' => 'วันที่แทงจำหน่าย',
            'use' => 'ใช้/ไม่ใช้',
        ];
    }
    public function getTooltype(){
        return $this->hasOne(Tooltypes::className(), ['id'=>'tooltype_id']);
    }
    public function getCompany(){
        return $this->hasOne(Companys::className(), ['id'=>'company_id']);
    }
    public function getTooldep(){
        return $this->hasOne(Departments::className(), ['id'=>'department_id']);
    }
}
