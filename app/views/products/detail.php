<?php  
    foreach ($data['gallery'] as $gll) {
        if ($gll['status'] == 'active') {
            $active = $gll['gambar'];
        }
    }
   
?>
<div class="container mt-5">
    <section class="listing-gallery">
        <div class="grid-noGutter">
            <div class="col-6_md-12 ">
                <div class="col-12 listing-gallery-img-lg" data-aos="zoom-in" data-aos-delay="300">
                    <img id="active-img" src="<?= BASEURL?>/upload/<?php echo $active ?>" class="responsive-img" />
                </div>
                <div class="col-12 grid-noGutter">
                    <?php $delay = 400 ?>
                    <?php foreach ($data['gallery'] as $gl): ?>
                        <div class="col-3_md-4_sm-6 listing-gallery-img-sm" data-aos="zoom-in" data-aos-delay="<?php echo $delay += 100 ?>">
                            <img src="<?= BASEURL?>/upload/<?php echo $gl['gambar'] ?>" alt="A description of the image" class="listing-gallery-img responsive-img <?= ($active == $gl['gambar']) ? 'selected' : '' ?>" />
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-6_md-12">
                <div class="details_product">
                    <div class="judul" data-aos="fade-left" data-aos-delay="300"><?php echo $data['product']['judul'] ?></div>
                    <div class="deskripsi" data-aos="fade-left" data-aos-delay="400">
                        <p>
                           <?php echo $data['product']['judul'] ?>
                        </p>
                    </div>
                    <div class="price-product" data-aos="fade-left" data-aos-delay="500">
                        Price : Rp <?php echo $data['product']['price'] ?>
                    </div>
                    <div class="button-buy" data-aos="fade-left" data-aos-delay="600">
                        <a href="https://wa.link/tjtv2k" class="btn btn-coffee" >Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>