<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Ketua Jurusan TKJ</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Ketua Jurusan TKJ</li>
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
                        <h3>Ketua Jurusan TKJ</h3>
                        <div class="mb-3 position-relative w-100">
                            <img src="<?= BASEURL; ?>img/datafoto/<?= $data['KetuaMeka']['gambar'] ?>" class="img-fluid rounded-4 w-100" alt="">
                        </div>
                        <div class="table-responsive w-100 mt-3">
                            <table class="table table-bordered w-100">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $data['KetuaMeka']['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td><?= $data['KetuaMeka']['nip'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <td><?= $data['KetuaMeka']['jabatan'] ?></td>
                                    </tr>
                                  
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>

                