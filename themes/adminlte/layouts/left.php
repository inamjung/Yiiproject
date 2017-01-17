<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
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
                </ul>
               </li>    
            </ul>
       

    </section>
</aside>
