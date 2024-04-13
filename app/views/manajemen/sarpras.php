<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>/img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Wakil Kepala Sekolah Bidang Sarana & Prasarana</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Waka Bidang Sarana & Prasarana</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Wakil Kepala Sekolah Bidang Sarana & Prasarana</h3>
                    <h6 class="fw-bolder mt-3"><?= $data['waka']['nama'] ?></h6>
                    <div class="pe-lg-3 w-100 mb-3 position-relative">
                        <img src="<?= BASEURL; ?>/img/datafoto/<?= $data['waka']['foto'] ?>" class="img-fluid rounded-4 w-100" alt="">
                    </div>
                    <p class="pe-lg-4">
                        <?= $data['waka']['isi'] ?>
                    </p>

                    <div class="mt-5">
                        <h3>Data Sarana & Prasarana</h3>
                        <div class="row mt-lg-2">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row table-responsive">
                                            <table id="table" class="table table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Fasilitas</th>
                                                        <th>Jumlah</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($data['sarpras'] as $sarpras) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $sarpras['nama'] ?></td>
                                                        <td><?= $sarpras['jumlah'] ?></td>
                                                        <td><?= $sarpras['keterangan'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ======= Gallery Section ======= -->
                    <div id="gallery" class="gallery mt-0 pt-0">
                        <h3 class="mt-5 mb-lg-0 pb-lg-0">Galeri</h3>
                        <div class="container ms-0 ps-0">
                            <div class="gallery-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                <?php foreach ($data['galeri'] as $galeri) : ?>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                            href="<?= BASEURL; ?>/img/datafoto/<?= $galeri['foto'] ?>"><img
                                                src="<?= BASEURL; ?>/img/datafoto/<?= $galeri['foto'] ?>" class="img-fluid rounded-2"
                                                alt=""></a>
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
                                <img src="<?= BASEURL; ?>/img/asset-img.png" alt="" class="img-fluid me-3">
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
                                <img src="<?= BASEURL; ?>/img/asset-img.png" alt="" class="img-fluid me-3">
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
                                <img src="<?= BASEURL; ?>/img/asset-img.png" alt="" class="img-fluid me-3">
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
                                <img src="<?= BASEURL; ?>/img/asset-img.png" alt="" class="img-fluid me-3">
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
                                <img src="<?= BASEURL; ?>/img/asset-img.png" alt="" class="img-fluid me-3">
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