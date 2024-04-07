<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Elektronik Industri</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Konsentrasi Keahlian</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Elektronik Industri</li>
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
														<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Elektronik Industri</span>
													</div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<form id="kt_docs_formvalidation" class="form" action="#" autocomplete="off">
															<div class="row mb-5 fv-row">
																<label for="visi" class="col-sm-2 col-form-label">Keterangan</label>
																<div class="col-sm-10">
																	<textarea name="visi" id="visi" class="form-control" data-kt-autosize="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, adipisci voluptates vitae doloribus placeat dolores nisi culpa corporis. Ad, quos?</textarea>
																</div>
															</div>
															<div class="row mb-5 fv-row">
																<label class="col-form-label col-md-2">Dasar Program Keahlian</label>
																<div class="col-sm-10">
																	<div id="kt_docs_repeater_basic">
																	<div class="form-group">
																		<div data-repeater-list="kt_docs_repeater_basic">
																			<div data-repeater-item>
																				<div class="form-group row">
																					<div class="col-9 col-md-10">
																						<input type="text" id="misi" class="form-control mb-2" placeholder="Ketik Dasar Program Keahlian...." />
																					</div>
																					<div class="col-3 col-md-2">
																						<a href="javascript:;" data-repeater-delete class="btn btn-outline btn-outline-danger btn-active-light-danger btn-sm mtb-2">
																							<i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
																							Hapus
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--begin::Form group-->
																	<div class="form-group mt-5">
																		<a href="javascript:;" data-repeater-create class="btn btn btn-outline btn-outline-primary btn-active-light-primary btn-sm">
																			<i class="ki-duotone ki-plus fs-3"></i>
																			Tambah Misi
																		</a>
																	</div>
																	<!--end::Form group-->
																</div>
																</div>
															</div>
															<div class="row mb-5 fv-row">
																<label class="col-form-label col-md-2">Kompetensi Keahlian</label>
																<div class="col-sm-10">
																	<div id="kt_docs_repeater_basic_1">
																	<div class="form-group">
																		<div data-repeater-list="kt_docs_repeater_basic_1">
																			<div data-repeater-item>
																				<div class="form-group row">
																					<div class="col-9 col-md-10">
																						<input type="text" id="misi" class="form-control mb-2" placeholder="Ketik Kompetensi Keahlian...." />
																					</div>
																					<div class="col-3 col-md-2">
																						<a href="javascript:;" data-repeater-delete class="btn btn-outline btn-outline-danger btn-active-light-danger btn-sm mtb-2">
																							<i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
																							Hapus
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--begin::Form group-->
																	<div class="form-group mt-5">
																		<a href="javascript:;" data-repeater-create class="btn btn btn-outline btn-outline-primary btn-active-light-primary btn-sm">
																			<i class="ki-duotone ki-plus fs-3"></i>
																			Tambah Misi
																		</a>
																	</div>
																	<!--end::Form group-->
																</div>
																</div>
															</div>
																
															<button id="kt_docs_formvalidation_submit" type="submit" class="btn btn-primary float-end">
																<span class="indicator-label">
																	Simpan Perubahan
																</span>
																<span class="indicator-progress">
																	Harap menunggu... <span
																		class="spinner-border spinner-border-sm align-middle ms-2"></span>
																</span>
															</button>
														</form>
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