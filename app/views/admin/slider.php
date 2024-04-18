<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Kelola Slider</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Beranda</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Kelola Slider</li>
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
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                                        <i class="ki-duotone ki-plus fs-2"></i>Slider Baru</button>
                                                    </div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<div class="table-responsive">
                                                            <table class="table table-bordered align-middle"
                                                                id="table">
                                                                <thead  class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
                                                                    <tr>
                                                                        <th class="pe-3">No.</th>
                                                                        <th class="pe-3" style="display: none;">ID</th>
                                                                        <th class="pe-3">Gambar</th>
                                                                        <th class="pe-3 min-w-125px">Sub Judul (Teks Atas)</th>
                                                                        <th class="pe-3">Judul (Teks Tengah)</th>
                                                                        <th class="pe-3  min-w-500px">Konten (Teks Deskripsi)</th>
                                                                        <th class="pe-3">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-700">
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['slider'] as $slider) : ?>
                                                                    <tr>
                                                                        <td><?= $i++ ?></td>
                                                                        <td style="display: none;"><?= $slider['id'] ?></td>
                                                                        <td class="text-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="">
                                                                                    <!--begin::Overlay-->
                                                                                    <a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?= BASEURL ?>img/datafoto/<?= $slider['foto'] ?>">
                                                                                        <!--begin::Image-->
                                                                                        <div class="symbol symbol-50px">
                                                                                            <img src="<?= BASEURL ?>img/datafoto/<?= $slider['foto'] ?>">
                                                                                        </div>
                                                                                        <!--end::Image-->

                                                                                        <!--begin::Action-->
                                                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                                                            <i class="bi bi-eye-fill text-white"></i>
                                                                                        </div>
                                                                                        <!--end::Action-->
                                                                                    </a>
                                                                                    <!--end::Overlay-->
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="min-w-125px"><?= $slider['subjudul'] ?></td>
                                                                        <td><?= $slider['judul'] ?></td>
                                                                        <td class="min-w-500px"><?= $slider['konten'] ?></td>
                                                                        <td class="text-end text-nowrap">
                                                                            <a href="<?= BASEURL; ?>AdminSlider/ubah/<?= $slider['id'] ?>"
                                                                                data-id="<?= $slider['id']; ?>"
                                                                                class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbah"
                                                                                type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                                data-bs-target="#modalTambah">
                                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </a>
                                                                            <a href="<?= BASEURL; ?>AdminSlider/hapus/<?= $slider['id'] ?>"
                                                                                class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
                                                                                data-bs-toggle="tooltip" data-bs-placement="bottom" data-kt-permissions-table-filter="delete_row"
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
			<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalLabel">TAMBAH SLIDER</h5>
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
						</div>
						<!--end::Close-->
					</div>

					<form id="kt_docs_formvalidation" class="form" action="<?= BASEURL ?>AdminSlider/tambah" method="post" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="fotoLama" id="fotoLama">
						<div class="modal-body">
							<div class="row mb-3">
								<div class="col-lg-3 col-12 col-md-12 text-center">
									<!--begin::Input group-->
									<div class="fv-row mb-7">
										<label class="d-block fw-semibold fs-6 mb-5">Gambar</label>
										<!--begin::Image input-->
										<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" id="previewFoto" style="background-image: url('')">
											<div class="image-input-wrapper w-200px h-125px"></div>
											<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Tambahkan gambar">
												<i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
												<!--begin::Inputs-->
												<input type="file" name="foto" id="foto" value="" accept="image/*" />
												<input type="hidden" name="gambar_remove" />
												<!--end::Inputs-->
											</label>
		
											<!--Cancel-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batalkan gambar">
												<i class="ki-outline ki-cross fs-3"></i>
											</span>
		
											<!--Remove-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus gambar">
												<i class="ki-outline ki-cross fs-3"></i>
											</span>
										</div>
										<!--end::Image input-->
										<div class="form-text">Tipe file : png, jpg, jpeg.</div>
										<div class="form-text">(Pastikan gambar berbentuk persegi panjang)</div>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-lg-9 col-12 col-md-12 text-lg-end text-start">
									<div class="row mb-3 fv-row">
										<label for="subjudul" class="col-sm-3 col-form-label required">Sub Judul (Teks Atas)</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="subjudul" name="subjudul" value="" maxlength="50" placeholder="Masukkan subjudul di sini...">
										</div>
									</div>
									<div class="row mb-3 fv-row">
										<label for="judul" class="col-sm-3 col-form-label required">Judul (Teks Tengah)</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="judul" name="judul" value="" maxlength="50" placeholder="Masukkan judul di sini...">
										</div>
									</div>
									<div class="row mb-3 fv-row">
										<label for="konten" class="col-sm-3 col-form-label required">Konten (Teks Bawah)</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="konten" name="konten" value="" maxlength="400" placeholder="Masukkan konten di sini..." rows="6"></textarea>
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
				const item = row.find('td:eq(4)').text();
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
						const deleteUrl = "<?= BASEURL; ?>AdminSlider/hapus/" + itemId;
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
				const id = $(this).data("id");
				$("#modal").addClass("edit");
				$("#modalLabel").html("UBAH DATA SLIDER");
				$(".modal-footer button[type=submit]").html("Ubah Data");
				$(".modal-content form").attr("action", `${BASEURL}/ubah`);

				$.ajax({
					url: `${BASEURL}/getUbah`,
					data: { id: id },
					method: "post",
					dataType: "json",
					success: function (data) {
                        $('#previewFoto').css('background-image', `url('<?= BASEURL ?>img/datafoto/${data.foto}')`);
						$('#fotoLama').val(data.foto);
						$('#subjudul').val(data.subjudul);
						$('#judul').val(data.judul);
						$('#konten').val(data.konten);
						$('#id').val(data.id);
					},
				})
			});

		});
	</script>