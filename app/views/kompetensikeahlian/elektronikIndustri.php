<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Elektronik Industri</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Enetrotika</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Elektronik Industri</h3>
                    <div class="border-start border-secondary border-2 pe-lg-5">
                        <p class="ms-3">
                            <i><?= $data['keterangan']['keterangan'] ?></i>
                        </p>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2">Dasar Program Keahlian</h3>
                        <div class="row">
                            <?php $dpkk = array_chunk($data['dpk'], 3); ?>
                            <?php foreach ($dpkk as $dpkkk) : ?>
                                <div class="col-lg-4">
                                    <ul class="ms-2 my-0">
                                        <?php foreach ($dpkkk as $item) : ?>
                                            <li><i class="bi bi-arrow-right-short"></i><?= $item['dpk'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2">Kompetensi Keahlian</h3>
                        <div class="row">
                            <?php $kk = array_chunk($data['kk'], 3); ?>
                            <?php foreach ($kk as $kkk) : ?>
                                <div class="col-lg-4">
                                    <ul class="ms-2 my-0">
                                        <?php foreach ($kkk as $item) : ?>
                                            <li><i class="bi bi-arrow-right-short"></i><?= $item['kk'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                