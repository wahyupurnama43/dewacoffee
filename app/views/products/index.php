    <div class="hero">
        <img src="<?= BASEURL?>/upload/<?= $data['banner'][0]['banner'] ?>" alt="" data-aos="zoom-in-down"
            data-aos-delay="400">
    </div>

    <div class="container">
        <div class="row mt-5 product">
            <?php $delay = 300; ?>
            <?php foreach ($data['product'] as $product): ?>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-down" data-aos-delay="<?= $delay+=100; ?>">
                <div class="wrapper-1">
                    <div class="container-1">
                        <div class="top"
                            style="background: url(<?= BASEURL ?>/upload/<?php echo $product['gambar'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
                        </div>
                        <div class="bottom">
                            <div class="left">
                                <div class="details">
                                    <h1 style="font-size: 1em"><?php echo $product['judul'] ?></h1>
                                    <p>Rp <?php echo $product['price']; ?></p>
                                </div>
                                <?php $id = Encripsi::encode('encrypt',$product['id_product']) ?>
                                <a href="<?= BASE_URL?>/products/detail/<?php echo $id ?>">
                                    <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
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
    </div>