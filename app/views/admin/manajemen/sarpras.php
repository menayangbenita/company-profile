<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!-- Toolbar -->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Waka
                        Sarpras</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Manajemen</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Waka Sarpras</li>
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
                                    <span class="text-uppercase fw-bold pb-0 fs-3">Tulis tentang Waka Sarana &
                                        Prasarana</span>
                                </div>
                            </div>
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <form id="kt_docs_formvalidation" class="form"
                                        action="<?= BASEURL; ?>ManajemenSarpras/tambah" method="post"
                                        enctype="multipart/form-data" autocomplete="off">
                                        <div class="row mb-5 fv-row">
                                            <label for="Nama Kepala Sekolah"
                                                class="col-sm-2 col-form-label required">Nama</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="nama" placeholder="John Doe"></input>
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="Nama Kepala Sekolah"
                                                class="col-sm-2 col-form-label required">Foto</label>
                                            <div class="col-sm-10">
                                                <div class="overlay my-2">
                                                    <img id="selectedImage" class="w-100 card-rounded"
                                                        src="<?= BASEURL; ?>admin/media/stock/1600x800/img-1.jpg"
                                                        alt="" />
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <input type="file" id="fileInput" name="foto" accept="image/*"
                                                            style="display: none;" onchange="previewImage(event)">
                                                        <a href="#" class="btn btn-primary"
                                                            onclick="document.getElementById('fileInput').click(); return false;">Unggah
                                                            Foto Waka Humas</a>
                                                    </div>
                                                </div>
                                                <div class="form-text">Inputkan file dengan jenis .jpg (Pastikan
                                                    gambar berbentuk persegi panjang)</div>
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="Nama Kepala Sekolah"
                                                class="col-sm-2 col-form-label required">Isi</label>
                                            <div class="col-sm-10">
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

                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button id="kt_docs_formvalidation_submit" type="submit"
                                    class="btn btn-primary ms-auto mb-0">
                                    <span class="indicator-label">
                                        Simpan Perubahan
                                    </span>
                                    <span class="indicator-progress">
                                        Harap menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>

                            </form>
                        </div>
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header pt-2 mb-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="card-title d-flex flex-column">
                                        <span class="text-uppercase fw-bold pb-0 fs-3">Data Sarana & Prasarana</span>
                                    </div>
                                </div>
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalTambahdata">
                                        <i class="ki-duotone ki-plus fs-2"></i>Tambah</button>
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
                                                    <th class="pe-3">Nama Fasilitas</th>
                                                    <th class="pe-3">Jumlah</th>
                                                    <th class="pe-3">Keterangan</th>
                                                    <th class="pe-3 text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-700">
                                                <?php foreach ($data['sarpras'] as $sarpras) : ?>
                                                <tr>
                                                    <td style="display: none;">
                                                        <span class="sarpras-id">
                                                            <?= $sarpras['id']; ?>
                                                        </span>
                                                    </td>
                                                    <td><?= $sarpras['nama']; ?></td>
                                                    <td><?= $sarpras['jumlah']; ?></td>
                                                    <td><?= $sarpras['keterangan']; ?></td>
                                                    <td class="text-center text-nowrap">
                                                        <a href="<?= BASEURL; ?>ManajemenSarpras/ubahSarpras/<?= $sarpras['id'] ?>"
                                                            data-id="<?= $sarpras['id']; ?>"
                                                            class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbah"
                                                            type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#modalTambahdata">
                                                            <i class="ki-duotone ki-pencil fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="<?= BASEURL; ?>ManajemenSarpras/hapusSarpras/<?= $sarpras['id'] ?>"
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
                        <div class="card mb-5 mb-xl-10">
                            <div class="card-header pt-2 mb-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="card-title d-flex flex-column">
                                        <span class="text-uppercase fw-bold pb-0 fs-3">Unggah Gambar dokumentasi
                                            sarpras</span>
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
                                                    <th class="pe-3" style="display: none;">No.</th>
                                                    <th class="pe-3">Gambar</th>
                                                    <th class="pe-3 text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-700">
                                            <?php foreach ($data['galeri'] as $galeri) : ?>
                                                <tr>
                                                    <td style="display: none;">
                                                        <span class="galeri-id">
                                                            <?= $galeri['id']; ?>
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <!--begin::Overlay-->
                                                                <a class="d-block overlay"
                                                                    data-fslightbox="lightbox-basic"
                                                                    href="<?= BASEURL; ?>img/datafoto/<?= $galeri['foto']; ?>">
                                                                    <!--begin::Image-->
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="<?= BASEURL; ?>img/datafoto/<?= $galeri['foto']; ?>">
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
                                                        <a href="<?= BASEURL; ?>ManajemenSarpras/hapusGaleri/<?= $galeri['id'] ?>"
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
                <h5 class="modal-title">TAMBAH DATA DOKUMENTASI SARPRAS</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <form id="kt_docs_formvalidation" class="form" action="<?= BASEURL; ?>ManajemenSarpras/tambahGaleri" method="post" enctype="multipart/form-data" autocomplete="off">
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
                            Harap menunggu... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--modal end-->

        <!--modal-->
		<div class="modal fade" tabindex="-1" id="modalTambahdata">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalLabelSarpras">TAMBAH DATA SARANA & PRASARANA</h5>
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
						</div>
						<!--end::Close-->
					</div>

					<form id="kt_docs_formvalidation" class="form" action="<?= BASEURL; ?>ManajemenSarpras/tambahSarpras" method="post" autocomplete="off">
                    <input type="hidden" name="id" id="id">
						<div class="modal-body">
							<div class="row mb-3">
								<div class="col-md-12">
									<!--begin::Input group-->
									<div class="row mb-5 fv-row">
										<label for="namaFasilitas" class="col-sm-4 col-form-label required">Nama Fasilitas</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="namaa" name="nama" placeholder="Ruang Teori">
										</div>
									</div>
									<div class="row mb-5 fv-row">
										<label for="jumlahFasilitas" class="col-sm-4 col-form-label required">Jumlah</label>
										<div class="col-sm-8">
											<input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="36">
										</div>
									</div>
									<div class="row mb-5 fv-row">
										<label for="keteranganFasilitas" class="col-sm-4 col-form-label required">Keterangan</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="-">
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
                    const deleteUrl = "<?= BASEURL; ?>ManajemenSarpras/hapusSarpras/" + itemId;
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
            $('#modalLabelSarpras').html('TAMBAH DATA SARANA & PRASARANA')
            $('.modal-footer button[type=submit]').html('Tambah Data');

            $('#namaa').val('');
            $('#jumlah').val('');
            $('#keterangan').val('');
            $('#id').val('');

        });

        $(".tampilModalUbah").click(function () {
            $("#modal").addClass("edit");
            $("#modalLabelSarpras").html("UBAH DATA SARANA & PRASARANA");
            $(".modal-footer button[type=submit]").html("Ubah Data");
            $(".modal-content form").attr("action", `${BASEURL}/ubahSarpras`);

            const id = $(this).data("id");

            $.ajax({
                url: `${BASEURL}/getUbahSarpras`,
                data: { id: id },
                method: "post",
                dataType: "json",
                success: function (data) {
                    $('#namaa').val(data.nama);
                    $('#jumlah').val(data.jumlah);
                    $('#keterangan').val(data.keterangan);
                    $('#id').val(data.id);
                    console.log(data);
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