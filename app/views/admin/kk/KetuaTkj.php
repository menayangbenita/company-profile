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
						Ketua Jurusan</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">ASTA ARKANANTA
								K8</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">Ketua Jurusan TKJ</li>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Ketua Jurusan TKJ</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form id="kt_docs_formvalidation" class="form"
										action="<?= BASEURL; ?>AdminKetuaTkj/tambah" method="POST"
										enctype="multipart/form-data" autocomplete="off">
										<div class="row mb-5 fv-row">
											<label for="Nama Ketua Jurusan"
												class="col-sm-2 col-form-label required">Nama</label>
											<div class="col-sm-10">
												<input class="form-control" id="nama" name="nama"
													placeholder="John Doe"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="NIP Ketua Jurusan"
												class="col-sm-2 col-form-label required">NIP</label>
											<div class="col-sm-10">
												<input class="form-control" id="nip" name="nip"
													placeholder="01234567 123456 1 012"></input>
											</div>
										</div>
										<div class="row mb-5 fv-row">
											<label for="Tanggal Lahir Ketua Jurusan"
												class="col-sm-2 col-form-label required">Jabatan</label>
											<div class="col-sm-10">
												<input class="form-control" id="jabatan" name="jabatan"
													placeholder="Ketua Jurusan Tkj"></input>
											</div>
										</div>
									
		
										<div class="row mb-5 fv-row">
											<label for="linkgdrivekepalasekolah"
												class="col-sm-2 col-form-label required">Foto Ketua Jurusan</label>
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
															Foto Ketua Jurusan</a>
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

				
					</div>
				</div>
			</div>
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->

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
                const deleteUrl = "<?= BASEURL; ?>AdminKetuaTkj/hapus/<?= $KetuaMeka['id'] ?>";
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