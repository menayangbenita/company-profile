<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Alur Kegiatan Adiwiyata</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ADIWIYATA</a></li>
                    <li>Alur Kegiatan Adiwiyata</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Alur Kegiatan Adiwiyata</h3>
                    <p>
                    <?= $data['AlurAdiwiyata']['isi'] ?>
                    </p>
                    <div class="pe-lg-3 mb-3 w-100 position-relative">
                    <img src="<?= BASEURL; ?>img/datafoto/<?= $data['AlurAdiwiyata']['gambar'] ?>" class="img-fluid w-100 rounded-4" alt="">
                    </div>
                </div>
                