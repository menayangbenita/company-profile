<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Wakil Kepala Sekolah Bidang PSDM</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Waka Bidang PSDM</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Wakil Kepala Sekolah Bidang PSDM</h3>
                    <h6 class="fw-bolder mt-3"><?= $data['waka']['nama'] ?></h6>
                    <div class="pe-lg-3 w-100 mb-3 position-relative">
                        <img src="<?= BASEURL; ?>img/datafoto/<?= $data['waka']['foto'] ?>" class="img-fluid rounded-4 w-100" alt="">
                    </div>
                    <p class="pe-lg-4">
                        <?= $data['waka']['isi'] ?>
                    </p>
                </div>

                