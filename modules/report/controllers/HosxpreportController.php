<?php

namespace app\modules\report\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;

class HosxpreportController extends Controller{
    
    public function actionPersonpttype($date1=null,$date2=null,$pttype=null){
        if($date1==null){
            $date1 = date('Y-m-d');
            $date2 = date('Y-m-d');
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
    public function actionOpddiag($date1=null,$date2=null,$pdx=null){
        if($date1==null){
            $date1 = date('Y-m-d');
            $date2 = date('Y-m-d');
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
}

