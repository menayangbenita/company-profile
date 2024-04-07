<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Industri Pasangan</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">BKK</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Industri Pasangan</li>
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
														<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Industri Pasangan</span>
													</div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<form id="kt_docs_formvalidation" class="form" method="post"
										action="<?= BASEURL; ?>BkkindustriPasangan/tambah" autocomplete="off">
															<div class="row mb-5 fv-row">
																<label for="isi" class="col-sm-2 col-form-label required">Teks</label>
																<div class="col-sm-10">
																	<input type="text" class="form-control" id="isi"  name="isi"  placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit :">
																</div>
															</div>
															<div class="row mb-5 fv-row">
																<label for="link" class="col-sm-2 col-form-label required">Link Google Drive</label>
																<div class="col-sm-10">
																	<input type="url" class="form-control" id="link" name="link" placeholder="Sed vestibulum ante quis justo accumsan, vel congue justo vehicula">
																	<div class="form-text">Inputkan link file dari google drive (pastikan akses file sudah dipublik)</div>
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

                        <script>
            const tambahForm = document.getElementById('kt_docs_formvalidation');
            const tambahValidator = FormValidation.formValidation();
        
            // Submit button handler
            const tambahSubmitButton = document.getElementById('kt_docs_formvalidation_submit');
            tambahSubmitButton.addEventListener('click', function (e) {
                e.preventDefault();
        
                handleFormSubmission(tambahValidator, tambahSubmitButton, 'modalTambah');
            });
        
            function handleFormSubmission(validator, submitButton, modalId) {
                if (validator) {
                    validator.validate().then(function (status) {
                        console.log('validated!');
        
                        if (status == 'Valid') {
                            submitButton.setAttribute('data-kt-indicator', 'on');
                            submitButton.disabled = true;
        
                            setTimeout(function () {
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
        
                                Swal.fire({
                                    text: "BERHASIL!",
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer: 1300
                                }).then(function () {
                                    $(`#${modalId}`).modal('hide');
                                });
                            }, 2000);
                        }
                    });
                }
            }
        </script>

		<!--end::Javascript-->