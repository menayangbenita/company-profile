<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!-- Toolbar -->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Dokumentasi Ekstrakurikuler</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">Kesiswaan</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">Dokumentasi Ekstrakurikuler</li>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Tulis tentang Dokumentasi
										Ekstrakurikuler</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form action="">
									<div class="row" data-bs-theme="light">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="document-editor__toolbar"></div>
                                                </div>
                                                <div class="row row-editor">
                                                    <div class="editor-container">
                                                        <textarea class="editor" name="isi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
								</div>
							</div>
							<div class="card-footer">
								<button class="btn btn-primary float-end">Simpan Perubahan</button>
								</form>
							</div>
						</div>
						<div class="card mb-5 mb-xl-10">
							<div class="card-header pt-2 mb-5">
								<div class="card-title d-flex flex-column">
									<div class="card-title d-flex flex-column">
										<span class="text-uppercase fw-bold pb-0 fs-3">Unggah Gambar dokumentasi
											eksrakurikuler</span>
									</div>
								</div>
								<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
									<button class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#modalTambah">
										<i class="ki-duotone ki-plus fs-2"></i>Gambar baru</button>
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
													<th class="pe-3">Gambar</th>
													<th class="pe-3 text-center">Aksi</th>
												</tr>
											</thead>
											<tbody class="fw-semibold text-gray-700">
												<?php foreach ($data['dokum'] as $dokum): ?>
													<tr>
														<td style="display: none;">
															<span class="dokum-id">
																<?= $dokum['id']; ?>
															</span>
														</td>
														<td class="text-center">
															<div class="d-flex align-items-center">
																<div class="">
																	<!--begin::Overlay-->
																	<a class="d-block overlay"
																		data-fslightbox="lightbox-basic"
																		href="<?= BASEURL; ?>img/datafoto/<?= $dokum['foto']; ?>">
																		<!--begin::Image-->
																		<div class="symbol symbol-50px">
																			<img
																				src="<?= BASEURL; ?>img/datafoto/<?= $dokum['foto']; ?>">
																		</div>
																		<!--end::Image-->

																		<!--begin::Action-->
																		<div
																			class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
																			<i class="bi bi-eye-fill text-white"></i>
																		</div>
																		<!--end::Action-->
																	</a>
																	<!--end::Overlay-->
																</div>
															</div>
														</td>
														<td class="text-center text-nowrap">
															<a href="<?= BASEURL; ?>EkstrakurikulerDokumentasi/ubah/<?= $dokum['id'] ?>"
																data-id="<?= $dokum['id']; ?>" type="button"
																class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-primary btn-outline-primary btn-sm"
																data-bs-toggle="tooltip"
																data-bs-custom-class="tooltip-inverse"
																data-bs-placement="bottom" title="Edit">
																<i class="ki-duotone ki-pencil fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</a>
															<a href="<?= BASEURL; ?>EkstrakurikulerDokumentasi/hapus/<?= $dokum['id'] ?>"
																class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
																data-kt-permissions-table-filter="delete_row"
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
												<?php endforeach ?>
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
					<h5 class="modal-title">Tambah Gambar</h5>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<form id="kt_docs_formvalidation" class="form" action="<?= BASEURL; ?>EkstrakurikulerDokumentasi/tambah"
					method="post" enctype="multipart/form-data" autocomplete="off">
					<div class="modal-body">
						<div class="row mb-3">
							<div class="col-md-12">
								<!--begin::Input group-->
								<div class="row mb-3 fv-row">
									<label for="galeriesktra" class="col-sm-2 col-form-label required">Gambar</label>
									<div class="col-sm-10">
										<input type="file" class="form-control" accept=".jpeg , .jpg, .png"
											id="galeriesktra" name="foto">
										<div class="form-text">Inputkan file dengan jenis .jpg .png</div>
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