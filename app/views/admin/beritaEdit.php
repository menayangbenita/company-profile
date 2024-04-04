<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Berita</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Berita</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Edit Berita</li>
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
														<span class="text-uppercase fw-bold pb-0 fs-3">Edit Berita yang sudah dipublikasi</span>
													</div>
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                                        <a class="btn btn-light-primary" href="berita.html">
                                                            <i class="ki-duotone ki-double-left fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            </i>Kembali</a>
                                                    </div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
                                                        <form action="">
                                                            <div class="row mb-5 fv-row">
																<label for="judulberita" class="col-sm-2 col-form-label">Judul Berita</label>
																<div class="col-sm-10">
																	<input type="text" class="form-control" id="judulberita"  name="judulberita"  value="Lorem ipsum dolor">
																</div>
															</div>
															<div class="row mb-5 fv-row">
																<label for="author" class="col-sm-2 col-form-label">Author</label>
																<div class="col-sm-10">
																	<input type="text" class="form-control" id="author"  name="author"  value="Raib">
																</div>
															</div>
                                                            <div class="row py-5" data-bs-theme="light">
																<label for="berita" class="col-sm-2 col-form-label">Berita</label>
																<div class="col-sm-10">
																	<textarea name="kt_docs_ckeditor_classic" id="kt_docs_ckeditor_classic">
																	</textarea>
																</div>
															</div>
															<div class="row mb-5 fv-row">
																<label for="linkgdriveorganisasibkk" class="col-sm-2 col-form-label required">Tumbnail Berita</label>
																<div class="col-sm-10">
																	<div class="overlay my-2">
																		<img id="selectedImage" class="w-100 card-rounded" src="assets/media/stock/1600x800/img-1.jpg" alt="" />
																		<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																			<input type="file" id="fileInput" accept=".jpg" style="display: none;" onchange="previewImage(event)">
																			<a href="#" class="btn btn-primary" onclick="document.getElementById('fileInput').click(); return false;">Upload Thumbnail Berita</a>
																		</div>
																	</div>
																	<div class="form-text">Inputkan file dengan jenis .jpg (Pastikan tumbnail berbentuk persegi panjang)</div>
																</div>
															</div>
													</div>
												</div>
                                                <div class="card-footer">
                                                    <button class="btn btn-primary float-end">Edit Berita</button>
                                                    </form>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->