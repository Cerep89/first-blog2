<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<header class="header-transparent wow slideInDown">
    <?= $this->render('/partials/header'); ?>
</header>

<div class="b-page-content with-layer-bg">
    <!-- ==========================-->
    <!-- PAGES BACKGROUND -->
    <!-- ==========================-->
    <div class="b-layer">
        <div class="layer-bg page-layer-bg2">
            <div class="layer-content">
                <div class="container wow slideInUp">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 text-center">
                            <!-- Breadcrumbs -->
                            <div class="b-breadcrumbs">
                                <ul class="list-inline">
                                    <li>
                                        <a href="index.php">
                                            home
                                        </a>
                                    </li>
                                    <li class="current">
                                        Blog 02
                                    </li>
                                </ul>
                            </div>
                            <h1 class="main-heading">
                                Blog Classic
                            </h1>
                            <div class="heading-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus
                                    <br>
                                    vitae condimentum egestas, libero dolor auctor tellus
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b-layer-main">
        <div class="page-arrow">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </div>
        <div class="b-blog-classic">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                        <div class="b-blog-items-holder wow slideInLeft">
                            <?php foreach ($articles as $article): ?>
                                <div class="b-blog__item wow zoomIn">
                                    <div class="blog-item-content clearfix">
                                        <a href="single.php" class="blog-item-img">
                                            <img src="<?= $article->getImage(); ?>" alt="/" class="img-responsive">
                                            <span class="blog-category"><?= $article->category->title; ?></span>
                                        </a>
                                        <div class="blog-item-caption">
                                            <div class="item-data">
                                                <?= $article->date; ?>
                                            </div>
                                            <h4 class="item-name">
                                                <a href="single.php"><?= $article->title; ?></a>
                                            </h4>
                                            <p class="item-description">
                                                <?= $article->description; ?>
                                            </p>
                                            <a href="<?= Url::toRoute(['site/article']); ?>" title="Read more"
                                               class="item-read-more">...</a>
                                            <div class="blog-author">
                                                <div class="blog-author-userpic">
                                                    <img src="public/media/content/userpics/userpic-2.png" alt="/">
                                                </div>
                                                <div class="blog-author-name">
                                                    by Edwin Hubbl
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="b-pagination text-center wow fadeInUp">

                                <?php

                                echo LinkPager::widget([
                                    'pagination' => $pages,
                                    'options' => [
                                        'class' => 'b-pagination text-center wow fadeInUp',
                                    ],
                                ]); ?>

                                <ul>
                                    <li class="pag-current">
                                        <a href="#">
                                            1
                                        </a>
                                    </li>
                                    <li class="pag-current">
                                        <a href="#">
                                            2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            3
                                        </a>
                                    </li>
                                    <li class="pag-divider">
                                        <a href="javascript:void(0);">
                                            ...
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            12
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            13
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            14
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <?= $this->render('/partials/sidebar', [
                        'popular' => $popular,
                        'articles' => $articles,
                        'tags' => $tags,
                    ]); ?>


                </div>
            </div>
        </div>
    </div>
</div>
</div>