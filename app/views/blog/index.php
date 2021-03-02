<div class="container mt-3" data-aos="fade-down" data-aos-delay="300">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 shadow-img" src="<?= BASEURL?>/assets/img/banner/banner-3.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 shadow-img" src="<?= BASEURL?>/assets/img/banner/banner-1.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 shadow-img" src="<?= BASEURL?>/assets/img/banner/banner-2.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="text-blog mt-5">
        <h1 data-aos="fade-zoom" data-aos-delay="400">About coffee</h1>
        <p data-aos="fade-zoom" data-aos-delay="500">
            If we talk about coffee, there will definitely be no end. There is so much that can be discussed about coffee. Dewa Kopi in its affairs about coffee always tries to meet directly with coffee farmers, see and carry out the
            processing of coffee so that the coffee we get and then sell is always in the best condition. Not only taking the coffee, we also share experiences with farmers, exchange ideas about coffee, so that a sustainable coffee system
            can be implemented properly. We also work with many coffee roasters in Indonesia to create the best coffee flavors. Here is a collection of our stories about coffee
        </p>
    </div>

    <div class="row blog">
         <?php foreach ($data['blog'] as $b): ?>
                <?php 
                    $m = date('M',strtotime($b['created_at']));
                    $d = date('d',strtotime($b['created_at']));
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="zoom-in-down" data-aos-delay="500">
                    <a href="details_blog.html">
                        <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day"><?= $d ?></div>
                                    <div class="month"><?= $m ?></div>
                                </div>
                                <img src="<?= BASEURL ?>/upload/<?=$b['banner'] ?>" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title"><?= $b['judul']?></h1>
                                <div class="post-meta">
                                    <span class="timestamp"><i class="fa fa-clock-">o</i>
                                        <?= date('d F, Y', strtotime($b['created_at'])); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach;?>
    </div>
</div>
