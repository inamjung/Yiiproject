<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini"><img style="height:40px; margin-top:1px;" src="./img/logo.png"></span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <?php
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right',
                    'encodeLabels'=>false
                    ],
                'items' => [  
                    ['label' => ' เข้าสู่ระบบ', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],
                    //['label' => ' สมัครใช้งาน', 'url' => ['/user/registration/register'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]);        
        ?>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <?php if (!Yii::$app->user->isGuest) { ?>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        
                        <span class="hidden-xs"><?php echo Yii::$app->user->identity->username?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">                           
                            <div> <?= Html::img('avatars/' . Yii::$app->user->identity->avatar, 
                            ['class' => 'img-circle','width' => '120px;']) ?>
                            </div>
                            <p>
                                <?php echo Yii::$app->user->identity->name;?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo yii\helpers\Url::to(['/users/indexusers'])?>" class="btn btn-default btn-flat">ข้อมูลส่วนตัว</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'ออกจากระบบ',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>
                <?php }?>

                <!-- User Account: style can be found in dropdown.less -->
<!--                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>
