
        <div class="container">
            <div class="row banner">
                <div class="col-lg-6 col-md-6 col-sm-12 text">
                    <div class="text-banner" >
                        <h1 data-aos="fade-right" data-aos-delay="500">
                            Inspired By <br />
                            The Best Coffee <br />
                            Of Indonesia
                        </h1>
                        <p data-aos="fade-right" data-aos-delay="600">
                            Dewa coffee "coffee specialist" is an online coffee shop that sells various types of coffee in Indonesia. The coffee that we sell comes from farmers and coffee who have full dedication to produce coffee that has
                            the best taste.
                        </p>
                        <a href="products.html" class="btn btn-coffee" data-aos="fade-right" data-aos-delay="700">Show Product</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 banner">
                    <img src="<?= BASEURL ?>/assets/img/banner.png" alt="" data-aos="fade-left" data-aos-delay="500"/>
                </div>
            </div>

            <div class="row mt-5 product">
                <?php foreach ($data['product'] as $product): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-down" data-aos-delay="200">
                        <div class="wrapper-1">
                            <div class="container-1">
                                <div class="top" style="background: url(<?= BASEURL ?>/upload/<?php echo $product['gambar'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
                                <div class="bottom">
                                    <div class="left">
                                        <div class="details">
                                            <h1 style="font-size: 1em"><?php echo $product['judul'] ?></h1>
                                            <p>Rp <?php echo $product['price']; ?></p>
                                        </div>
                                        <?php $id = Encripsi::encode('encrypt',$product['id_product']) ?>
                                        <a href="<?= BASE_URL?>/products/detail/<?php echo $id ?>"><div class="buy"><i class="material-icons">add_shopping_cart</i></div></a>
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
                <a href="#" class="btn btn-coffee">More Product &nbsp;.&nbsp;.&nbsp;.</a>
            </div>

            <section id="testim" class="testim mt-5" data-aos="zoom-in-down" data-aos-delay="500">
                <div class="testim-cover">
                    <div class="wrap">
                        <span id="right-arrow" class="arrow right material-icons">keyboard_arrow_right</span>
                        <span id="left-arrow" class="arrow left material-icons">keyboard_arrow_left</span>
                        <ul id="testim-dots" class="dots">
                            <li class="dot active"></li>
                            <li class="dot"></li>
                            <li class="dot"></li>
                            <li class="dot"></li>
                        </ul>
                        <div id="testim-content" class="cont">
                            <div class="active">
                                <div class="img"><img src="<?= BASEURL ?>/assets/img/user/user-1.jpg" alt="" /></div>
                                <h2>Lila Handayani</h2>
                                <p>Fansnya kopi kali, Paling suka sama Kopi Bali Blend setiap bulan pasti selalu sediain stok bali blend untuk saya dan ayah saya :). Kopitem mantul deh harga terjangkau lagi.</p>
                            </div>

                            <div>
                                <div class="img"><img src="<?= BASEURL ?>/assets/img/user/user-2.jpg" alt="" /></div>
                                <h2>Ratri</h2>
                                <p>Kopinya mantep, servisnya juga bagus, rasa dijamin oke lah</p>
                            </div>

                            <div>
                                <div class="img"><img src="<?= BASEURL ?>/assets/img/user/user-1.jpg" alt="" /></div>
                                <h2>Lila Handayani</h2>
                                <p>Fansnya kopi kali, Paling suka sama Kopi Bali Blend setiap bulan pasti selalu sediain stok bali blend untuk saya dan ayah saya :). Kopitem mantul deh harga terjangkau lagi.</p>
                            </div>

                            <div>
                                <div class="img"><img src="<?= BASEURL ?>/assets/img/user/user-2.jpg" alt="" /></div>
                                <h2>Ratri</h2>
                                <p>Kopinya mantep, servisnya juga bagus, rasa dijamin oke lah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container news">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="zoom-in-down" data-aos-delay="500">
                    <a href="details_blog.html">
                        <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                </div>
                                <img src="<?= BASEURL ?>/assets/img/news/news-1.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">5 benefits of coffee grounds that you can use at home</h1>
                                <p class="description">
                                    Have you ever thought about using coffee grounds for something other than just ending up in the trash? This time, Kopitem wants to provide tips on how to use coffee grounds in everyday life.
                                </p>
                                <div class="post-meta">
                                    <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="zoom-in-down" data-aos-delay="600">
                    <a href="details_blog.html">
                        <div class="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                </div>
                                <img src="<?= BASEURL ?>/assets/img/news/news-2.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">Buy Coffee Bean or Ground? Which one is better?</h1>
                                <p class="description">Have you ever thought about using coffee grounds for something other than just ending up in the trash? This time, Kopitem wants to provide tips on how to use coffee grounds in everyday life.</p>
                                <div class="post-meta">
                                    <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="zoom-in-down" data-aos-delay="700">
                    <a href="details_blog.html">
                        <div class="post-module" id="post-module">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <div class="date">
                                    <div class="day">27</div>
                                    <div class="month">Mar</div>
                                </div>
                                <img src="<?= BASEURL ?>/assets/img/news/news-3.jpg" />
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category">Photos</div>
                                <h1 class="title">Here are the advantages of Robusta coffee that you must know!</h1>
                                <p class="description">Have you ever thought about using coffee grounds for something other than just ending up in the trash? This time, Kopitem wants to provide tips on how to use coffee grounds in everyday life.</p>
                                <div class="post-meta">
                                    <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
