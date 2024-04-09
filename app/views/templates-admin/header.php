<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Admin - <?= $data['judul']; ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="Frontend by PaperPlay" />
  		<meta name="author" content="PaperPlay, paperplay@gmail.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<link rel="shortcut icon" href="<?= BASEURL; ?>admin/media/logo_smk8-removebg-preview.png" />
		<!--Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--Vendor Stylesheets(used for this page only)-->
		<link href="<?= BASEURL; ?>admin/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= BASEURL; ?>admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?= BASEURL; ?>admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= BASEURL; ?>admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.5/dist/quill.snow.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.5/dist/quill.js"></script>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />

        <style>
            table.table-bordered.dataTable td:first-child,
            table.table-bordered.dataTable th:first-child {
                border-left-width: 1px;
                border-left-color: var(--bs-table-border-color); 
            }
            table.table-bordered.dataTable td:last-child,
            table.table-bordered.dataTable th:last-child {
                border-left-width: 1px;
                border-left-color: var(--bs-table-border-color); 
            }
            div.dataTables_scrollFootInner table.table-bordered tr th:first-child, div.dataTables_scrollHeadInner table.table-bordered tr th:first-child {
                border-left: 1px solid var(--bs-table-border-color)!important;
            }
        </style>
	</head>

	<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="<?= BASEURL; ?>admin/dist/index.html" class="d-lg-none">
								<img alt="Logo" src="<?= BASEURL; ?>admin/media/logo_smk8-removebg-preview.png" class="h-30px" />
							</a>
						</div>
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
								</div>
							</div>
							<div class="app-navbar flex-shrink-0">
								<div class="app-navbar-item">
									<div class="btn btn-icon btn-color-white btn-active-color-primary"
										data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
										data-kt-menu-placement="bottom-end">

										<a href="#"
											class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
											data-kt-menu-trigger="{default:'click', lg: 'hover'}"
											data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-menu fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</a>
									</div>
									<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
									data-kt-menu="true">
										<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10">
											<h3 class="fw-semibold mb-3">Beranda</h3>
											<span class="text-gray-800 py-2 px-3">Perbarui tampilan
												beranda utama</span>
										</div>
										<div class="row g-0">
											<div class="col-6">
												<a href="berandaSlider.html"
													class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
													<i class="ki-duotone ki-slider fs-3x text-primary mb-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
													<span class="fs-5 fw-semibold text-gray-800 mb-0">Slider</span>
													<span class="fs-7 text-gray-400">Perbarui slider</span>
												</a>
											</div>
											<div class="col-6">
												<a href="berandaInformasi.html"
													class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
													<i class="ki-duotone ki-information-4 fs-3x text-primary mb-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
													<span class="fs-5 fw-semibold text-gray-800 mb-0">Informasi</span>
													<span class="fs-7 text-gray-400">Perbarui informasi</span>
												</a>
											</div>
											<div class="col-6">
												<a href="berandaFAQ.html"
													class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
													<i class="ki-duotone ki-question fs-3x text-primary mb-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>                                                                                                                                 
													</i>
													<span class="fs-5 fw-semibold text-gray-800 mb-0">FAQ</span>
													<span class="fs-7 text-gray-400 text-center">Perbarui pertanyaan yang sering diajukan</span>
												</a>
											</div>
											<div class="col-6">
												<a href="berandaFooter.html"
													class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
													<i class="ki-duotone ki-tablet-text-down fs-3x text-primary mb-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
													<span class="fs-5 fw-semibold text-gray-800 mb-0">Footer</span>
													<span class="fs-7 text-gray-400">Perbarui Footer</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="app-navbar-item ms-1 ms-md-3">
									<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
											<span class="path7"></span>
											<span class="path8"></span>
											<span class="path9"></span>
											<span class="path10"></span>
										</i>
										<i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</a>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
									</div>
								</div>
								<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
									<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="<?= BASEURL; ?>admin/media/avatars/blank.png" alt="user" />
									</div>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="<?= BASEURL; ?>admin/media/avatars/blank.png" />
												</div>
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5"><?= $data['user']['username']; ?>
													    <!-- <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span> -->
                                                    </div>
													<!-- <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">admin@gmail.com</a> -->
												</div>
											</div>
										</div>
										<div class="separator my-2"></div>
										<div class="menu-item px-5">
											<a href="<?= BASEURL; ?>logout" class="menu-link px-5">Sign Out</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<a href="<?= BASEURL; ?>admin/dist/index.html">
								<img alt="Logo" src="<?= BASEURL; ?>admin/media/logolightfix.png" class="h-30px app-sidebar-logo-default theme-light-show" />
								<img alt="Logo" src="<?= BASEURL; ?>admin/media/logodarkfix.png" class="h-30px app-sidebar-logo-default theme-dark-show" />
								<img alt="Logo" src="<?= BASEURL; ?>admin/media/logo_smk8-removebg-preview.png" class="h-30px app-sidebar-logo-minimize" />
							</a>
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-duotone ki-double-left fs-2 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
								<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
									<div data-kt-menu-trigger="click" class="menu-item">
										<a href="<?= BASEURL; ?>dashboard">
											<span class="menu-link">
												<span class="menu-title">Dashboard</span>
											</span>
										</a>
									</div>

									<div class="menu-item pt-5">
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">MENU</span>
										</div>
									</div>

									<!-- asta arkananta k8 -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-book-square fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">ASTA ARKANANTA K8</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminProfilSekolah">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Profil Sekolah</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminKepalaSekolah">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kepala Sekolah</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminPrestasi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Prestasi</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminVisiMisi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Visi & Misi</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminGuru">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Guru</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminGaleri">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Galeri</span>
												</a>
											</div>
										</div>
									</div>

									<!-- manajemen -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-briefcase fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Manajemen</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>ManajemenHumas">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Waka Bidang Humas & HI</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>ManajemenSarpras">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Waka Bidang Sarana & Prasarana</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>ManajemenKesiswaan">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Waka Bidang Kesiswaan</span>
												</a>
											</div>
											<div class="menu-item"
												<a class="menu-link" href="<?= BASEURL; ?>ManajemenKurikulum">
												<a class="menu-link" href="wakaKurikulum.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Waka Bidang Kurikulum</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>ManajemenPSDM">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Waka Bidang PSDM</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>ManajemenTu">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kepala Urusan Tata Usaha</span>
												</a>
											</div>
										</div>
									</div>

									<!-- konsentrasi keahlian -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-book-open fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">Konsentrasi Keahlian</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminEnetrotika">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Enetrotika</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminElektronikIndustri">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Elektronik Industri</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminTkj">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">TKJ</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminRpl">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">RPL</span>
												</a>
											</div>
										</div>
									</div>

									<!-- bkk -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-address-book fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">BKK</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BKKOrganisasi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Struktur Organisasi BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>Bkkjobdescription">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Jobdescription BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkkprogramKerja">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Program Kerja BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkkInovasiProgram">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Inovasi Program BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkkvisiMisi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Visi & Misi BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkkAlurKegiatan">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Alur Kegiatan BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkkrekapitulasiMOU">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Rekapitulasi MOU</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkkindustriPasangan">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Industri Pasangan</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>Bkkdokumentasi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dokumentasi BKK</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>BkksharingPraktik">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Sharing Praktik Baik</span>
												</a>
											</div>
										</div>
									</div>

									<!-- kesiswaan -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-people fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</span>
											<span class="menu-title">Kesiswaan</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminOrganisasi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Organisasi</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminEkstrakurikuler">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Ekstrakurikuler</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>EkstrakurikulerDokumentasi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dokumentasi Ekstrakurikuler</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdminGls">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">GLS (Gerakan Literasi Sekolah)</span>
												</a>
											</div>
										</div>
									</div>

									<!-- adiwiyata -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-46 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Adiwiyata</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdiwiyataOrganisasi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Organisasi Adiwiyata</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdiwiyataVisiMIsi">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Visi & Misi Adiwiyata</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL; ?>AdiwiyataAlurKegiatan">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Alur Kegiatan Adiwiyata</span>
												</a>
											</div>
										</div>
									</div>

									<!-- berita -->
									<div data-kt-menu-trigger="click" class="menu-item">
										<a href="<?= BASEURL; ?>adminBerita">
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-element-equal fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
													</i>
												</span>
												<span class="menu-title">Berita</span>
											</span>
										</a>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!--end::Sidebar-->
