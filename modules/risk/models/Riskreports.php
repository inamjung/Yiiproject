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
    
    public function getArray($value)
    {
        return explode(',', $value);
    }

    public function setToArray($value)
    {   
        return is_array($value)?implode(',', $value):NULL;
    }
     public static function itemAlias($type,$code=NULL) {
        $_items = array(
            'edit' => array(
                'ได้' => 'ได้',
                'ไม่ได้' => 'ไม่ได้',
            ),           
            'review_in' => [                
                'CQI' => 'CQI',
                'RCA' => 'RCA',
                'ทบทวนในหน่วยงาน' => 'ทบทวนในหน่วยงาน',
                'อื่นๆ' => 'อื่นๆ'
            ],
           'qateam' => [
                'ไม่' => 'ไม่',
                'PCT' => 'PCT',
                'IC' => 'IC',
                'ENV' => 'ENV',
                'EM' => 'EM',
                'PTC' => 'PTC',
                'IM/IT' => 'IM/IT',
                'HLT' => 'HLT',
                'องกรค์พยาบาล' => 'องกรค์พยาบาล',
               'องกรค์แพทย์' => 'องกรค์แพทย์'
            ],
            'how' => [
                'โปรแกรม' => 'โปรแกรม',
                'สมุดบันทึก' => 'สมุดบันทึก',
                'บอกเล่า/ส่งเคส' => 'บอกเล่า/ส่งเคส',
                'ตู้รับความเสี่ยง' => 'ตู้รับความเสี่ยง',
                'พบเห็นด้วยตนเอง' => 'พบเห็นด้วยตนเอง',
                'อื่นๆ' => 'อื่นๆ'
            ],
            'sufferer' => [
                'ผู้ป่วย' => 'ผู้ป่วย',
                'ญาติ' => 'ญาติ',
                'เจ้าหน้าที่' => 'เจ้าหน้าที่',
                'โรงพยาบาล' => 'โรงพยาบาล',
                'ชุมชน' => 'ชุมชน',
                'อื่นๆ' => 'อื่นๆ'
            ],            
            'namecode' => [
                '01' => '01-อุบัติการณ์ที่ยังไม่เกิด/เกิดขึ้นแต่ยังไม่ถึงตัวผู้ป่วย อาจก่อให้เกิดผลกระทบต่อองค์กร(1-3,000บาท)',
                '02' => '02-อุบัติการณ์รุนแรงน้อยถึงปานกลาง เกิดขึ้นแล้วมีผลต่อผู้ป่วยและองค์กร แก้ไขได้เอง ( 3,001-6,000 บาท )',
                '03' => '03-อุบัติการณ์รุนแรงมาก มีผลกระทบต่อผู้ป่วย/องค์กร ทำให้ต้องเฝ้าระวัง/ให้การรักษาเพิ่มเติม/ ทำให้เสียชื่อเสียง ( 6,001 - 9,000 บาท)',
                '04' => '04-อุบัติการณ์ที่ก่อให้เกิดความเสียหายต่อทรัพย์สินหรือชื่อเสียงองค์กรอย่างรุนแรง แก้ไขไม่ได้/ถูกฟ้องร้อง ( > 10,000 บาท )', 
                'A' => 'A-เหตุการณ์หรือความคลาดเคลื่อนที่ยังไม่เกิดขึ้น แต่มีโอกาศก่อให้เกิดผลกระทบต่อองค์กร (เกือบพลาด)',
                'B' => 'B-มีอุบัติการณ์เกิดขี้น ยังไม่ถึงตัวบุคคล ไม่เสียหายต่อผู้ป่วย เจ้าหน้าที่ ทรัพย์สิน ชื่อเสียง',
                'C' => 'C-มีอุบัติการณ์เกิดขี้น ถึงตัวบุคคล ไม่เสียหายต่อผู้ป่วย เจ้าหน้าที่ ทรัพย์สิน ชื่อเสียง',
                'D' => 'D-มีอุบัติการณ์เกิดขี้น ถึงตัวบุคคล ไม่เสียหายต่อผู้ป่วย แต่ต้องติดตามเฝ้าระวัง/ดูแลอาการต่อเนื่อง',                
                'E' => 'E-มีอุบัติการณ์เกิดขี้น เสียหายต่อผู้ป่วยชั่วคราว ต้องดูแลรักษาเพิ่มเติม',
                'F' => 'F-มีอุบัติการณ์เกิดขี้น เสียหายต่อผู้ป่วย ต้องนอนโรงพยาบาลนานขึ้น / Refer',
                'G' => 'G-มีอุบัติการณ์เกิดขี้น เสียหายต่อผู้ป่วยเกิดความพิการ อันตรายถาวร',
                'H' => 'H-มีอุบัติการณ์เกิดขี้น ผู้ป่วยเกือบเสียชีวิต ต้องช่วย CPR',
                'I' => 'I-มีอุบัติการณ์เกิดขี้น ผู้ป่วยเสียชีวิต'
            ],
        );
        

        if (isset($code)){
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        }
        else{         
            return isset($_items[$type]) ? $_items[$type] : false;    
        }
    }
}
