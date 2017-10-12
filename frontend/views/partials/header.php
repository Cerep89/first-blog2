<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="b-logo">
                <a href="<?= Url::toRoute(['site/index']); ?>">
                    <img src="assets/media/general/logo-white.png" alt="/">
                    <span class="logo-title">
                        Futurico
                    </span>
                </a>
            </div>
            <!-- Mobile Trigger Start-->
            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
            <!-- Mobile Trigger End-->
        </div>
        <div class="hidden-xs col-sm-9 col-md-7 col-lg-8">
            <div class="header-navibox-2">
                <nav id="nav" class="navbar">
                    <ul class="yamm main-menu nav navbar-nav hidden-xs">
                        <li>
                            <a href="<?= Url::toRoute(['site/index']); ?>">Home</a>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">Blog<b class="caret"></b>
                        <!-- Classic Dropdown--></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="<?= Url::toRoute(['site/category']); ?>" >Category 1</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['site/about']); ?>">About</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['site/contact']); ?>">Contact</a>
                        </li><!--
                        <li>
                            <a href="login.php">Sing in</a>
                        </li>
                        <li>
                            <a href="singup.php">Sing up</a>
                        </li>-->
                        <?php
                        if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                        } else {
                            $menuItems[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')'
                                )
                                . Html::endForm()
                                . '</li>';


                           /////////////////////will delete for prodaction
                            ?>
                        <li>
                            <a href="<?= Url::toRoute(['/../first-blog2/admin']); ?>">admin</a>
                        </li>
                        <?php
                            ////////////////////////////////////


                        }
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => $menuItems,
                        ]);
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
            <div class="b-socials">
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/">
                            <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/">
                            <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.behance.net/">
                            <i class="fa fa-behance fa-fw" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="search-toogle">
                        <a href="#" class="btn_header_search">
                            <i class="fa fa-search fa-fw" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
