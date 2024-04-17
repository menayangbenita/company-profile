<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Profil Sekolah</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Profil Sekolah</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Profile Sekolah</h3>
                    <p>
                        <?= $data['profil']['isi'] ?>
                    </p>
                    <div class="pe-lg-3 w-100 mb-3 position-relative">
                        <img src="<?= BASEURL; ?>img/datafoto/<?= $data['profil']['thumbnail'] ?>" class="img-fluid rounded-4 w-100" alt="">
                        <a href="<?= $data['profil']['video'] ?>" class="glightbox play-btn"></a>
                    </div>
                    <!-- <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam itaque similique qui at iure
                        omnis fugiat
                        laborum facilis voluptatum ipsum! Nesciunt fugit nam mollitia sunt accusamus animi asperiores
                        saepe atque,
                        repudiandae beatae aut doloremque excepturi tempore vel error autem sequi iure culpa accusantium
                        magni
                        molestias est assumenda non necessitatibus! Unde nam repudiandae tempora sunt laborum sed
                        cupiditate
                        veritatis dolore quae. Laboriosam magnam odio autem. Ut illo adipisci necessitatibus aliquam
                        corporis
                        repellendus accusantium velit, totam reprehenderit praesentium esse enim repudiandae.
                    </p> -->
                </div>
                