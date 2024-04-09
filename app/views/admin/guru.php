<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!-- Toolbar -->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Guru
					</h1>
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
								<div class="card-toolbar flex-row-fluid justify-content-end gap-5 tombolTambahData">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#modaltambah">
										Tambah Data Guru
									</button>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<!--begin::Table-->
									<div class="table-responsive">
										<table class="table table-bordered align-middle" id="table">
											<thead class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
												<tr>
													<th class="pe-3" style="display: none;">ID</th>
													<th class="pe-3">Nama</th>
													<th class="pe-3">NIP</th>
													<th class="pe-3">Status</th>
													<th class="pe-3">Mapel</th>
													<th class="pe-3 text-center">Aksi</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-700">
												<?php foreach ($data['guru'] as $guru): ?>
													<tr>
														<td style="display: none;">
															<span class="guru-id">
																<?= $guru['id']; ?>
															</span>
														</td>
														<td>
															<?= $guru['nama'] ?>
														</td>
														<td>
															<?= $guru['nip'] ?>
														</td>
														<td>
															<?= $guru['status'] ?>
														</td>
														<td>
															<?= $guru['mata_pelajaran'] ?>
														</td>
														<td class="text-center text-nowrap">
															<a href="<?= BASEURL; ?>AdminGuru/ubah/<?= $guru['id'] ?>"
																data-id="<?= $guru['id']; ?>"
																class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbah"
																type="button" class="btn btn-primary" data-bs-toggle="modal"
																data-bs-target="#modaltambah">
																<i class="ki-duotone ki-pencil fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</a>
															<a href="<?= BASEURL; ?>AdminGuru/hapus/<?= $guru['id'] ?>"
																class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
																data-bs-toggle="tooltip"
																data-bs-custom-class="tooltip-inverse"
																data-bs-placement="bottom" title="Hapus"
																data-kt-permissions-table-filter="delete_row">
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

	<!--begin::Modal-->
	<div class="modal fade" tabindex="-1" id="modaltambah">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= BASEURL; ?>AdminGuru/tambah" method="post">
					<input type="hidden" name="id" id="id">
					<div class="modal-header">
						<h5 class="modal-title" id="modalLabel">TAMBAH DATA KEPALA SEKOLAH PENDAHULU</h5>
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
									class="path2"></span></i>
						</div>
						<!--end::Close-->
					</div>

					<div class="modal-body">
						<div class="row mb-5 fv-row">
							<label for="namaGuru" class="col-sm-3 col-form-label required">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="nama" name="nama"
									placeholder="Drs. Burhanudin">
							</div>
						</div>
						<div class="row mb-5 fv-row">
							<label for="NIP" class="col-sm-3 col-form-label required">NIP</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="nip" name="nip"
									placeholder="196012011983031019">
							</div>
						</div>
						<div class="row mb-5 fv-row">
							<label for="status" class="col-sm-3 col-form-label required">Status</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="status" name="status" placeholder="PNS">
							</div>
						</div>
						<div class="row mb-5 fv-row">
							<label for="mapel" class="col-sm-3 col-form-label required">Mata Pelajaran</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran"
									placeholder="Simdig & PKK">
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>


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
	<script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/build/ckeditor.js"></script>


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
				const item = row.find('td:eq(1)').text();
				const itemId = row.find('td:eq(0)').text();

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
						const deleteUrl = "<?= BASEURL; ?>AdminGuru/hapus/" + itemId;
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
			console.log(BASEURL)
			$('.tombolTambahData').on('click', function () {
				$('#modalLabel').html('TAMBAH DATA GURU')
				$('.modal-footer button[type=submit]').html('Tambah Data');

				$('#nama').val('');
				$('#nip').val('');
				$('#status').val('');
				$('#mata_pelajaran').val('');
				$('#id').val('');

			});

			$(".tampilModalUbah").click(function () {
				$("#modal").addClass("edit");
				$("#modalLabel").html("UBAH DATA GURU");
				$(".modal-footer button[type=submit]").html("Ubah Data");
				$(".modal-content form").attr("action", `${BASEURL}/ubah`);

				const id = $(this).data("id");

				$.ajax({
					url: `${BASEURL}/getUbah`,
					data: { id: id },
					method: "post",
					dataType: "json",
					success: function (data) {
						$('#nama').val(data.nama);
						$('#nip').val(data.nip);
						$('#status').val(data.status);
						$('#mata_pelajaran').val(data.mata_pelajaran);
						$('#id').val(data.id);
					},
				})
			});

		});
	</script>