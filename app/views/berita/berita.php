<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2><?= $data['berita']['judul'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>L; ?>">BERITA</a></li>
                    <li><?= $data['berita']['judul'] ?></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container pe-lg-4" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <p class="fs-1 fw-bold"><?= $data['berita']['judul'] ?></p>
                    <h6 class="fw-bold my-5 text-muted"><span class="me-4"> 24 MARET 2024 </span>|<span class="ms-4">
                            SMKN 8 MALANG </span></h6>
                    <p>
                    <?= $data['berita']['isi'] ?>
                    </p>

                    <div class="row mt-5">
                        <h6 class="fw-bold">Author:</h6>
                        <p><?= $data['berita']['author'] ?></p>
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