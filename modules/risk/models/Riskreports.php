<?php

namespace app\modules\risk\models;

use Yii;

/**
 * This is the model class for table "riskreports".
 *
 * @property integer $id
 * @property string $date
 * @property integer $clinic_id
 * @property integer $programe_id
 * @property integer $risktype_id
 * @property string $name
 * @property string $description
 * @property string $namecode
 * @property string $sufferer
 * @property string $edit
 * @property integer $user_id_report
 * @property integer $department_id
 * @property integer $department_id_risk
 * @property string $edit_begin
 * @property string $money
 * @property string $moneydetail
 * @property string $how
 * @property integer $review
 * @property string $reviewdate
 * @property string $reviewdetail
 * @property string $reviewteam
 * @property integer $approve
 * @property integer $qaapprove
 * @property string $review_in
 * @property string $review_by
 * @property string $review_dateline
 * @property string $qateam
 * @property string $username
 * @property string $covenant
 * @property string $docs
 * @property string $ref
 * @property integer $complete
 * @property string $createDate
 * @property string $updateDate
 */
class Riskreports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riskreports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'reviewdate', 'review_dateline', 'createDate', 'updateDate'], 'safe'],
            [['clinic_id', 'programe_id', 'risktype_id', 'user_id_report', 'department_id', 'department_id_risk', 'review', 'approve', 'qaapprove', 'complete'], 'integer'],
            [['name', 'description', 'edit_begin', 'reviewdetail', 'docs'], 'string'],
            [['namecode', 'user_id_report', 'department_id', 'department_id_risk', 'username'], 'required'],
            [['money'], 'number'],
            [['namecode'], 'string', 'max' => 5],
            [['sufferer', 'how', 'review_in'], 'string', 'max' => 20],
            [['edit', 'qateam'], 'string', 'max' => 6],
            [['moneydetail'], 'string', 'max' => 500],
            [['reviewteam', 'review_by', 'username', 'covenant'], 'string', 'max' => 255],
            [['ref'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'วันที่เกิด',
            'clinic_id' => 'คลินิก',
            'programe_id' => 'โปรแกรม',
            'risktype_id' => 'รายการ',
            'name' => 'เหตุการณ์',
            'description' => 'สาเหตุ',
            'namecode' => 'ระดับความรุนแรง',
            'sufferer' => 'ผู้เสียหาย',
            'edit' => 'การแก้ไขเบื้องต้น',
            'user_id_report' => 'ผู้แจ้ง',
            'department_id' => 'หน่วยงานที่แจ้ง',
            'department_id_risk' => 'พื้นที่เกิด',
            'edit_begin' => 'แก้ไขเบื้องต้น',
            'money' => 'ค่าใช้จ่าย',
            'moneydetail' => 'รายการค่าใช้จ่าย',
            'how' => 'แหล่งที่มา',
            'review' => 'การทบทวน',
            'reviewdate' => 'วันที่ทบทวน',
            'reviewdetail' => 'รายละเอียดที่ทบทวน',
            'reviewteam' => 'ผู้ร่วมทบทวน',
            'approve' => 'APPROVE',
            'qaapprove' => 'ทีมรับทราบ',
            'review_in' => 'วิธีการแก้ไข/ทบทวน',
            'review_by' => 'ข้อสั่งการเพื่อแก้ไข/ทบทวนความเสี่ยง',
            'review_dateline' => 'กำหนด ทบทวน/แก้ไขภายใน',
            'qateam' => 'ทีมคร่อม',
            'username' => 'ผู้บันทึก',
            'covenant' => 'เอกสาร',
            'docs' => 'เอกสา/รูปอ้างอิง',
            'ref' => 'หลายเลข referent สำหรับอัพโหลดไฟล์ ajax',
            'complete' => 'COMPLETE',
            'createDate' => 'วันที่บันทึก',
            'updateDate' => 'Update Date',
        ];
    }
}
