<div class="site-wrap">
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('<?= BASEURL ?>/upload/<?= $data['details']['banner'] ?>');" data-aos="fade-down"
        data-aos-delay="300">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <h1 class="mb-4"><a href=""><?= $data['details']['judul'] ?>.</a></h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 mr-3 d-inline-block">
                                <img src="<?= BASEURL ?>/assets/img/theme/team-4.jpg" alt="Image" class="img-fluid" />
                            </figure>
                            <span class="d-inline-block mt-1"><?= $data['details']['username'] ?></span>
                            <span>&nbsp;-&nbsp; <?= date('F d , Y', strtotime($data['details']['created_at'])) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <section class="site-section py-lg">
            <div class="container">
                <div class="row blog-entries element-animate">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="post-content-body" data-aos="fade-down" data-aos-delay="300">
                            <p>
                                <?= $data['details']['deskripsi'] ?>
                            </p>
                        </div>

                        <div class="pt-5">
                            <p data-aos="fade-right" data-aos-delay="300">
                                Tags:
                                <?php foreach($data['tags'] as $bg): ?>
                                <a href="#" data-aos="zoom-in-up" data-aos-delay="400">#<?= $bg['tag'] ?>,</a>
                                <?php endforeach; ?>
                            </p>
                        </div>

                        <!-- <div class="pt-5">
                            <h3 class="mb-5" data-aos="zoom-in" data-aos-delay="300">1 Comments</h3>
                            <ul class="comment-list" data-aos="fade-right" data-aos-delay="400">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="<?= BASEURL ?>/assets/img/theme/team-4.jpg" alt="Image placeholder" />
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>
                                            
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                    <!-- END main-content -->

                    <div class="col-md-12 col-lg-4 sidebar">
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <div class="bio text-center">
                                <img src="<?= BASEURL ?>/assets/img/theme/team-4.jpg" alt="Image Placeholder"
                                    class="img-user mb-5" data-aos="zoom-in" data-aos-delay="300" />
                                <div class="bio-body">
                                    <h2 data-aos="zoom-in" data-aos-delay="400"><?= $data['details']['username'] ?></h2>
                                    <!-- <p class="mb-4" data-aos="zoom-in" data-aos-delay="500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis
                                        sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga
                                        sit molestias minus.
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <h3 class="heading" data-aos="fade-up" data-aos-delay="300">Popular Posts</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <?php $delay = 300; ?>
                                    <?php foreach($data['blog'] as $bg): ?>
                                    <li>
                                        <a href="" data-aos="fade-up" data-aos-delay="<?= $delay += 100 ?>">
                                            <img src="<?= BASEURL ?>/upload/<?= $bg['banner']?>" alt="Image placeholder"
                                                class="mr-4" />
                                            <div class="text">
                                                <h4><?= $bg['judul'] ?></h4>
                                                <div class="post-meta">
                                                    <span
                                                        class="mr-2"><?= date('F d , Y', strtotime($data['details']['created_at'])) ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- END sidebar-box -->

                        <div class="sidebar-box">
                            <h3 class="heading" data-aos="zoom-in-up" data-aos-delay="300">Tags</h3>
                            <ul class="tags">
                                <?php $delay = 300; ?>
                                <?php foreach($data['tags'] as $bg): ?>
                                <li><a href="#" class="text-decoration-none" data-aos="zoom-in-up"
                                        data-aos-delay="400"><?= $bg['tag'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar -->
                </div>
            </div>
        </section>
    </div>
</div>