<!-- ======= hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <?php foreach ($data['slider'] as $slider) : ?>
                <div class="carousel-item active" style="background-image: url(img/datafoto/<?= $slider['foto'] ?>)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><?= $slider['subjudul'] ?></h2>
                            <p class="animate__animated animate__fadeInUp"><?= $slider['judul'] ?></p>
                            <h6>
                                <?= $slider['konten'] ?>
                            </h6>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">

    <section id="berita">
        <div class="container">
            <div class="section-header">
                <span>Informasi SMK Negeri 8 Malang</span>
                <h2>Informasi SMK Negeri 8 Malang</h2>
            </div>
            <div class="row">
                <?php foreach ($data['berita'] as $berita) : ?>
                <div class="col-md-6 mb-lg-3">
                    <a href="<?= BASEURL; ?>berita/berita/<?= $berita['id'] ?>">
                        <div class="card border-0 shadow-none mb-5 px-lg-3">
                            <div class="card-body p-0 pe-lg-5">
                                <img class="object-fit-cover w-100 rounded-4 mb-3" height="280"
                                    src="<?= BASEURL; ?>img/datafoto/<?= $berita['foto'] ?>" alt="">
                                <a class="text-dark" href="<?= BASEURL; ?>berita/berita/<?= $berita['id'] ?>">
                                    <h3 class="mb-3 fw-bold" id="judul"><?= $berita['judul'] ?></h3>
                                </a>
                                <p class="mb-3 fs-6">                                            
                                    <?= strlen($berita['isi']) > 200 ? substr($berita['isi'], 0, 210) . '...' : $berita['isi'] ?>
                                </p>
                                <div class="d-flex justify-content-between" style="font-size: smaller;">
                                    <a href="<?= BASEURL; ?>berita/berita<?= $berita['id'] ?>" class="fw-bold text-dark">READ MORE <i
                                            class="bi bi-arrow-up-right-circle"></i></a>
                                    <p class="fw-bold"><?= $berita['tanggal_publikasi'] ?></p>
                                    <p class="fw-bold">SMKN 8 MALANG</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3>Hubungi Kami</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est
                        laborum.</p>
                    <a class="cta-btn" href="<?= BASEURL;?>hubungikami">Kotak Pertanyaan</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Pertanyaan yang Sering Diajukan</span>
                <h2>Pertanyaan yang Sering Diajukan</h2>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                    <?php foreach ($data['faq'] as $faq) : ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    <?= $faq['pertanyaan'] ?>
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <?= $faq['jawaban'] ?>
                                </div>
                            </div>
                        </div><!-- # Faq item-->
                    <?php endforeach; ?>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->