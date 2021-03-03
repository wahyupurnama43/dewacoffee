    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="maps " data-aos="zoom-in" data-aos-delay="300">
                    <?= $data['contact'][0]['maps'] ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="text-about">
                    <h1 data-aos="zoom-in-down" data-aos-delay="300">
                        Contact us
                    </h1>
                    <p data-aos="zoom-in-down" data-aos-delay="400">
                        contact us if you want to work together
                    </p>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-2 info-me">
                            <ul data-aos="zoom-in-down" data-aos-delay="500">
                                <li class="judul">Address</li>
                                <li class="info"><?= $data['contact'][0]['address'] ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-2 info-me">
                            <ul data-aos="zoom-in-down" data-aos-delay="600">
                                <li class="judul">Email</li>
                                <li class="info"><?= $data['contact'][0]['email'] ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-2 info-me">
                            <ul data-aos="zoom-in-down" data-aos-delay="700">
                                <li class="judul">Phone</li>
                                <li class="info"><?= $data['contact'][0]['phone'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="send-message">
                    <div class="judul" data-aos="zoom-in-down" data-aos-delay="800">Send Message</div>
                    <form action="<?= BASE_URL?>/contact" method="POST">
                        <div class="form-group" data-aos="zoom-in-down" data-aos-delay="900">
                            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama" />
                            <div class="line"></div>
                        </div>
                        <div class="form-group" data-aos="zoom-in-down" data-aos-delay="1000">
                            <input type="email" class="form-control" id="inputEmail4" name="email"
                                placeholder="Email" />
                            <div class="line"></div>
                        </div>
                        <div class="form-group" data-aos="zoom-in-down" data-aos-delay="1100">
                            <textarea class="form-control" rows="2" name="message" placeholder="Message"></textarea>
                            <div class="line"></div>
                        </div>
                        <div class="tombol text-right" data-aos="zoom-in-down" data-aos-delay="1200">
                            <button type="submit" name="submit" class="btn btn-coffee ">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>