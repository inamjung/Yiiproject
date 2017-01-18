<?php

namespace app\modules\report\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;

class HosxpreportController extends Controller{
    
    public function actionPersonpttype(){
        
        $connection = \Yii::$app->db2;
        $data = $connection->createCommand("select a.hn,p.pname,p.fname,p.lname,a.pdx,a.vstdate,i.name as icdname 
            ,pt.name as pttype
            from vn_stat a 
            left outer join patient p on p.hn=a.hn
            left outer join icd101 i on i.code=a.main_pdx 
            left outer join pttype pt on pt.pttype=a.pttype
            where a.vstdate between '2015-10-01' and '2015-10-15'
            and a.pdx<>'' and a.pdx is not null
            and pt.pttype='10'
            order by a.vn")->queryAll();
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data
        ]);
        
        return $this->render('personpttype',[
            'dataProvider'=>$dataProvider
        ]);
    }
}

