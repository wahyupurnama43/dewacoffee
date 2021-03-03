<div class="about-img">
    <img src="<?= BASEURL?>/upload/<?= $data['about'][0]['banner'] ?>" alt="" data-aos="fade-down" data-aos-delay="300">
</div>
<div class="container">
    <div class="card about-card p-5">
        <h1 class="judul" data-aos="fade-down" data-aos-delay="300">
            About <?= $data['about'][0]['company'] ?>
        </h1>
        <p class="deskripsi" data-aos="fade-down" data-aos-delay="400">
            <?= $data['about'][0]['deskripsi'] ?>
        </p>
        <div class="buynow text-center mt-4" data-aos="fade-down" data-aos-delay="600">
            <a href="<?= BASE_URL ?>/products" class="btn btn-coffee">Buy Now</a>
        </div>

    </div>
</div>