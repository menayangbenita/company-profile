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
						Kepala Sekolah</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">ASTA ARKANANTA
								K8</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">Kepala Sekolah</li>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Kepala Sekolah</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form id="kt_docs_formvalidation" class="form"
										action="<?= BASEURL; ?>AdminKepalaSekolah/tambah" method="POST"
										enctype="multipart/form-data" autocomplete="off">
										<div class="row mb-5 fv-row">
											<label for="Nama Kepala Sekolah"
												class="col-sm-2 col-form-label required">Nama</label>
											<div class="col-sm-10">
												<input class="form-control" id="nama" name="nama"
													placeholder="John Doe"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="NIP Kepala Sekolah"
												class="col-sm-2 col-form-label required">NIP</label>
											<div class="col-sm-10">
												<input class="form-control" id="nip" name="nip"
													placeholder="01234567 123456 1 012"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="Tanggal Lahir Kepala Sekolah"
												class="col-sm-2 col-form-label required">Tempat, tanggal lahir</label>
											<div class="col-sm-10">
												<input class="form-control" id="tanggal_lahir" name="tanggal_lahir"
													placeholder="Malang, 01 Januari 1980"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="TMT CPNS Kepala Sekolah"
												class="col-sm-2 col-form-label required">TMT CPNS</label>
											<div class="col-sm-10">
												<input class="form-control" id="tmt_cpns" name="tmt_cpns"
													type="date"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="TMT PNS Kepala Sekolah"
												class="col-sm-2 col-form-label required">TMT PNS</label>
											<div class="col-sm-10">
												<input class="form-control" id="tmt_pns" name="tmt_pns"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="Jabatan Sekarang"
												class="col-sm-2 col-form-label required">Jabatan Sekarang</label>
											<div class="col-sm-10">
												<input class="form-control" id="jabatan_sekarang"
													name="jabatan_sekarang" value="Kepala SMK Negeri 8 Malang"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="Periode Jabatan"
												class="col-sm-2 col-form-label required">Periode</label>
											<div class="col-sm-10">
												<input class="form-control" id="periode" name="periode"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="linkgdrivekepalasekolah"
												class="col-sm-2 col-form-label required">Foto Kepala Sekolah</label>
											<div class="col-sm-10">
												<div class="overlay my-2">
													<img id="selectedImage" class="w-100 card-rounded"
														src="<?= BASEURL; ?>admin/media/stock/1600x800/img-1.jpg"
														alt="" />
													<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
														<input type="file" id="fileInput" name="gambar" accept="image/*"
															style="display: none;" onchange="previewImage(event)">
														<a href="#" class="btn btn-primary"
															onclick="document.getElementById('fileInput').click(); return false;">Unggah
															Foto Kepala Sekolah</a>
													</div>
												</div>
												<div class="form-text">Inputkan file dengan jenis .jpg (Pastikan
													gambar berbentuk persegi panjang)</div>
											</div>
										</div>
								</div>
							</div>
							<div class="card-footer">
								<button class="btn btn-primary float-end">Simpan Perubahan</button>
							</div>
						</div>
						</form>

						<div class="card mb-5 mb-xl-10">
							<div class="card-header pt-2 mb-5">
								<div class="card-title d-flex flex-column">
									<span class="text-uppercase fw-bold pb-0 fs-3">Data Kepala Sekolah Pendahulu</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">

									<!--begin::Table-->
									<div
										class="d-flex justify-content-between align-items-lg-stretch flex-lg-wrap min-w-125px pt-2 mb-5 move-right">
										<!-- Input pencarian -->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											<button type="button" class="btn btn-primary" data-bs-toggle="modal"
												data-bs-target="#modaltambah">
												Tambah
											</button>
										</div>

										<!-- Tombol "Berita baru" -->
										<div class="card-title d-flex flex-column">
											<!-- Begin::Search -->
											<div class="d-flex align-items-center position-relative my-1">
												<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<input type="text" table-search="search"
													class="form-control form-control-solid w-250px ps-12"
													placeholder="Cari..." />
											</div>
											<!-- End::Search -->
										</div>
									</div>

									<div class="table-responsive">
										<table class="table table-bordered align-middle" id="table">
											<thead class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
												<tr>
													<th class="pe-3">Periode</th>
													<th class="pe-3">Nama</th>
													<th class="pe-3">Keterangan</th>
													<th class="pe-3 text-center">Aksi</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-700">
												<?php foreach ($data['kepsek'] as $kepsek): ?>
													<tr>
														<td>
															<?= $kepsek['dari'] ?> -
															<?= $kepsek['sampai'] ?>
														</td>
														<td>
															<?= $kepsek['nama'] ?>
														</td>
														<td class="min-w-125px">
															<?= $kepsek['keterangan'] ?>
														</td>
														<td class="text-center text-nowrap">
															<a href="#"
																class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
																type="button" class="btn btn-primary"
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
				<form action="<?= BASEURL; ?>AdminKepalaSekolah/terdahulu" method="post">
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
							<label for="yearperiode" class="col-sm-3 col-form-label required">Periode</label>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-sm-6">
										<label for="kt_td_picker_linked_1_input" class="form-label">From</label>
										<div class="input-group log-event" id="kt_td_picker_linked_1"
											data-td-target-input="nearest" data-td-target-toggle="nearest">
											<input id="kt_td_picker_linked_1_input" type="text" class="form-control"
												data-td-target="#kt_td_picker_linked_1" name="dari" id="dari"
												value="20" />
											<span class="input-group-text" data-td-target="#kt_td_picker_linked_1"
												data-td-toggle="datetimepicker">
												<i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
														class="path2"></span></i>
											</span>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="kt_td_picker_linked_2_input" class="form-label">To</label>
										<div class="input-group log-event" id="kt_td_picker_linked_2"
											data-td-target-input="nearest" data-td-target-toggle="nearest">
											<input id="kt_td_picker_linked_2_input" type="text" class="form-control"
												data-td-target="#kt_td_picker_linked_2" name="sampai" id="sampai"
												value="20" />
											<span class="input-group-text" data-td-target="#kt_td_picker_linked_2"
												data-td-toggle="datetimepicker">
												<i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span
														class="path2"></span></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mb-5 fv-row">
							<label for="namakepsekpendahulu" class="col-sm-3 col-form-label required">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="nama" name="nama" value="John Doe">
							</div>
						</div>

						<div class="row mb-5 fv-row">
							<label for="ketKepsekPendahulu" class="col-sm-3 col-form-label required">Keterangan</label>
							<div class="col-sm-9">
								<textarea class="form-control" id="keterangan" name="keterangan" rows="4"></textarea>
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
	<!--end::Modal-->

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
	<script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>


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
        e.preventDefault(); // Mencegah aksi default dari link
        const link = $(this).attr('href');
        const row = $(this).closest('tr');
        const itemName = row.find('td:eq(1)').text();

        Swal.fire({
            text: "Apakah Anda yakin untuk menghapus " + itemName + "?",
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
                const deleteUrl = "<?= BASEURL; ?>AdminKepalaSekolah/hapus/<?= $kepsek['id'] ?>";
        		window.location.href = deleteUrl;
            } else if (result.dismiss === "cancel") {
                Swal.fire({
                    text: "Data " + itemName + " tidak dihapus.",
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

	<!--end::Javascript-->
	<script>
		CKEDITOR.replace('kt_docs_ckeditor_classic', {
			extraPlugins: 'imageupload',
			imageUploadUrl: 'img/datafoto',
		});
	</script>

	<script>
		$(document).ready(function () {
			const BASEURL = window.location.href;
			console.log(BASEURL)
			$('.tombolTambahData').on('click', function () {
				$('#modalLabel').html('TAMBAH DATA KEPALA SEKOLAH PENDAHULU')
				$('.modal-footer button[type=submit]').html('Tambah Data');

				$('#kode').val('');
				$('#barang').val('');
				$('#satuan').val('');
				$('#stok').val('');
				$('#harga').val('');
				$('#id').val('');

			});

			$(".tampilModalUbah").click(function () {
				$("#modal").addClass("edit");
				$("#modalLabel").html("UBAH DATA KEPALA SEKOLAH PENDAHULU");
				$(".modal-footer button[type=submit]").html("Ubah Data");
				$(".modal-body form").attr("action", `${BASEURL}/ubah`);

				const id = $(this).data("id");
				console.log(id)

				$.ajax({
					url: `${BASEURL}/getUbah`,
					data: { id: id },
					method: "post",
					dataType: "json",
					success: function (data) {
						$('#dari').val(data.dari);
						$('#sampai').val(data.sampai);
						$('#nama').val(data.nama);
						$('#keterangan').val(data.keterangan);
						$('#id').val(data.id);
						console.log(data);
					},
				})
			});

		});
	</script>