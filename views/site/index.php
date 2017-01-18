<?php
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */

$this->title = 'Yii-Repair';
?>
<div class="site-index">

    <div class="row">
        <div class="col-lg-3 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">แจ้งซ่อม</span>
              <span class="info-box-number">
                  <h3><?php echo app\models\Repairs::find()->count(); ?>
                  </h3>
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">ความเสี่ยง</span>
              <span class="info-box-number">
                  <h3><?php echo app\modules\risk\models\Riskreports::find()->count(); ?>
                  </h3>
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-blue"><i class="fa fa-comment-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">อุปกรณ์</span>
              <span class="info-box-number">
                  <h3><?php echo app\models\Tools::find()->count(); ?>
                  </h3>
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-yellow"><i class="fa fa-comment-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">ผู้ใช้งาน</span>
              <span class="info-box-number">
                  <h3><?php echo dektrium\user\models\User::find()->count(); ?>
                  </h3>
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
   </div>
<!--    /////////////-->
    
<!--////////////-->
<div class="row">   
        <div class="col-md-6">     
            <div id="chart1"></div>                    
        </div>
        <div class="col-md-6">     
            <div id="chart2"></div>                    
        </div>
    </div> 
    <div style="display: none">
    <?=
        Highcharts::widget([
            'scripts' => [
                'highcharts-more', // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                //'modules/exporting', // adds Exporting button/menu to chart
                'themes/grid',       // applies global 'grid' theme to all charts
                'highcharts-3d',
                'modules/drilldown'
            ]
        ]);
    ?>                  
        
    </div>

            <?php
            $sql = "select  p.name,COUNT(r.id) as total 
                    FROM risktypes r
                    LEFT JOIN programes p on p.id=r.programe_id
                    GROUP BY p.id";
            $rawData = Yii::$app->db->createCommand($sql)->queryAll();
            $main_data = [];
            foreach ($rawData as $data) {
                $main_data[] = [
                    'name' => $data['name'],
                    'y' => $data['total'] * 1,                    
                ];
            }
            $main = json_encode($main_data);
          
$this->registerJs("$(function () {

    $('#chart1').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'จำนวนโปรแกรม ( db )'
        },
        xAxis: {
            type: 'category'
        },
        

        legend: {
            enabled: true
        },

        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },

        series: [
        {
            name: 'โปรแกรม',
            colorByPoint: true,
            data:$main
            
        }
        ],
         
    });
});", yii\web\View::POS_END);
?>       
                                
                            
<!--   //////////////-->
    <?php
            $sql = "select p.name,count(pt.hn)  total from patient pt
                    LEFT JOIN pttype p on p.pttype=pt.pttype
                    WHERE p.`name` <> ''
                    GROUP BY p.pttype";
            $rawData = Yii::$app->db2->createCommand($sql)->queryAll();
            $main_data = [];
            foreach ($rawData as $data) {
                $main_data[] = [
                    'name' => $data['name'],
                    'y' => $data['total'] * 1,                    
                ];
            }
            $main = json_encode($main_data);
          
$this->registerJs("$(function () {

    $('#chart2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'จำนวนผู้ป่วยแยกตามสิทธิ์ ( db2 )'
        },
        xAxis: {
            type: 'category'
        },        

        legend: {
            enabled: true
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [
        {
            name: 'สิทธิ์',
            colorByPoint: true,
            data:$main            
        }
        ],
         
    });
});", yii\web\View::POS_END);
?>
</div>
