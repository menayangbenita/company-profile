<div class="col-lg-4 position-relative align-self-start">
                    <h5 class="text-lg-end mb-4"><span
                            class="mb-3 fw-bolder border-bottom border-secondary">Terbaru</span></h5>
                    <ul class="news list-unstyled">
                        <?php foreach ($data['berita'] as $berita) : ?>
                        <li>
                            <a href="<?= BASEURL;?>Berita/berita/<?= $berita['id'] ?>" class="d-flex">
                                <img src="<?= BASEURL; ?>img/datafoto/<?= $berita['foto'] ?>" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span><?= $berita['tanggal_publikasi'] ?></span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect"><?= $berita['judul'] ?></span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->
<?php Flasher::flash(); ?>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-12 footer-info">
                <a href="<?= BASEURL; ?>" class="logo d-flex flex-column align-items-start">
                    <img class="mb-4" src="<?= BASEURL; ?>img/logo.png" alt="logo-smk-8" draggable="false">
                    <span><?= $data['footer']['nama'] ?></span>
                </a>
                <p><?= $data['footer']['teks'] ?></p>
            </div>

            <div class="col-lg-3 footer-links">
                <h4 class="pb-0">Asta Arkananta K8 Malang</h4>
                <hr>
                <ul>
                    <li><a href="<?= BASEURL; ?>profilSekolah">Profile Sekolah</a></li>
                    <li><a href="<?= BASEURL; ?>kepalaSekolah">Kepala Sekolah</a></li>
                    <li><a href="<?= BASEURL; ?>prestasi">Prestasi</a></li>
                    <li><a href="<?= BASEURL; ?>visiMisi">Visi & Misi</a></li>
                    <li><a href="<?= BASEURL; ?>guru">Guru</a></li>
                    <li><a href="<?= BASEURL; ?>galeri">Galeri</a></li>
                </ul>
            </div>

            <div class="col-lg-3 footer-links">
                <h4 class="pb-0">Konsentrasi Keahlian</h4>
                <hr>
                <ul>
                    <li><a href="<?= BASEURL; ?>enetrotika">Enetrotika</a></li>
                    <li><a href="<?= BASEURL; ?>elektronikIndustri">Elektronik Industri</a></li>
                    <li><a href="<?= BASEURL; ?>tkj">Teknik Komputer & Jaringan</a></li>
                    <li><a href="<?= BASEURL; ?>rpl">Rekayasa Perangkat Lunak</a></li>
                </ul>
            </div>

            <div class="col-lg-3 footer-contact">
                <h4 class="pb-0">Hubungi Kami</h4>
                <hr>
                <p>
                    <?= $data['footer']['alamat'] ?><br>
                    <strong>Phone:</strong> <?= $data['footer']['nomor'] ?><br>
                    <strong>Email:</strong> <?= $data['footer']['email'] ?><br>
                </p>
            </div>


        </div>
    </div>

    <div class="container mt-4 pt-4 border-top border-white" style="--bs-border-opacity: .1;">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright text-white-50">
                    Copyright <span class="ms-2"></span>&copy; <strong><span><script>document.write(new Date().getFullYear())</script></span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="" target="_blank">Paper Play Studio</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="float-end">
                    <div class="social-links d-flex mt-4">
                        <a href="<?= $data['footer']['x'] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="<?= $data['footer']['fb'] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="<?= $data['footer']['ig'] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="<?= $data['footer']['li'] ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!--Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= BASEURL; ?>plugins/global/plugins.bundle.js"></script>
		<script src="<?= BASEURL; ?>js/scripts.bundle.js"></script>

<!-- Vendor JS Files -->
<script src="<?= BASEURL; ?>vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= BASEURL; ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= BASEURL; ?>vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= BASEURL; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL; ?>vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= BASEURL; ?>vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= BASEURL; ?>vendor/aos/aos.js"></script>
<script src="<?= BASEURL; ?>vendor/php-email-form/validate.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

<!--Vendors Javascript(used for this page only)-->
<script src="<?= BASEURL; ?>plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="<?= BASEURL; ?>plugins/custom/datatables/datatables.bundle.js"></script>

<!--Custom Javascript(used for this page only)-->
<script src="<?= BASEURL; ?>js/widgets.bundle.js"></script>
<script src="<?= BASEURL; ?>js/custom/widgets.js"></script>
<script src="<?= BASEURL; ?>js/custom/apps/chat/chat.js"></script>
<script src="<?= BASEURL; ?>js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= BASEURL; ?>js/custom/utilities/modals/create-app.js"></script>
<script src="<?= BASEURL; ?>js/custom/utilities/modals/new-target.js"></script>
<script src="<?= BASEURL; ?>js/custom/utilities/modals/users-search.js"></script>
<script src="<?= BASEURL; ?>plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script>
    new DataTable('#table');
</script>


<!-- Template Main JS File -->
<script src="<?= BASEURL; ?>js/main.js"></script>

</body>

</html>