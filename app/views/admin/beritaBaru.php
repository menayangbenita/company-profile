<!--begin::Main-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!-- Toolbar -->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Buat
                        Berita</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Berita</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Buat Berita</li>
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
                                    <span class="text-uppercase fw-bold pb-0 fs-3">Tulis Berita Baru</span>
                                </div>
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <a class="btn btn-light-primary" href="<?= BASEURL; ?>AdminBerita">
                                        <i class="ki-duotone ki-double-left fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Kembali</a>
                                </div>
                            </div>
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <form action="<?= BASEURL; ?>BeritaBaru/tambah" method="post"
                                        enctype="multipart/form-data">
                                        <div class="row mb-5 fv-row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="judul" name="judul"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="author" name="author"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="tanggal_publikasi" class="col-sm-2 col-form-label">Tanggal
                                                Publikasi</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggal_publikasi"
                                                    name="tanggal_publikasi" value="">
                                            </div>
                                        </div>
                                        <div class="row py-5 fv-row" data-bs-theme="light">
                                            <label for="berita" class="col-sm-2 col-form-label">Berita</label>
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
                                        <div class="row mb-5 fv-row">
                                            <label for="linkgdriveorganisasibkk"
                                                class="col-sm-2 col-form-label required">Tumbnail Berita</label>
                                            <div class="col-sm-10">
                                                <div class="overlay my-2">
                                                    <img id="selectedImage" class="w-100 card-rounded"
                                                        src="<?= BASEURL; ?>admin/media/stock/1600x800/img-1.jpg"
                                                        alt="" />
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <input type="file" id="fileInput" name="foto" accept=".jpg"
                                                            style="display: none;" onchange="previewImage(event)">
                                                        <a href="#" class="btn btn-primary"
                                                            onclick="document.getElementById('fileInput').click(); return false;">Upload
                                                            Thumbnail Berita</a>
                                                    </div>
                                                </div>
                                                <div class="form-text">Inputkan file dengan jenis .jpg (Pastikan
                                                    tumbnail berbentuk persegi panjang)</div>
                                            </div>
                                        </div>




                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary float-end">Publikasi Berita</button>
                                </form>
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
                                    $(#${modalId}).modal('hide');
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
                        const deleteUrl = "<?= BASEURL; ?>AdminOrganisasi/hapusIndus/" + itemId;
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
                $('#modalLabelIndus').html('TAMBAH DATA INDUSTRI YANG TELAH BEKERJA SAMA')
                $('.modal-footer button[type=submit]').html('Tambah Data');

                $('#namaa').val('');
                $('#foto').val('');
                $('#id').val('');

            });

            $(".tampilModalUbah").click(function () {
                $("#modal").addClass("edit");
                $("#modalLabelIndus").html("UBAH DATA INDUSTRI YANG TELAH BEKERJA SAMA");
                $(".modal-footer button[type=submit]").html("Ubah Data");
                $(".modal-content form").attr("action", ${BASEURL}/ubahIndus);

                const id = $(this).data("id");

                $.ajax({
                    url: ${BASEURL}/getUbahIndus,
                    data: { id: id },
                    method: "post",
                    dataType: "json",
                    success: function (data) {
                        $('#namaa').val(data.nama);
                        $('#fotoLama').val(data.foto);
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