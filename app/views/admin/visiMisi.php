<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!-- Toolbar -->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Visi
						Misi</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">ASTA ARKANANTA K8</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">Visi Misi</li>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Visi & Misi</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form id="kt_docs_formvalidation" class="form"
										action="<?= BASEURL; ?>AdminVisiMisi/tambah" method="post" autocomplete="off">
										<div class="row mb-5 fv-row">
											<label for="visi" class="col-sm-2 col-form-label">Visi</label>
											<div class="col-sm-10">
												<textarea name="isi_visi" id="isi_visi" class="form-control"
													data-kt-autosize="true"
													placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, adipisci voluptates vitae doloribus placeat dolores nisi culpa corporis. Ad, quos?"></textarea>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label class="col-form-label col-md-2">Misi</label>
											<div class="col-sm-10">
												<div id="kt_docs_repeater_basic">
													<div class="form-group">
														<div data-repeater-list="kt_docs_repeater_basic">
															<div data-repeater-item>
																<div class="form-group row">
																	<div class="col-9 col-md-10">
																		<input type="text" id="isi_misi"
																			class="form-control mb-2" name="isi_misi"
																			placeholder="Ketik misi...." value="" />
																	</div>
																	<div class="col-3 col-md-2">
																		<a href="javascript:;" data-repeater-delete
																			class="btn btn-outline btn-outline-danger btn-active-light-danger btn-sm mtb-2">
																			<i class="ki-duotone ki-trash fs-5"><span
																					class="path1"></span><span
																					class="path2"></span><span
																					class="path3"></span><span
																					class="path4"></span><span
																					class="path5"></span></i>
																			Hapus
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--begin::Form group-->
													<div class="form-group mt-5">
														<a href="javascript:;" data-repeater-create
															class="btn btn btn-outline btn-outline-primary btn-active-light-primary btn-sm">
															<i class="ki-duotone ki-plus fs-3"></i>
															Tambah Misi
														</a>
													</div>
													<!--end::Form group-->
												</div>
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

	<!--begin::Javascript-->
	<script>var hostUrl = "<?= BASEURL; ?>admin/";</script>
		<!--Global Javascript Bundle(mandatory for all pages)-->
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
		$('#kt_docs_repeater_basic').repeater({
			initEmpty: false,

			defaultValues: {
				'text-input': 'foo'
			},

			show: function () {
				$(this).slideDown();
			},

			hide: function (deleteElement) {
				$(this).slideUp(deleteElement);
			}
		});
	</script>

	<script>
		document.getElementById('kt_docs_formvalidation_submit').addEventListener('click', function () {
			var misi = document.getElementById('isi_misi').value;

			var data = {
				misi: misi
			};

			var xhr = new XMLHttpRequest();
			xhr.open('POST', '<?= BASEURL; ?>AdminVisiMisi/tambah', true);
			xhr.setRequestHeader('Content-Type', 'application/json');
			xhr.onreadystatechange = function () {
				if (xhr.readyState === XMLHttpRequest.DONE) {
					if (xhr.status === 200) {
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
					} else {
						alert('Terjadi kesalahan saat menyimpan data.');
					}
					document.getElementById('kt_docs_formvalidation_submit').disabled = false;
					document.querySelector('.indicator-progress').style.display = 'none';
					document.querySelector('.indicator-label').style.display = 'inline';
				}
			};
			xhr.send(JSON.stringify(data));
		});
	</script>

	<!--end::Javascript-->