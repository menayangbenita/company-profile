<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Guru</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">ASTA ARKANANTA K8</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Guru</li>
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
														<!--begin::Search-->
                                                        <div class="d-flex align-items-center position-relative my-1">
                                                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <input type="text" table-search="search"
                                                                class="form-control form-control-solid w-250px ps-12"
                                                                placeholder="Cari..." />
                                                        </div>
                                                        <!--end::Search-->
													</div>
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
														<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">
															Tambah Data Guru
														</button>
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
                                                                        <th class="pe-3">Nama</th>
                                                                        <th class="pe-3">NIP</th>
                                                                        <th class="pe-3">Status</th>
                                                                        <th class="pe-3">Mapel</th>
                                                                        <th class="pe-3 text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-700">
                                                                    <tr>
                                                                        <td>Drs. Burhanudin</td>
                                                                        <td>196012011983031019</td>
                                                                        <td>PNS</td>
                                                                        <td>Simdig & PKK</td>
                                                                        <td class="text-center text-nowrap">
                                                                            <button class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">
																				<i class="ki-duotone ki-pencil fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</button>
                                                                            <button class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Hapus" data-kt-permissions-table-filter="delete_row">
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