<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card card-stats" data-aos="fade-down" data-aos-delay="400">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Blog</h5>
                        <span class="h2 font-weight-bold mb-0"><?= $data['count_blog'][0]['count'] ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-books"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card card-stats" data-aos="fade-down" data-aos-delay="500">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Product</h5>
                        <span class="h2 font-weight-bold mb-0"><?= $data['count_product'][0]['count'] ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-archive-2"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card card-stats" data-aos="fade-down" data-aos-delay="600">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Contact</h5>
                        <span class="h2 font-weight-bold mb-0"><?= $data['count_contact'][0]['count'] ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                            <i class="ni ni-circle-08"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                </p>
            </div>
        </div>
    </div>

</div>