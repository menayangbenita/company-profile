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
<script>
    new DataTable('#table');
</script>


<!-- Template Main JS File -->
<script src="<?= BASEURL; ?>js/main.js"></script>

</body>

</html>