<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ADMIN SMKN 8 MALANG</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Dashboard</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-xxl-6">
											<div class="card card-flush h-md-100">
												<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('<?= BASEURL; ?>admin/media/stock/900x600/42.png')">
													<div class="mb-10">
														<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
															<span class="me-2">Selamat datang <?= $data['user']['username']; ?>!</span>
														</div>
													</div>
													<img class="mx-auto h-150px h-lg-200px theme-light-show" src="<?= BASEURL; ?>admin/media/illustrations/misc/upgrade.svg" alt="assetdashboard" draggable="false" />
													<img class="mx-auto h-150px h-lg-200px theme-dark-show" src="<?= BASEURL; ?>admin/media/illustrations/misc/upgrade-dark.svg" alt="assetdashboard" draggable="false" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->