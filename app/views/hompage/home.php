<div class="container">
    <div class="row banner">
        <div class="col-lg-6 col-md-12 col-sm-12 text">
            <div class="text-banner">
                <h1 data-aos="fade-right" data-aos-delay="300">
                    <?= $data['banner'][0]['judul'] ?>
                </h1>
                <p data-aos="fade-right" data-aos-delay="400">
                    Dewa coffee "coffee specialist" is an online coffee shop that sells various types of coffee in
                    Indonesia. The coffee that we sell comes from farmers and coffee who have full dedication to produce
                    coffee that has the best
                    taste.
                </p>
                <a href="products.html" class="btn btn-coffee" data-aos="fade-right" data-aos-delay="500">Show
                    Product</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 img-banner">
            <img src="<?= BASEURL ?>/upload/<?= $data['banner'][0]['banner'] ?>" alt="" data-aos="fade-left"
                data-aos-delay="500" />
        </div>
    </div>

    <div class="row mt-5 product">
        <?php $delay = 200; ?>
        <?php foreach ($data['product'] as $product): ?>
        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-down" data-aos-delay="<?= $delay+=100 ?>">
            <div class="wrapper-1">
                <div class="container-1">
                    <div class="top"
                        style="background: url(<?=BASEURL?>/upload/<?php echo$product['gambar']?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <div class="details">
                                <h1 style="font-size: 1em;"><?php echo $product['judul'] ?></h1>
                                <p>
                                    Rp
                                    <?php echo $product['price']; ?>
                                </p>
                            </div>
                            <?php $id = Encripsi::encode('encrypt',$product['id_product']) ?>
                            <a href="<?= BASE_URL?>/products/detail/<?php echo $id ?>">
                                <div class="buy"><i class="material-icons">visibility</i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inside">
                    <div class="icon"><i class="material-icons">info_outline</i></div>
                    <div class="contents">
                        <table>
                            <tr>
                                <th>Type of Coffee</th>
                                <th>Neto</th>
                            </tr>
                            <tr>
                                <td><?php echo $product['tipe_coffee'] ?></td>
                                <td><?php echo $product['neto'] ?></td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo substr($product['deskripsi'], 0, 200) ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col-4    -->
        <?php endforeach ?>
    </div>
    <div class="m-auto pt-3 text-center pb-3" data-aos="zoom-in-down" data-aos-delay="800">
        <a href="<?= BASE_URL ?>/products" class="btn btn-coffee">More Product &nbsp;.&nbsp;.&nbsp;.</a>
    </div>

    <section id="testim" class="testim mt-5" data-aos="zoom-in-down" data-aos-delay="500">
        <div class="testim-cover">
            <div class="wrap">
                <span id="right-arrow" class="arrow right material-icons">keyboard_arrow_right</span>
                <span id="left-arrow" class="arrow left material-icons">keyboard_arrow_left</span>
                <ul id="testim-dots" class="dots">
                    <?php foreach($data['review'] as $key => $review): ?>
                    <li class="dot <?= ($key == 0) ? 'active' : '' ?>"></li>
                    <?php endforeach; ?>
                </ul>
                <div id="testim-content" class="cont">
                    <?php foreach($data['review'] as $review): ?>
                    <div class=" <?= ($key == 0) ? 'active' : '' ?>">
                        <div class="img"><img src="<?= BASEURL ?>/upload/<?= $review['photo']?>" alt="" /></div>
                        <h2><?= $review['nama'] ?></h2>
                        <p><?= $review['review'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container news">
    <div class="row">
        <?php foreach ($data['blog'] as $b): ?>
        <?php 
                    $m = date('M',strtotime($b['created_at']));
                    $d = date('d',strtotime($b['created_at']));
                ?>
        <?php $id = Encripsi::encode('encrypt',$b['id']) ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="zoom-in-down" data-aos-delay="500">
            <a href="<?= BASE_URL ?>/blog/details/<?= $id?>">
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
                            <span class="timestamp">
                                <i class="fa fa-clock-">o</i>
                                <?= date('d F, Y', strtotime($b['created_at'])); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>