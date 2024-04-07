<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Waka Sarpras</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Manajemen</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Waka Sarpras</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-xxl-12">
											<div class="card mb-5 mb-xl-10">
												<div class="card-header pt-2 mb-5">
                                                    <div class="card-title d-flex flex-column">
														<span class="text-uppercase fw-bold pb-0 fs-3">Tulis tentang Waka Sarana & Prasarana</span>
													</div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
                                                        <form action="">
                                                            <div class="row" data-bs-theme="light">
																<div class="col-sm-12">
																	<textarea name="kt_docs_ckeditor_classic" id="kt_docs_ckeditor_classic">
																	</textarea>
																</div>
															</div>
													</div>
												</div>
                                                <div class="card-footer">
                                                    <button class="btn btn-primary float-end">Simpan Perubahan</button>
                                                    </form>
                                                </div>
											</div>
                                            <div class="card mb-5 mb-xl-10">
												<div class="card-header pt-2 mb-5">
													<div class="card-title d-flex flex-column">
														<div class="card-title d-flex flex-column">
                                                            <span class="text-uppercase fw-bold pb-0 fs-3">Data Sarana & Prasarana</span>
                                                        </div>
													</div>
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahdata">
                                                        <i class="ki-duotone ki-plus fs-2"></i>Tambah</button>
                                                    </div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<!--begin::Table-->
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered align-middle"
                                                                id="table">
                                                                <thead  class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
                                                                    <tr>
                                                                        <th class="pe-3">No.</th>
                                                                        <th class="pe-3">Nama Fasilitas</th>
                                                                        <th class="pe-3">Jumlah</th>
                                                                        <th class="pe-3">Keterangan</th>
                                                                        <th class="pe-3 text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-700">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>text</td>
                                                                        <td>number</td>
                                                                        <td>text</td>
                                                                        <td class="text-center text-nowrap">
                                                                            <button type="button" class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-primary btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Edit">
                                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </button>
                                                                            <button class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm" data-kt-permissions-table-filter="delete_row" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                                                                                <i class="ki-duotone ki-trash fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                    <span class="path4"></span>
                                                                                    <span class="path5"></span>
                                                                                </i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--end::Table-->
													</div>
												</div>
											</div>
                                            <div class="card mb-5 mb-xl-10">
												<div class="card-header pt-2 mb-5">
													<div class="card-title d-flex flex-column">
														<div class="card-title d-flex flex-column">
                                                            <span class="text-uppercase fw-bold pb-0 fs-3">Unggah Gambar dokumentasi sarpras</span>
                                                        </div>
													</div>
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                                        <i class="ki-duotone ki-plus fs-2"></i>Gambar baru</button>
                                                    </div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<!--begin::Table-->
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered align-middle"
                                                                id="table">
                                                                <thead  class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
                                                                    <tr>
                                                                        <th class="pe-3">No.</th>
                                                                        <th class="pe-3">Gambar</th>
                                                                        <th class="pe-3 text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-700">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td class="text-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="">
                                                                                    <!--begin::Overlay-->
                                                                                    <a class="d-block overlay" data-fslightbox="lightbox-basic" href="assets/media/stock/900x600/23.jpg">
                                                                                        <!--begin::Image-->
                                                                                        <div class="symbol symbol-50px">
                                                                                            <img src="assets/media/stock/900x600/23.jpg">
                                                                                        </div>
                                                                                        <!--end::Image-->

                                                                                        <!--begin::Action-->
                                                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                                                            <i class="bi bi-eye-fill text-white"></i>
                                                                                        </div>
                                                                                        <!--end::Action-->
                                                                                    </a>
                                                                                    <!--end::Overlay-->
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center text-nowrap">
                                                                            <button type="button" class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-primary btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Edit">
                                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </button>
                                                                            <button class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm" data-kt-permissions-table-filter="delete_row" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                                                                                <i class="ki-duotone ki-trash fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                    <span class="path4"></span>
                                                                                    <span class="path5"></span>
                                                                                </i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--end::Table-->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->