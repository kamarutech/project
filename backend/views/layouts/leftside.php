<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/backend.jpeg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        
        Menu::widget(


            
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Tutorial', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                      
                        [
                            'label' => 'Datakaryawan',
                            'icon' => 'fa fa-users',
                            'url' => ['datakaryawan/'],


                        ],
                        // [
                        //     'label' => 'Upload Foto',
                        //     'icon' => 'fa fa-upload',
                        //     'url' => ['images/create'],


                        // ],
                      
                        [
                            'label' => 'Log Out',
                            'icon' => 'fa fa-users',
                            'url' => ['site/logout'],

                            //INI FUNGSI LOG OUT NYA !!
                            'template'=>'<a href="{url}" data-method="post">{label}</a>'

                        ],
                       

                    //    LOGOUT//
                        // if (Yii::$app->user->isGuest) {
                        //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                        // } else {
                        //     $menuItems[] = '<li>'
                        //         . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                        //         . Html::submitButton(
                        //             'Logout (' . Yii::$app->user->identity->username . ')',
                        //             ['class' => 'btn btn-link logout']
                        //         )
                        //         . Html::endForm()
                        //         . '</li>';
                        // }
// LOGOUT

                        // ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        // ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
