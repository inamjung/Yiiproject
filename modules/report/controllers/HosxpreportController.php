<?php

namespace app\modules\report\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;

class HosxpreportController extends Controller{
    
    public function actionPersonpttype($date1=null,$date2=null,$pttype=null){
        if($date1==null){
//            $date1 = date('Y-m-d');
//            $date2 = date('Y-m-d');
        }
        
        $connection = \Yii::$app->db2;
        $data = $connection->createCommand("select a.hn,p.pname,p.fname,p.lname,a.pdx,a.vstdate,i.name as icdname 
            ,pt.name as pttype
            from vn_stat a 
            left outer join patient p on p.hn=a.hn
            left outer join icd101 i on i.code=a.main_pdx 
            left outer join pttype pt on pt.pttype=a.pttype
            where a.vstdate between '$date1' and '$date2'
            and a.pdx<>'' and a.pdx is not null
            and pt.pttype='$pttype'
            order by a.vn")->queryAll();
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data
        ]);
        
        return $this->render('personpttype',[
            'dataProvider'=>$dataProvider,
            'date1'=>$date1,
            'date2'=>$date2,
            'pttype'=>$pttype
            
        ]);
    }
    public function actionOpddiag($date1=null,$date2=null,$pdx=null,$icdname=null,$a=null){
        if($date1==null){
//            $date1 = date('Y-m-d');
//            $date2 = date('Y-m-d');
        }
        
        $connection = \Yii::$app->db2;
        $data = $connection->createCommand("select a.pdx
            ,i.name as icdname 
            ,count(a.pdx) as a
            from vn_stat a 
            left outer join icd101 i on i.code=a.main_pdx 
            where a.vstdate between '$date1' and '$date2'
            and a.pdx<>'' and a.pdx is not null  
            and a.pdx not like('%Z%')
            group by a.pdx,i.name 
            order by a desc 
            limit 10")->queryAll();
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data
        ]);
        for ($i = 0; $i < sizeof($data); $i++) {
            $pdx[] = $data[$i]['pdx'];        
            $icdname[] = $data[$i]['icdname']; 
            $a[] = $data[$i]['a']*1; 
        }
        
        return $this->render('opddiag',[
            'dataProvider'=>$dataProvider,
            'date1'=>$date1,
            'date2'=>$date2, 
            'pdx'=>$pdx,
            'icdname'=>$icdname,
            'a'=>$a
        ]);        
    }
    
    public function actionSubopddiag($date1=null,$date2=null,$pdx=null){        
       
        $sql = "select a.vstdate,a.pdx,a.hn 
            from vn_stat a 
            left outer join icd101 i on i.code=a.main_pdx 
            where a.vstdate between '$date1' and '$date2'
            and a.pdx<>'' and a.pdx is not null  
            and a.pdx not like('%Z%')
	    and a.pdx='$pdx'";
        
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$rawData,
        ]);
        
        return $this->render('subopddiag',[
            'dataProvider'=>$dataProvider,
            'rawData'=>$rawData,
            'date1'=>$date1,
            'date2'=>$date2, 
            'pdx'=>$pdx
        ]); 
    }
    
    public function actionPtname($cid=null){        
        
        $connection = \Yii::$app->db2;
        $data = $connection->createCommand("select pt.hn,pt.cid
            ,CONCAT(pt.pname,pt.fname,' ',pt.lname ) ptname
            from patient pt
            where pt.cid='$cid'")->queryAll();
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data
        ]);
//        for ($i = 0; $i < sizeof($data); $i++) {
//            $pdx[] = $data[$i]['pdx'];        
//            $icdname[] = $data[$i]['icdname']; 
//            $a[] = $data[$i]['a']*1; 
//        }
        
        return $this->render('ptname',[
            'dataProvider'=>$dataProvider,
            'cid'=>$cid
//            'date1'=>$date1,
//            'date2'=>$date2, 
//            'pdx'=>$pdx,
//            'icdname'=>$icdname,
//            'a'=>$a
        ]);        
    }
    
    public function actionInsertptname($cid=null,$hn=null,$ptname=null){
        
        $insertpt = new \app\models\Patient();
        
        $insertpt->cid = $cid;
        $insertpt->hn = $hn;
        $insertpt->ptname = $ptname;
        
        $insertpt->save();
        return $this->redirect(['/report/hosxpreport/ptname']);
    }
    
    public function actionSqljoin($cid = null,$hos_guid=null,$birthday=null,$cc=null,$hpi=null,$age_y=null)
    {
       $sql = "select p.hos_guid,v.vn,p.hn,concat(p.pname,p.fname,' ',p.lname)as ptname,p.cid
        ,v.age_y,max(v.vstdate) as vstdate,o.cc,o.hpi,o.bw,o.height,p.drugallergy
        ,p.birthday,p.addressid,p.moopart,p.tmbpart,p.clinic,p.pttype
        ,v.vstdate,p.moopart,p.informaddr,p.hometel,p.tmbpart,p.sex,v.pdx,p.bloodgrp

        from patient p
        left outer join vn_stat v on v.hn=p.hn
        left outer join opdscreen o on o.vn=v.vn
        where p.cid='$cid'
        group by v.vn
        order by v.vstdate desc
        limit 3";
        $connection = \Yii::$app->db2;
        $data = $connection->createCommand($sql)->queryAll();
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data,                
            ]);
       
        return $this->render('sqljoin', [
            //'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'sql' => $sql,    
            'cid'=>$cid,
            'hos_guid'=>$hos_guid,
            'birthday'=>$birthday,
            'cc'=>$cc,            
            'hpi'=>$hpi,
            'age_y'=>$age_y
        ]);
    }
    public function actionInsertjoin($id,$cc=null,$pi=null,$age_y=null,$sex=null,$hn=null,$diage=null
            ,$height=null,$bw=null,$cid=null,$ptname=null,$address=null,$disease=null,$bloodgrp=null
            ,$pttype=null,$vstdate=null,$moopart=null,$drugallergy=null,$phone=null,$tmbpart=null){
        
        $insertjoin = new \app\modules\report\models\Sqljoin();
        
        $insertjoin->cc = $cc;
        $insertjoin->pi = $pi;
        $insertjoin->age = $age_y;
        $insertjoin->height = $height;
        $insertjoin->bw = $bw;
        $insertjoin->cid = $cid;
        $insertjoin->ptname = $ptname;
        $insertjoin->address =$address;
        $insertjoin->disease  = $disease;
        $insertjoin->pttype = $pttype;
        $insertjoin->vstdate = $vstdate;
        $insertjoin->moopart = $moopart;
        $insertjoin->drugallergy = $drugallergy;
        $insertjoin->phone = $phone;
        $insertjoin->tmbpart = $tmbpart;
        $insertjoin->sex = $sex;
        $insertjoin->hn = $hn;
        $insertjoin->diage = $diage;
        $insertjoin->bloodgrp = $bloodgrp;
        
        $insertjoin->send = 0;
        $insertjoin->okcase = 0;
        
        $insertjoin->save();
         return $this->redirect(['sqljoin']);
       
        
        
// 
       
        
    }
}

