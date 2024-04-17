<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Kepala Sekolah</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Kepala Sekolah</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <div>
                        <h3>Kepala Sekolah</h3>
                        <h6 class="fw-bolder mt-3"><?= $data['kepsek']['nama'] ?> (<?= $data['kepsek']['periode'] ?>)</h6>
                        <div class="mb-3 position-relative w-100">
                            <img src="<?= BASEURL; ?>img/datafoto/<?= $data['kepsek']['gambar'] ?>" class="img-fluid rounded-4 w-100" alt="">
                        </div>
                        <div class="table-responsive w-100 mt-3">
                            <table class="table table-bordered w-100">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $data['kepsek']['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td><?= $data['kepsek']['nip'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?= $data['kepsek']['tanggal_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>TMT CPNS</th>
                                        <td><?= $data['kepsek']['tmt_cpns'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>TMT PNS</th>
                                        <td><?= $data['kepsek']['tmt_pns'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan Sekarang</th>
                                        <td><?= $data['kepsek']['jabatan_sekarang'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <h3 class="mt-3 mb-2">Kepala Sekolah Pendahulu</h3>
                        <div class="row mt-lg-2">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row table-responsive">
                                            <table id="table" class="table table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 15%;">Periode</th>
                                                        <th class="w-25">Nama</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data['kepsekDulu'] as $kepsek) : ?>
                                                    <tr>
                                                        <td><?= $kepsek['dari'] ?> - <?= $kepsek['sampai'] ?></td>
                                                        <td><?= $kepsek['nama'] ?></td>
                                                        <td><?= $kepsek['keterangan'] ?></td>
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
                </div>

                