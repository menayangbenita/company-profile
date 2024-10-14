<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Berita</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="berita.html">BERITA</a></li>
                    <!-- <li>Berita</li> -->
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <div id="berita" class="row">
                        <p id="tidak-ada-berita" style="display:none;">Tidak ada berita</p>
                        <?php foreach ($data['berita'] as $berita): ?>
                            <a href="<?= BASEURL; ?>berita/berita/<?= $berita['id'] ?>">
                                <div class="card border-0 shadow-none mb-5">
                                    <div class="card-body p-0 pe-lg-5">
                                        <img class="object-fit-cover w-100 rounded-4 mb-3" height="280"
                                            style="object-fit: cover;"
                                            src="<?= BASEURL; ?>img/datafoto/<?= $berita['foto'] ?>" alt="">
                                        <a class="text-dark" href="<?= BASEURL; ?>berita/berita/<?= $berita['id'] ?>">
                                            <h3 class="mb-3" id="judul"><?= $berita['judul'] ?></h3>
                                        </a>
                                        <h6 class="fw-bold mb-3"><span class="me-4"> <?= $berita['tanggal_publikasi'] ?> </span>|<span
                                                class="ms-4"> SMKN 8 MALANG </span></h6>
                                        <p class="mb-3">
                                            <?= strlen($berita['isi']) > 200 ? substr($berita['isi'], 0, 200) . '...' : $berita['isi'] ?>
                                        </p>
                                        <a href="<?= BASEURL; ?>berita/berita/<?= $berita['id'] ?>" class="fw-bold">READ MORE <i
                                                class="bi bi-arrow-up-right-circle"></i></a>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <nav aria-label="Page navigation example mt-0">
                            <ul class="pagination pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 position-relative align-self-start">
    

                    <h5 class="text-lg-end mb-4"><span
                            class="mb-3 fw-bolder border-bottom border-secondary">Terbaru</span></h5>
                    <ul class="news list-unstyled">
                        <?php foreach ($data['baru'] as $baru): ?>
                            <li>
                                <a href="<?= BASEURL; ?>berita/berita/<?= $baru['id'] ?>" class="d-flex">
                                    <img src="<?= BASEURL; ?>img/datafoto/<?= $baru['foto'] ?>" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                                8</span> <span class="mx-1">&bullet;</span>
                                            <span><?= $baru['tanggal_publikasi'] ?></span>
                                        </div>
                                        <span class="news-title fw-medium hover-effect"><?= $baru['judul'] ?></span>
                                        <p class="news-link fw-bold mt-1"><span
                                                class="border-bottom border-secondary me-1">READ MORE</span><i
                                                class="bi bi-arrow-right"></i></p>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->