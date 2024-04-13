<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Visi Misi</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>L; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Visi Misi</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Visi</h3>
                    <div class="border-start border-secondary border-2 mb-5 pe-lg-5">
                        <p class="ms-3">
                            <i><?= $data['visi']['isi_visi'] ?></i>
                        </p>
                    </div>
                    <div>
                        <h3>Misi</h3>
                        <ul>
                            <?php foreach ($data['misi'] as $misi) : ?>
                            <li><i class="bi bi-arrow-right-short"></i><?= $misi['misi'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
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
                                        adipiscing
                                        elit.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ
                                            MORE</span><i class="bi bi-arrow-right"></i></p>
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
                                        adipiscing
                                        elit. Sed vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ
                                            MORE</span><i class="bi bi-arrow-right"></i></p>
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
                                        adipiscing
                                        elit.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ
                                            MORE</span><i class="bi bi-arrow-right"></i></p>
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
                                        adipiscing
                                        elit. Sed vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ
                                            MORE</span><i class="bi bi-arrow-right"></i></p>
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
                                        vestibulum
                                        ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ
                                            MORE</span><i class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->