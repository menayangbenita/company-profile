<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMKN 8 Kota Malang - <?= $data['judul'] ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="description" content="Frontend by PaperPlay" />
    <meta name="author" content="PaperPlay, paperplay@gmail.com" />

    <!-- Favicons -->
    <link href="<?= BASEURL; ?>img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" />
    <link href="<?= BASEURL; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>vendor/aos/aos.css" rel="stylesheet">
    <!--Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= BASEURL; ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= BASEURL; ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- Template Main CSS File -->
    <link href="<?= BASEURL; ?>css/main.css" rel="stylesheet">
    <style>
        /*--------------------------------------------------------------
        # Gallery Section
        --------------------------------------------------------------*/
        .gallery {
            overflow: hidden;
        }

        .gallery .swiper-pagination {
            margin-top: 16px;
            position: relative;
        }

        .gallery .swiper-pagination .swiper-pagination-bullet {
            width: 9px;
            height: 9px;
            background-color: #d1d1d7;
            opacity: 1;
        }

        .gallery .swiper-pagination .swiper-pagination-bullet-active {
            background-color: var(--color-primary);
        }

        .gallery .swiper-slide-active {
            text-align: center;
        }

        @media (min-width: 992px) {
            .gallery .swiper-wrapper {
                padding: 40px 0;
            }

            .gallery .swiper-slide-active {
                border-radius: 10px;
                border: 4px solid var(--color-primary);
                padding: 4px;
                background: #fff;
                z-index: 1;
                transform: scale(1.2);
            }
            .gallery .swiper-pagination {
            margin-top: 0px;
            position: relative;
            }
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?= BASEURL; ?>" class="logo d-flex align-items-center">
                <img src="<?= BASEURL; ?>img/logo.png" alt="">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>ASTA ARKANANTA K8</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>profilSekolah">Profile Sekolah</a></li>
                            <li><a href="<?= BASEURL; ?>kepalaSekolah">Kepala Sekolah</a></li>
                            <li><a href="<?= BASEURL; ?>prestasi">Prestasi</a></li>
                            <li><a href="<?= BASEURL; ?>visiMisi">Visi & Misi</a></li>
                            <li><a href="<?= BASEURL; ?>guru">Guru</a></li>
                            <li><a href="<?= BASEURL; ?>galeri">Galeri</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Manajemen</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>wakaHumas">Waka BIdang Humas & HI</a></li>
                            <li><a href="<?= BASEURL; ?>wakaSarpras">Waka BIdang Sarana & Prasarana</a></li>
                            <li><a href="<?= BASEURL; ?>wakaKesiswaan">Waka Bidang Kesiswaan</a></li>
                            <li><a href="<?= BASEURL; ?>wakaKurikulum">Waka Bidang Kurikulum</a></li>
                            <li><a href="<?= BASEURL; ?>wakaPSDM">Waka Bidang PSDM</a></li>
                            <li><a href="<?= BASEURL; ?>wakaTU">Kepala Urusan Tata Usaha</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Konsentrasi Keahlian</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>enetrotika">Enetrotika</a></li>
                            <li><a href="<?= BASEURL; ?>elektronikIndustri">Elektronik Industri</a></li>
                            <li><a href="<?= BASEURL; ?>tkj">TKJ</a></li>
                            <li><a href="<?= BASEURL; ?>rpl">RPL</a></li>
                            <li><a href="<?= BASEURL; ?>KetuaMekatronika">Ketua Jurusan Mekatronika</a></li>
                            <li><a href="<?= BASEURL; ?>KetuaElektronik">Ketua Jurusan Elektronik Industri</a></li>
                            <li><a href="<?= BASEURL; ?>KetuaTkj">Ketua Jurusan TKJ</a></li>
                            <li><a href="<?= BASEURL; ?>KetuaRpl">Ketua Jurusan RPL</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>BKK</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>strukturOrganisasiBKK">Struktur Organisasi BKK</a></li>
                            <li><a href="<?= BASEURL; ?>jobdescription">Jobdescription BKK</a></li>
                            <li><a href="<?= BASEURL; ?>programKerjaBKK">Program Kerja BKK</a></li>
                            <li><a href="<?= BASEURL; ?>inovasiProgramBKK">Inovasi Program BKK</a></li>
                            <li><a href="<?= BASEURL; ?>visiMisiBKK">Visi & Misi BKK</a></li>
                            <li><a href="<?= BASEURL; ?>alurKegiatanBKK">Alur Kegiatan BKK</a></li>
                            <li><a href="<?= BASEURL; ?>rekapitulasiMOU">Rekapitulasi MOU</a></li>
                            <li><a href="<?= BASEURL; ?>industriPasangan">Industri Pasangan</a></li>
                            <li><a href="<?= BASEURL; ?>dokumentasiBKK">Dokumentasi BKK</a></li>
                            <li><a href="<?= BASEURL; ?>sharingPraktikBaik">Sharing Praktik Baik</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Kesiswaan</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>organisasiKesiswaan">Organisasi</a></li>
                            <li><a href="<?= BASEURL; ?>ekstrakurikuler">Ekstrakurikuler</a></li>
                            <li><a href="<?= BASEURL; ?>dokumentasiEkstrakurikuler">Dokumentasi Ekstrakulikuler</a></li>
                            <li><a href="<?= BASEURL; ?>gerakanLiterasiSekolah">GLS (Gerakan Literasi Sekolah)</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Adiwiyata</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASEURL; ?>organisasiAdiwiyata">Organisasi Adiwiyata</a></li>
                            <li><a href="<?= BASEURL; ?>visiMisiAdiwiyata">Visi & Misi Adiwiyata</a></li>
                            <li><a href="<?= BASEURL; ?>alurKegiatanAdiwiyata">Alur Kegiatan Adiwiyata</a></li>
                            <li><a href="<?= BASEURL; ?>BeritaAdiwiyata">Berita Adiwiyata</a></li>

                        </ul>
                    </li>
                    <li><a href="<?= BASEURL; ?>berita">Berita</a></li>
                    <li><a href="#">PPDB</a></li>
                </ul>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->
    <!-- End Header -->