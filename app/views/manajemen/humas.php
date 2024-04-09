<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Wakil Kepala Sekolah Bidang Humas</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Waka Bidang Humas & HI</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Wakil Kepala Sekolah Bidang Humas</h3>
                    <h6 class="fw-bolder mt-3">
                        <?= $data['waka']['nama'] ?>
                    </h6>
                    <div class="pe-lg-3 w-100 mb-3 position-relative">
                        <img src="<?= BASEURL; ?>img/datafoto/<?= $data['waka']['foto'] ?>"
                            class="img-fluid rounded-4 w-100" alt="">
                    </div>
                    <p class="pe-lg-4">
                        <?= $data['waka']['isi'] ?>
                    </p>
                    <div>
                        <p>Adapun berikut beberapa contoh kerjasama sekolah dengan lebih dari <?= $data['indus']['jumlah'] ?> industri / DUDIKA di
                            seluruh wilayah Indonesia antara lain:</p>
                        <section id="service" class="services pt-0 mb-0 pb-0">

                            <div class="row gy-4">
                                <?php foreach ($data['logo'] as $logo): ?>
                                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="<?= BASEURL; ?>img/datafoto/<?= $logo['foto'] ?>" alt=""
                                                    class="img-fluid">
                                            </div>
                                            <h3>
                                                <?= $logo['nama'] ?>
                                            </h3>
                                        </div>
                                    </div><!-- End Card Item -->
                                <?php endforeach; ?>
                            </div>

                        </section><!-- End Services Section -->
                    </div>
                    <!-- ======= Gallery Section ======= -->
                    <div id="gallery" class="gallery mt-0 pt-0">
                        <h3 class="mt-5 mb-lg-0 pb-lg-0">Galeri</h3>
                        <div class="container ms-0 ps-0">
                            <div class="gallery-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <?php foreach ($data['galeri'] as $galeri): ?>
                                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                                href="<?= BASEURL; ?>img/datafoto/<?= $galeri['foto'] ?>"><img
                                                    src="<?= BASEURL; ?>img/datafoto/<?= $galeri['foto'] ?>"
                                                    class="img-fluid rounded-2" alt=""></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div><!-- End Gallery Section -->
                </div>

                <div class="col-lg-4 position-relative align-self-start">
                    <h5 class="text-lg-end mb-4"><span
                            class="mb-3 fw-bolder border-bottom border-secondary">Terbaru</span></h5>
                    <ul class="news list-unstyled">
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit. Sed vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit. Sed vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet. Sed
                                        vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->