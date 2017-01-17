<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
       <?php if (!Yii::$app->user->isGuest) { ?>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?php  if(Yii::$app->user->identity->role == dektrium\user\models\User::ROLE_ADMIN) {?>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> ตั้งค่าระบบ</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
               
                <ul class="treeview-menu">
                    <li><a href="<?php echo yii\helpers\Url::to(['groups/index'])?>"> 
                            <span><i class="fa fa-circle text-red"></i> กลุ่มงาน</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['departments/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> แผนก</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['positions/index'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> ตำแหน่ง</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['customers/index'])?>"> 
                            <span><i class="fa fa-circle text-yellow"></i> พนักงาน</span>                        
                        </a>                        
                    </li>                    
                </ul>
               </li>    
            </ul>
        <?php }?> 
         <?php }?>
        <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> แจ้งซ่อม</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['repairs/indexuser'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ส่งซ่อม</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['repairs/index'])?>"> 
                            <span><i class="fa fa-circle text-red"></i> รับซ่อม</span>                        
                        </a>                        
                    </li>
                     <li><a href="<?php echo yii\helpers\Url::to(['repairs/indexok'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> ซ่อมได้</span>                        
                        </a>                        
                    </li>
                </ul>
               </li>    
            </ul>
        <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> ตั้งค่าระบบรายงานความเสี่ยง</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/clinics/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ประเภทคลินิก</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/levels/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ระดับความรุนแรง</span>                        
                        </a>                        
                    </li>
                     <li><a href="<?php echo yii\helpers\Url::to(['/risk/programes/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> โปรแกรม</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/risktypes/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> รายการ</span>                        
                        </a>                        
                    </li>
                </ul>
               </li>    
            </ul>
        <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> รายงานความเสี่ยง</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/riskreports/indexuser'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> รายงานความเสี่ยง</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/riskreports/indexadmin'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> รัยรายงานความเสี่ยง</span>                        
                        </a>                        
                    </li>
                     
                </ul>
               </li>    
            </ul>
       

    </section>
</aside>
