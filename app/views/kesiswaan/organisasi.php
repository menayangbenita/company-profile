<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Organisasi</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">KESISWAAN</a></li>
                    <li>Organisasi</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Organisasi</h3>
                    <p>
                        <?= $data['organisasi']['isi'] ?>
                    </p>
                    <div class="pe-lg-3 mb-3 position-relative">
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
                </div>
                
            