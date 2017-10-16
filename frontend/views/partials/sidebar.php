<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
    <div class="b-aside wow slideInRight">
        <div class="b-search-add">
            <form id="search-additional-form" class="form-aside">
                <input type="text" placeholder="Search..." class="form-control"/>
                <button class="aside-submit"><i class="icon fa fa-search"></i></button>
            </form>
        </div>
        <div class="b-aside-item">
            <div class="aside-categories">
                <h5 class="aside-title">
                    Categories
                    <i class="fa fa-align-left" aria-hidden="true"></i>
                </h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">All categories <span class="categories-counter">122</span></a>
                    </li>
                    <li>
                        <a href="#">Technology <span class="categories-counter">31</span></a>
                    </li>
                    <li>
                        <a href="#">Design <span class="categories-counter">21</span></a>
                    </li>
                    <li>
                        <a href="#">Marketing <span class="categories-counter">13</span></a>
                    </li>
                    <li>
                        <a href="#">Development <span class="categories-counter">45</span></a>
                    </li>
                    <li>
                        <a href="#">Adventures <span class="categories-counter">9</span></a>
                    </li>
                    <li>
                        <a href="#">Photography <span class="categories-counter">15</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="b-aside-item">
            <div class="aside-calendar">
                <h5 class="aside-title">
                    Calendar
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </h5>
                <div class="b-calendar text-center"></div>
            </div>
        </div>
        <div class="b-aside-item">
            <div class="aside-tags">
                <h5 class="aside-title">
                    Tags
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </h5>
                <div class="b-tags">
                    <ul class="list-unstyled">
                        <?php foreach ($tags as $tag ):?>
                            <li>
                                <a href="#">
                                    <?= $tag->title;?>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="b-aside-item">
            <div class="aside-popular">
                <h5 class="aside-title">
                    Popular Posts
                    <i class="fa fa-bolt" aria-hidden="true"></i>
                </h5>
                <div class="b-popular">
                    <?php foreach ($popular as $article):?>
                    <div class="blog-item-content clearfix">
                        <a href="single.php" class="blog-item-img">
                            <img src="<?= $article->getImage();?>" alt="/" class="img-responsive">
                        </a>
                        <div class="blog-item-caption">
                            <div class="item-data">
                                <?= $article->date; ?>
                            </div>
                            <h4 class="item-name">
                                <a href="single.php"><?= $article->title?></a>
                            </h4>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
