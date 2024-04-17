<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>/img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Alur Kegiatan BKK</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">BKK</a></li>
                    <li>Alur Kegiatan BKK</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Alur Kegiatan BKK</h3>
                    <p>
                    <?= $data['AlurBkk']['isi'] ?><br>
                    </p>
                    <div class="pe-lg-3 mb-3 w-100 position-relative">
                        <img src="<?= BASEURL; ?>img/datafoto/<?= $data['AlurBkk']['gambar'] ?>"class="img-fluid w-100 rounded-4" alt="">
                    </div>
                </div>

                