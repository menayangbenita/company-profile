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
                        Ubah Profil</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Kelola User</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Ubah Profil</li>
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
                                    <span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Profil</span>
                                </div>
                            </div>
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <form id="kt_docs_formvalidation" class="form"
                                        action="<?= BASEURL; ?>ubahProfil/update" method="POST" autocomplete="off">
                                        <input type="hidden" value="<?= $data['user']['id']; ?>" name="id">
                                        <div class="row mb-5 fv-row" data-kt-password-meter="true">
                                            <label for="Tanggal Lahir Kepala Sekolah"
                                                class="col-sm-2 col-form-label required">Kata Sandi Lama</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" name="old_password"
                                                    placeholder="Old password" required>
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                    <i class="ki-duotone ki-eye d-none fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row" data-kt-password-meter="true">
                                            <label for="Tanggal Lahir Kepala Sekolah"
                                                class="col-sm-2 col-form-label required">Kata Sandi Baru</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" name="new_password"
                                                    id="password" placeholder="New password" required>
                                                <span class="text-sm fw-bold subtitle"></span>
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="ki-duotone ki-eye-slash fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                    <i class="ki-duotone ki-eye d-none fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                                <h5 class="mt-5">Persyaratan Password</h5>
                                                <p class="text-muted mb-2">
                                                    Mohon ikuti panduan ini untuk membuat password yang kuat:
                                                </p>
                                                <ul class="text-muted ps-4 mb-0 float-start">
                                                    <li><span class="text-sm">Minimal 8 karakter <b>(wajib)</b></span>
                                                    </li>
                                                    <li><span class="text-sm">Mengandung karakter spesial</span></li>
                                                    <li><span class="text-sm">Mengandung angka</span></li>
                                                </ul>

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

    <script>
        function validatePassword(password) {
            let specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
            let numericRegex = /\d/;

            if (password.length >= 8) {
                if (specialCharRegex.test(password) && numericRegex.test(password)) {
                    return 1;
                } else {
                    return 0;
                }
            } else {
                return -1;
            }
        }

        $('#password').on('input', function () {
            let password = $('#password').val();
            let validate = validatePassword(password);

            console.log(validate);

            if (password.length == 0) {
                $('#password')
                    .removeClass('border-warning')
                    .removeClass('border-success')
                    .removeClass('border-danger')
            } else if (password.length < 8) {
                $('#password')
                    .removeClass('border-success')
                    .removeClass('border-danger')
                    .addClass('border-warning')
                $('span.subtitle')
                    .removeClass('border-success')
                    .removeClass('border-danger')
                    .addClass('border-warning')
                    .html('Panjang password harus 8 karakter!')
            } else if (validate == 0) {
                $('#password')
                    .removeClass('border-success')
                    .removeClass('border-danger')
                    .addClass('border-warning')
                $('span.subtitle')
                    .removeClass('border-success')
                    .removeClass('border-danger')
                    .addClass('border-warning')
                    .html('Pertimbangkan untuk menggunakan karakter khusus dan angka.')
            } else {
                $('#password')
                    .removeClass('border-warning')
                    .removeClass('border-danger')
                    .addClass('border-success')
                $('span.subtitle')
                    .removeClass('border-warning')
                    .removeClass('border-success')
                    .addClass('border-danger')
                    .html('Cukup kuat.')
            }
        });

        $('#changePassword').on('submit', function (e) {
            if (validatePassword($('#password').val()) == -1) {
                e.preventDefault();
                $('#password')
                    .removeClass('border-warning')
                    .removeClass('border-success')
                    .addClass('border-danger')
                $('span.subtitle')
                    .removeClass('border-warning')
                    .removeClass('border-success')
                    .addClass('border-danger')
                    .html('Panjang password harus 8 karakter!')
            } else {
                $('span.subtitle')
                    .removeClass('border-warning')
                    .removeClass('border-danger')
                    .addClass('border-success')
            }
        });

    </script>