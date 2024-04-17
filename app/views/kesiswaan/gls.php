<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>GLS (Gerkan Literasi Sekolah)</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">KESISWAAN</a></li>
                    <li>GLS (Gerkan Literasi Sekolah)</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>GLS (Gerkan Literasi Sekolah)</h3>
                    <?= $data['gls']['isi'] ?>
                </div>
                