<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>/img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Prestasi</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Prestasi</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Prestasi</h3>
                    <div class="row mt-lg-2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row table-responsive">
                                        <table id="table" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Skala</th>
                                                    <th>Juara</th>
                                                    <th>Tahun</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data['prestasi'] as $prestasi) : ?>
                                                <tr>
                                                    <td><?= $prestasi['nama']; ?></td>
                                                    <td><?= $prestasi['jenis']; ?></td>
                                                    <td><?= $prestasi['skala']; ?></td>
                                                    <td><?= $prestasi['juara']; ?></td>
                                                    <td><?= $prestasi['tahun']; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                