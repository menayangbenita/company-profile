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
						Elektronik Industri</h1>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Keterangan</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form id="kt_docs_formvalidation" class="form"
										action="<?= BASEURL; ?>AdminElektronikIndustri/tambah" method="post" autocomplete="off">
										<div class="row mb-5 fv-row">
											<label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
											<div class="col-sm-10">
												<textarea name="keterangan" id="keterangan" class="form-control"
													data-kt-autosize="true"
													placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, adipisci voluptates vitae doloribus placeat dolores nisi culpa corporis. Ad, quos?"></textarea>
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
						<div class="card mb-5 mb-xl-10">
							<div class="card-header pt-2 mb-5">
								<div class="card-title d-flex flex-column">
									<div class="card-title d-flex flex-column">
										<span class="text-uppercase fw-bold pb-0 fs-3">Kelola Dasar Program
											Keahlian</span>
									</div>
								</div>
								<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
									<button class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#modalTambahDpk">
										<i class="ki-duotone ki-plus fs-2"></i>Dasar Program Keahlian baru</button>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<!--begin::Table-->
									<div class="table-responsive">
										<table class="table table-bordered align-middle" id="table">
											<thead class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
												<tr>
													<th class="pe-3">No.</th>
													<th class="pe-3" style="display: none;">No.</th>
													<th class="pe-3">Dasar Program Keahlian</th>
													<th class="pe-3 text-center">Aksi</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-700">
												<?php $i = 1 ?>
												<?php foreach ($data['dpk'] as $dpk): ?>
													<tr>
														<td>
															<?= $i++ ?>
														</td>
														<td style="display: none;">
															<span class="dpk-id">
																<?= $dpk['id']; ?>
															</span>
														</td>
														<td>
															<?= $dpk['dpk']; ?>
														</td>
														<td class="text-center text-nowrap">
															<a href="<?= BASEURL; ?>AdminElektronikIndustri/ubahDpk/<?= $dpk['id'] ?>"
																data-id="<?= $dpk['id']; ?>"
																class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbah"
																type="button" class="btn btn-primary" data-bs-toggle="modal"
																data-bs-target="#modalTambahDpk">
																<i class="ki-duotone ki-pencil fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</a>
															<a href="<?= BASEURL; ?>AdminElektronikIndustri/hapusDpk/<?= $dpk['id'] ?>"
																class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
																data-bs-toggle="tooltip" data-bs-placement="bottom"
																title="Hapus">
																<i class="ki-duotone ki-trash fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</a>
														</td>
													</tr>
												<?php endforeach; ?>
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
										<span class="text-uppercase fw-bold pb-0 fs-3">Kelola Kompetensi Keahlian
											Keahlian</span>
									</div>
								</div>
								<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
									<button class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#modalTambah">
										<i class="ki-duotone ki-plus fs-2"></i>Kompetensi Keahlian baru</button>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<!--begin::Table-->
									<div class="table-responsive">
										<table class="table table-bordered align-middle" id="table">
											<thead class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
												<tr>
													<th class="pe-3">No.</th>
													<th class="pe-3" style="display: none;">No.</th>
													<th class="pe-3">Kompetensi Keahlian</th>
													<th class="pe-3 text-center">Aksi</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-700">
												<?php $i = 1 ?>
												<?php foreach ($data['kk'] as $kk): ?>
													<tr>
														<td>
															<?= $i++ ?>
														</td>
														<td style="display: none;">
															<span class="kk-id">
																<?= $kk['id']; ?>
															</span>
														</td>
														<td>
															<?= $kk['kk']; ?>
														</td>
														<td class="text-center text-nowrap">
															<a href="<?= BASEURL; ?>AdminElektronikIndustri/ubahKk/<?= $kk['id'] ?>"
																data-id="<?= $kk['id']; ?>"
																class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbahh"
																type="button" class="btn btn-primary" data-bs-toggle="modal"
																data-bs-target="#modalTambah">
																<i class="ki-duotone ki-pencil fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</a>
															<a href="<?= BASEURL; ?>AdminElektronikIndustri/hapusKk/<?= $kk['id'] ?>"
																class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
																data-bs-toggle="tooltip" data-bs-placement="bottom"
																title="Hapus">
																<i class="ki-duotone ki-trash fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</a>
														</td>
													</tr>
												<?php endforeach; ?>
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

	<!--modal-->
	<div class="modal fade" tabindex="-1" id="modalTambah">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabelSarpras">TAMBAH DATA KOMPETENSI KEAHLIAN</h5>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<form id="kt_docs_formvalidation" class="form" action="<?= BASEURL; ?>AdminElektronikIndustri/tambahKk"
					method="post" autocomplete="off">
					<input type="hidden" name="id" id="id">
					<div class="modal-body">
						<div class="row mb-3">
							<div class="col-md-12">
								<!--begin::Input group-->
								<div class="row mb-3 fv-row">
									<label for="galeriesktra" class="col-sm-2 col-form-label required">Kompetensi
										Keahlian</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="kk" name="kk">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button id="kt_docs_formvalidation_submit" type="submit" class="btn btn-primary">
							<span class="indicator-label">
								Tambah
							</span>
							<span class="indicator-progress">
								Harap menunggu... <span
									class="spinner-border spinner-border-sm align-middle ms-2"></span>
							</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--modal end-->

	<!--modal-->
	<div class="modal fade" tabindex="-1" id="modalTambahDpk">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabelSarpras">TAMBAH DATA DASAR PROGRAM KEAHLIAN</h5>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<form id="kt_docs_formvalidation" class="form" action="<?= BASEURL; ?>AdminElektronikIndustri/tambahDpk"
					method="post" autocomplete="off">
					<input type="hidden" name="id" id="idd">
					<div class="modal-body">
						<div class="row mb-3">
							<div class="col-md-12">
								<!--begin::Input group-->
								<div class="row mb-3 fv-row">
									<label for="galeriesktra" class="col-sm-2 col-form-label required">Dasar Program
										Keahlian</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="dpk" name="dpk">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button id="kt_docs_formvalidation_submit" type="submit" class="btn btn-primary">
							<span class="indicator-label">
								Tambah
							</span>
							<span class="indicator-progress">
								Harap menunggu... <span
									class="spinner-border spinner-border-sm align-middle ms-2"></span>
							</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--modal end-->


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
	<script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/build\ckeditor.js"></script>


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
		$(document).ready(function () {
			$('[data-kt-permissions-table-filter="delete_row"]').on('click', function (e) {
				e.preventDefault();
				const link = $(this).attr('href');
				const row = $(this).closest('tr');
				const item = row.find('td:eq(2)').text();
				const itemId = row.find('td:eq(1)').text();

				Swal.fire({
					text: "Apakah Anda yakin untuk menghapus data " + item + "?",
					icon: "warning",
					showCancelButton: true,
					buttonsStyling: false,
					confirmButtonText: "Ya, hapus!",
					cancelButtonText: "Batalkan",
					customClass: {
						confirmButton: "btn fw-bold btn-danger",
						cancelButton: "btn fw-bold btn-active-light-primary"
					}
				}).then((result) => {
					if (result.value) {
						const deleteUrl = "<?= BASEURL; ?>AdminVisiMisi/hapusMisi/" + itemId;
						window.location.href = deleteUrl;
					} else if (result.dismiss === "cancel") {
						Swal.fire({
							text: "Data tidak dihapus.",
							icon: "error",
							buttonsStyling: false,
							showConfirmButton: false,
							timer: 900,
							customClass: {
								confirmButton: "btn fw-bold btn-primary"
							}
						});
					}
				});
			});
		});
	</script>

	<script>
		$(document).ready(function () {
			const BASEURL = window.location.href;
			$('.tombolTambahData').on('click', function () {
				$('#modalLabelSarpras').html('TAMBAH DATA DASAR PROGRAM KEAHLIAN')
				$('.modal-footer button[type=submit]').html('Tambah Data');

				$('#dpk').val('');
				$('#id').val('');

			});

			$(".tampilModalUbah").click(function () {
				$("#modal").addClass("edit");
				$("#modalLabelSarpras").html("UBAH DATA DASAR PROGRAM KEAHLIAN");
				$(".modal-footer button[type=submit]").html("Ubah Data");
				$(".modal-content form").attr("action", `${BASEURL}/ubahDpk`);

				const id = $(this).data("id");

				$.ajax({
					url: `${BASEURL}/getUbahDpk`,
					data: { id: id },
					method: "post",
					dataType: "json",
					success: function (data) {
						$('#dpk').val(data.dpk);
						$('#idd').val(data.id);
					},
				})
			});

		});
	</script>

	<script>
		$(document).ready(function () {
			const BASEURL = window.location.href;
			$('.tombolTambahData').on('click', function () {
				$('#modalLabelKk').html('TAMBAH DATA KOMPETENSI KEAHLIAN')
				$('.modal-footer button[type=submit]').html('Tambah Data');

				$('#kk').val('');
				$('#id').val('');

			});

			$(".tampilModalUbahh").click(function () {
				$("#modal").addClass("edit");
				$("#modalLabelSarpras").html("UBAH DATA KOMPETENSI KEAHLIAN");
				$(".modal-footer button[type=submit]").html("Ubah Data");
				$(".modal-content form").attr("action", `${BASEURL}/ubahKk`);

				const id = $(this).data("id");

				$.ajax({
					url: `${BASEURL}/getUbahKk`,
					data: { id: id },
					method: "post",
					dataType: "json",
					success: function (data) {
						$('#kk').val(data.kk);
						$('#id').val(data.id);
					},
				})
			});

		});
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