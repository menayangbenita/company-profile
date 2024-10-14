<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/datafoto/<?= $data['isiberita']['foto'] ?>');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2><?= $data['isiberita']['judul'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>L; ?>">BERITA</a></li>
                    <li><?= $data['isiberita']['judul'] ?></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container pe-lg-4" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <p class="fs-1 fw-bold"><?= $data['isiberita']['judul'] ?></p>
                    <h6 class="fw-bold my-5 text-muted"><span class="me-4"> <?= $data['isiberita']['tanggal_publikasi'] ?> </span>|<span class="ms-4">
                            SMKN 8 MALANG </span></h6>
                    <p>
                    <?= $data['isiberita']['isi'] ?>
                    </p>

                    <div class="row mt-5">
                        <h6 class="fw-bold">Author:</h6>
                        <p><?= $data['isiberita']['author'] ?></p>
                    </div>
                </div>

                