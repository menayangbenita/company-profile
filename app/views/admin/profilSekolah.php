<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!-- Toolbar -->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Profil Sekolah</h1>
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
									<form id="kt_docs_formvalidation" class="form"
										action="<?= BASEURL; ?>AdminProfilSekolah/tambah" method="POST" enctype="multipart/form-data"
										autocomplete="off">
										<div class="row mb-5 fv-row">
											<label for="isi" class="col-sm-2 col-form-label required">Teks</label>
											<div class="col-sm-10">
                                                <div class="row">
                                                    <div class="document-editor__toolbar"></div>
                                                </div>
                                                <div class="row row-editor">
                                                    <div class="editor-container">
                                                        <textarea class="editor" id="isi" name="isi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="linkgdriveorganisasibkk"
												class="col-sm-2 col-form-label required">Link Youtube</label>
											<div class="col-sm-10">
												<div class="input-group">
													<span class="input-group-text"
														id="basic-addon3">https://example.com/users/</span>
													<input type="text" class="form-control" id="video" name="video"
														aria-describedby="basic-addon3" />
												</div>
												<div class="form-text">Inputkan link file dari youtube (pastikan akses
													file sudah dipublik)</div>
											</div>
										</div>

										<div class="row mb-5 fv-row">
											<label for="linkgdriveorganisasibkk"
												class="col-sm-2 col-form-label required">Thumbnail Video</label>
											<div class="col-sm-10">
												<div class="overlay my-2">
													<img id="selectedImage" class="w-100 card-rounded"
														src="<?= BASEURL;?>admin/media/stock/1600x800/img-1.jpg" alt="" />
													<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
														<input type="file" id="fileInput" name="thumbnail"
															accept="image/*" style="display: none;"
															onchange="previewImage(event)">
														<a href="#" class="btn btn-primary"
															onclick="document.getElementById('fileInput').click(); return false;">Upload
															Thumbnail Image</a>
													</div>
												</div>
												<div class="form-text">Inputkan file dengan jenis .jpg (Pastikan
													tumbnail berbentuk persegi panjang)</div>
											</div>
										</div>
										<button id="kt_docs_formvalidation_submit" type="submit"
											class="btn btn-primary float-end">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

	<script src="<?= BASEURL; ?>admin/plugins/global/plugins.bundle.js"></script>
	<script src="<?= BASEURL; ?>admin/js/scripts.bundle.js"></script>

	<!--Vendors Javascript(used for this page only)-->
	<script src="<?= BASEURL; ?>admin/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
	<script src="<?= BASEURL; ?>admin/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/build\ckeditor.js"></script>


	<!--Custom Javascript(used for this page only)-->
	<script src="<?= BASEURL; ?>admin/js/widgets.bundle.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/widgets.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/apps/chat/chat.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/utilities/modals/create-app.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/utilities/modals/new-target.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/utilities/modals/users-search.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/utilities/modals/new-target.js"></script>
	<script src="<?= BASEURL; ?>admin/js/custom/utilities/modals/users-search.js"></script>
	<script src="<?= BASEURL; ?>admin/plugins/custom/formrepeater/formrepeater.bundle.js"></script>

	<script>
		const tambahForm = document.getElementById('kt_docs_formvalidation');
		const tambahValidator = FormValidation.formValidation();

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
							const dataBerhasilDitambahkan = true;

							if (dataBerhasilDitambahkan) {
								submitButton.removeAttribute('data-kt-indicator');
								submitButton.disabled = false;

								Swal.fire({
									text: "BERHASIL!",
									icon: "success",
									showConfirmButton: false,
									timer: 1300
								}).then(function () {
									$(`#${modalId}`).modal('hide');
									tambahForm.submit();
								});
							} else {
								console.log('Gagal menambahkan data!');
							}
						}, 2000);
					}
				});
			}
		}
	</script>
<script>
        ClassicEditor
            .create(document.querySelector('.editor'), {
                ckfinder: {
                    uploadUrl: '<?= BASEURL; ?>admin/plugins/custom/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>
	<!--end::Javascript-->