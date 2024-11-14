<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <span>Stand Blog HTML5 Template</span>
                            <h4>Creative HTML Template For Bloggers!</h4>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-button">
                                <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <?php foreach ($allPosts as $post) : ?>
                            <?php if($post['status'] == 1) : ?>
                                <div class="col-lg-6 blog-post-container">
                                    <a href="<?= "/post-detail?post_id=" . $post['id']?>">
                                        <div class="blog-post">
                                            <div class="blog-thumb thumb-img">
                                                <img src="<?php echo htmlspecialchars($post['thumbnail']); ?>" alt="">
                                            </div>
                                            <div class="down-content">
                                                <span>Món ngon mỗi ngày</span>
                                                <a href="<?= "/post-detail?post_id=" . $post['id']?>"><h4><?= $post['title']?></h4></a>
                                                <ul class="post-info">
                                                    <li>Admin</li>
                                                    <li><?= $post['created_at']?>></li>
                                                    <li>12 Comments</li>
                                                </ul>
                                                <p>
                                                    <?php if(strlen($post['description']) > 100){
                                                        echo substr($post['description'], 0, 100)."...";
                                                    }else {
                                                        echo $post['description'];
                                                    }
                                                    ?>
                                                </p>
                                                <div class="post-options">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-tags"></i></li>
                                                                <li><a href="#">Best Templates</a>,</li>
                                                                <li><a href="#">TemplateMo</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach;?>
                        <div class="col-lg-12">
                            <ul class="page-numbers">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sidebar-item search">
                                <form id="search_form" name="gs" method="GET" action="#">
                                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item recent-posts">
                                <div class="sidebar-heading">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <?php foreach ($limitPost as $post) :?>
                                            <?php if($post['status'] == 1) : ?>
                                                <li><a href="<?= "/post-detail?post_id=" . $post['id']?>">
                                                        <h5><?= $post['title']?></h5>
                                                        <span><?= $post['created_at']?></span>
                                                    </a></li>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item categories">
                                <div class="sidebar-heading">
                                    <h2>Categories</h2>
                                </div>
                                <div class="content">
                                    <ul class="categories clearfix">
                                        <li>
                                            <a href="/gr/recipes/category/2020-holiday"><span>2024 Holiday</span> (7)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/autumn"><span>Autumn</span> (5)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/bbq"><span>BBQ</span> (6)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/beef"><span>Beef</span> (20)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/breakfast"><span>Breakfast</span> (28)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/chicken"><span>Chicken</span> (13)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/chocolate"><span>Chocolate</span> (5)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/christmas"><span>Christmas</span> (23)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/comfort-food"><span>Comfort Food</span> (15)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/dessert"><span>Dessert</span> (26)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/drinks"><span>Drinks</span> (1)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/duck"><span>Duck</span> (1)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/easter"><span>Easter</span> (3)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/egg"><span>Egg</span> (25)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/fish"><span>Fish</span> (8)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/fit-food" class="active"><span>Fit Food</span> (21)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/game"><span>Game</span> (3)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/kids"><span>Kids</span> (11)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/lamb"><span>Lamb</span> (5)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/pancake-day"><span>Pancake Day</span> (2)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/pasta"><span>Pasta</span> (6)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/pie"><span>Pie</span> (4)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/pork"><span>Pork</span> (18)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/salads"><span>Salads</span> (10)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/seafood"><span>Seafood</span> (9)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/store-cupboard-staples"><span>Store Cupboard Staples</span> (2)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/summer"><span>Summer</span> (11)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/thanksgiving"><span>Thanksgiving</span> (13)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/valentines-day"><span>Valentine's Day </span> (1)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/vegan"><span>Vegan</span> (4)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/vegetarian"><span>Vegetarian</span> (41)</a>
                                        </li>
                                        <li>
                                            <a href="/gr/recipes/category/wellington"><span>Wellington</span> (2)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item tags">
                                <div class="sidebar-heading">
                                    <h2>Tag Clouds</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">HTML5</a></li>
                                        <li><a href="#">Inspiration</a></li>
                                        <li><a href="#">Motivation</a></li>
                                        <li><a href="#">PSD</a></li>
                                        <li><a href="#">Responsive</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>