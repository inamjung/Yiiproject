<?php

namespace app\modules\report\models;

use Yii;

/**
 * This is the model class for table "sqljoin".
 *
 * @property integer $id
 * @property string $cid
 * @property integer $pass
 * @property integer $fcttype_id
 * @property integer $colour_id
 * @property string $hn
 * @property string $an
 * @property string $ptname
 * @property string $ptage
 * @property string $diage
 * @property string $pps
 * @property string $pain
 * @property string $painnote
 * @property string $cc
 * @property string $pi
 * @property string $bt
 * @property string $pr
 * @property string $rr
 * @property string $bp
 * @property string $drugallergy
 * @property string $admit
 * @property string $dc
 * @property string $or
 * @property string $ordate
 * @property string $disease
 * @property string $receive
 * @property string $address
 * @property string $ptcate
 * @property string $phone
 * @property string $hossub
 * @property string $tra
 * @property string $retng
 * @property string $retfo
 * @property string $colobag
 * @property string $lesion
 * @property string $lesioncare
 * @property string $recov
 * @property string $recovcare
 * @property string $oxygen
 * @property string $lr01
 * @property string $lr02
 * @property string $lr03
 * @property string $lr04
 * @property string $lr05
 * @property string $lr06
 * @property string $lr07
 * @property string $lr08
 * @property string $lr09
 * @property string $lr10
 * @property string $lrl01
 * @property string $lrl02
 * @property string $lrl03
 * @property string $lrl04
 * @property string $lrl05
 * @property string $lrl06
 * @property string $lrl07
 * @property string $lrl08
 * @property string $lr
 * @property string $lrl09
 * @property string $lrl10
 * @property string $lrl11
 * @property string $lrl12
 * @property string $lrl13
 * @property string $other
 * @property string $appdate
 * @property string $doctorapp
 * @property string $appdate2
 * @property string $doctorapp2
 * @property string $appdate3
 * @property string $doctorapp3
 * @property string $senddate
 * @property string $windpipe
 * @property string $insulin
 * @property string $equip
 * @property string $depart
 * @property integer $hosin
 * @property string $officer
 * @property integer $confirm
 * @property integer $confirmfct
 * @property integer $send
 * @property integer $okcase
 * @property string $birthday
 * @property string $tmbpart
 * @property string $sex
 * @property string $bloodgrp
 * @property string $pttype
 * @property string $moopart
 * @property double $bw
 * @property double $height
 * @property integer $age
 * @property string $vstdate
 */
class Sqljoin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sqljoin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pass', 'fcttype_id', 'colour_id', 'hosin', 'confirm', 'confirmfct', 'send', 'okcase', 'age'], 'integer'],
            [['admit', 'dc', 'ordate', 'appdate', 'appdate2', 'appdate3', 'senddate', 'birthday', 'vstdate'], 'safe'],
            [['bw', 'height'], 'number'],
            [['cid'], 'string', 'max' => 13],
            [['hn'], 'string', 'max' => 9],
            [['an', 'lr07', 'lr08', 'lr09', 'lrl02', 'lrl03', 'lrl04', 'lrl05', 'lrl06', 'lrl10', 'lrl11', 'lrl12', 'lrl13', 'moopart'], 'string', 'max' => 10],
            [['ptname', 'disease', 'ptcate', 'doctorapp', 'doctorapp2', 'doctorapp3', 'depart', 'officer'], 'string', 'max' => 50],
            [['ptage'], 'string', 'max' => 3],
            [['diage', 'painnote', 'drugallergy', 'or', 'hossub', 'tra', 'retng', 'retfo', 'colobag', 'lesion', 'lesioncare', 'recov', 'recovcare', 'oxygen', 'lr01', 'lr03', 'lr05', 'lrl07', 'lrl08', 'lr', 'lrl09', 'other', 'windpipe', 'insulin', 'equip'], 'string', 'max' => 100],
            [['pps', 'pain', 'bt', 'pr', 'rr'], 'string', 'max' => 5],
            [['cc', 'address', 'lr02', 'lr04', 'lr06', 'lr10', 'lrl01'], 'string', 'max' => 200],
            [['pi', 'receive'], 'string', 'max' => 250],
            [['bp'], 'string', 'max' => 7],
            [['phone'], 'string', 'max' => 15],
            [['tmbpart', 'pttype'], 'string', 'max' => 2],
            [['sex'], 'string', 'max' => 1],
            [['bloodgrp'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'CID',
            'pass' => 'Pass',
            'fcttype_id' => 'ประเภทผู้ป่วย',
            'colour_id' => 'ระดับ',
            'hn' => 'Hn',
            'an' => 'An',
            'ptname' => 'ผู้ป่วย',
            'ptage' => 'อายุ',
            'diage' => 'โรค',
            'pps' => 'Pps',
            'pain' => 'Pain',
            'painnote' => 'Painnote',
            'cc' => 'Cc',
            'pi' => 'Pi',
            'bt' => 'Bt',
            'pr' => 'Pr',
            'rr' => 'Rr',
            'bp' => 'Bp',
            'drugallergy' => 'Drugallergy',
            'admit' => 'Admit',
            'dc' => 'Dc',
            'or' => 'Or',
            'ordate' => 'Ordate',
            'disease' => 'Disease',
            'receive' => 'Receive',
            'address' => 'ที่อยู่',
            'ptcate' => 'Ptcate',
            'phone' => 'Phone',
            'hossub' => 'Hossub',
            'tra' => 'Tra',
            'retng' => 'Retng',
            'retfo' => 'Retfo',
            'colobag' => 'Colobag',
            'lesion' => 'Lesion',
            'lesioncare' => 'Lesioncare',
            'recov' => 'Recov',
            'recovcare' => 'Recovcare',
            'oxygen' => 'Oxygen',
            'lr01' => 'Lr01',
            'lr02' => 'Lr02',
            'lr03' => 'Lr03',
            'lr04' => 'Lr04',
            'lr05' => 'Lr05',
            'lr06' => 'Lr06',
            'lr07' => 'Lr07',
            'lr08' => 'Lr08',
            'lr09' => 'Lr09',
            'lr10' => 'Lr10',
            'lrl01' => 'Lrl01',
            'lrl02' => 'Lrl02',
            'lrl03' => 'Lrl03',
            'lrl04' => 'Lrl04',
            'lrl05' => 'Lrl05',
            'lrl06' => 'Lrl06',
            'lrl07' => 'Lrl07',
            'lrl08' => 'Lrl08',
            'lr' => 'Lr',
            'lrl09' => 'Lrl09',
            'lrl10' => 'Lrl10',
            'lrl11' => 'Lrl11',
            'lrl12' => 'Lrl12',
            'lrl13' => 'Lrl13',
            'other' => 'Other',
            'appdate' => 'Appdate',
            'doctorapp' => 'Doctorapp',
            'appdate2' => 'Appdate2',
            'doctorapp2' => 'Doctorapp2',
            'appdate3' => 'Appdate3',
            'doctorapp3' => 'Doctorapp3',
            'senddate' => 'วันที่ส่งเยี่ยม',
            'windpipe' => 'Windpipe',
            'insulin' => 'Insulin',
            'equip' => 'Equip',
            'depart' => 'แผนกที่ส่ง',
            'hosin' => 'รพ.สต',
            'officer' => 'Officer',
            'confirm' => 'Confirm',
            'confirmfct' => 'Confirmfct',
            'send' => 'ส่งเยี่ยม',
            'okcase' => 'รับเคส',
            'birthday' => 'วันเกิด',
            'tmbpart' => 'ตำบล',
            'sex' => 'เพศ',
            'bloodgrp' => 'กรุ๊ปเลือด',
            'pttype' => 'สิทธิ์การรักษา',
            'moopart' => 'Moopart',
            'bw' => 'Bw',
            'height' => 'Height',
            'age' => 'Age',
            'vstdate' => 'Vstdate',
        ];
    }
}
