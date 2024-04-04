<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Profil Sekolah</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">ASTA ARKANANTA K8</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Profil Sekolah</li>
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
														<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Profil Sekolah</span>
													</div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<form id="kt_docs_formvalidation" class="form" action="#" autocomplete="off">
															<div class="row mb-5 fv-row">
																<label for="teksstrukturbkk" class="col-sm-2 col-form-label required">Teks</label>
																<div class="col-sm-10">
																	<textarea class="form-control" id="teksstrukturbkk" name="teksstrukturbkk" rows="5">Lorem ipsum dolor sit amet consectetur, adipisicing elit </textarea>
																</div>
															</div>
															<div class="row mb-5 fv-row">
																<label for="linkgdriveorganisasibkk" class="col-sm-2 col-form-label required">Link Youtube</label>
																<div class="col-sm-10">
																	<div class="input-group">
																		<span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
																		<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"/>
																	</div>
																	<div class="form-text">Inputkan link file dari youtube (pastikan akses file sudah dipublik)</div>
																</div>
																
															</div>
															
															<div class="row mb-5 fv-row">
																<label for="linkgdriveorganisasibkk" class="col-sm-2 col-form-label required">Tumbnail Video</label>
																<div class="col-sm-10">
																	<div class="overlay my-2">
																		<img id="selectedImage" class="w-100 card-rounded" src="assets/media/stock/1600x800/img-1.jpg" alt="" />
																		<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																			<input type="file" id="fileInput" accept=".jpg" style="display: none;" onchange="previewImage(event)">
																			<a href="#" class="btn btn-primary" onclick="document.getElementById('fileInput').click(); return false;">Upload Thumbnail Image</a>
																		</div>
																	</div>
																	<div class="form-text">Inputkan file dengan jenis .jpg (Pastikan tumbnail berbentuk persegi panjang)</div>
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
		<script>
			function previewImage(event) {
				var reader = new FileReader();
				reader.onload = function() {
					var output = document.getElementById('selectedImage');
					output.src = reader.result;
				}
				reader.readAsDataURL(event.target.files[0]);
			}
		</script>

		<!--end::Javascript-->