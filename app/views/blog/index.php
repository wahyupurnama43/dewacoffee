<div class="container mt-3" data-aos="fade-down" data-aos-delay="300">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach($data['slider'] as $key => $s): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>"
                class=" <?= ($key == 0) ?  'active' : '' ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach($data['slider'] as $key => $s): ?>
            <div class="carousel-item <?= ($key == 0) ?  'active' : '' ?>">
                <img class="d-block w-100 shadow-img" src="<?= BASEURL?>/upload/<?= $s['slider'] ?>"
                    alt="First slide" />
            </div>
            <?php endforeach; ?>
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
        <h1 data-aos="fade-zoom" data-aos-delay="400"><?= $data['page'][0]['judul'] ?></h1>
        <p data-aos="fade-zoom" data-aos-delay="500">
            <?= $data['page'][0]['deskripsi'] ?>
        </p>
    </div>

    <div class="row blog">
        <?php foreach ($data['blog'] as $b): ?>
        <?php 
                    $m = date('M',strtotime($b['created_at']));
                    $d = date('d',strtotime($b['created_at']));
                ?>
        <?php $id = Encripsi::encode('encrypt',$b['id']) ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="zoom-in-down" data-aos-delay="500">
            <a href="<?= BASE_URL ?>/blog/details/<?=$id?>">
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