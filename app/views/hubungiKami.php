<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Kotak Pertanyaan</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= BASEURL; ?>">ASTA ARKANANTA K8</a></li>
                    <li>Kotak Pertanyaan</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <h3>Hubungi Kami</h3>
                    <div>
                        <iframe style="border:0; width: 100%; height: 340px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6068472079533!2d112.6590588098174!3d-7.936064392054931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6299ed2c476ad%3A0xfba1cc2ab944bab!2sSMK%20Negeri%208%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1711938902671!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-3">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
                <div class="col-lg-4 position-relative align-self-start">
                    <h5 class="text-lg-end mb-4"><span
                            class="mb-3 fw-bolder border-bottom border-secondary">Terbaru</span></h5>
                    <ul class="news list-unstyled">
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit. Sed vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet, consecte
                                        adipiscing elit. Sed vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <img src="<?= BASEURL; ?>img/asset-img.png" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="news-info d-block text-secondary"><span class="date">Berita SMKN
                                            8</span> <span class="mx-1">&bullet;</span> <span>March 25, 2024</span>
                                    </div>
                                    <span class="news-title fw-medium hover-effect">Lorem ipsum dolor sit amet. Sed
                                        vestibulum ante.</span>
                                    <p class="news-link fw-bold mt-1"><span
                                            class="border-bottom border-secondary me-1">READ MORE</span><i
                                            class="bi bi-arrow-right"></i></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->