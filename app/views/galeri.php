<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Galeri</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">
            <h3>Galeri</h3>
            <div class="row mt-3">
                <div class="col-lg-8 pe-lg-5 mb-5">
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Semua</li>
                                <?php foreach ($data['kategori'] as $kategori) : ?>
                                <li data-filter=".<?= $kategori['kategori'] ?>"><?= str_replace(['-', 'dan'], [' ', '&'], $kategori['kategori']) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <?php foreach ($data['galeri'] as $galeri) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?= $galeri['kategori'] ?>">
                            <div class="portfolio-wrap">
                                <img src="<?= BASEURL; ?>img/datafoto/<?= $galeri['gambar'] ?>" class="img-fluid" alt="<?= $galeri['keterangan'] ?>">
                                <div class="portfolio-info">
                                    <p><?= str_replace(['-', 'dan'], [' ', '&'], $galeri['kategori']) ?></p>
                                    <div class="portfolio-links">
                                        <a href="<?= BASEURL; ?>img/datafoto/<?= $galeri['gambar'] ?>" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="<?= $galeri['keterangan'] ?>"><i class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                