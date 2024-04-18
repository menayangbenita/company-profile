<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!-- Toolbar -->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Galeri</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">ASTA ARKANANTA K8</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Galeri</li>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modaltambah">
                                        Tambah Galeri
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
                                                    <th class="pe-3 w-lg-225px" style="display: none;">ID</th>
                                                    <th class="pe-3 w-lg-225px">Foto</th>
                                                    <th class="pe-3">Kategori</th>
                                                    <th class="pe-3">Keterangan</th>
                                                    <th class="pe-3 text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-700">
                                                <?php foreach ($data['galeri'] as $galeri): ?>
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
                                                                        href="<?= BASEURL; ?>img/datafoto/<?= $galeri['gambar'] ?>">
                                                                        <!--begin::Image-->
                                                                        <div class="symbol symbol-50px">
                                                                            <img
                                                                                src="<?= BASEURL; ?>img/datafoto/<?= $galeri['gambar'] ?>">
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
                                                        <td>
                                                            <?= str_replace(['-', 'dan'], [' ', '&'], $galeri['kategori']) ?>
                                                        </td>
                                                        <td>
                                                            <?= $galeri['keterangan'] ?>
                                                        </td>
                                                        <td class="text-center text-nowrap">
                                                            <a href="<?= BASEURL; ?>AdminGaleri/ubah/<?= $galeri['id'] ?>"
                                                                class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbah"
                                                                type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                data-id="<?= $galeri['id']; ?>"
                                                                data-bs-target="#modaltambah">
                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </a>
                                                            <a href="<?= BASEURL; ?>AdminGaleri/hapus/<?= $galeri['id'] ?>"
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalTambahKategori">
                                        Tambah Kategori Galeri
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
                                                    <th class="pe-3 w-lg-225px" style="display: none;">ID</th>
                                                    <th class="pe-3">Nama</th>
                                                    <th class="pe-3 text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-700">
                                                <?php foreach ($data['kategori'] as $kategori): ?>
                                                    <tr>
                                                        <td style="display: none;">
                                                            <span class="kategori-id">
                                                                <?= $kategori['id']; ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <?= $kategori['kategori'] ?>
                                                        </td>
                                                        <td class="text-center text-nowrap">
                                                            <a href="<?= BASEURL; ?>AdminGaleri/ubahKategori/<?= $kategori['id'] ?>"
                                                                class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-danger btn-sm tampilModalUbahh"
                                                                type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                data-id="<?= $kategori['id']; ?>"
                                                                data-bs-target="#modalTambahKategori">
                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </a>
                                                            <a href="<?= BASEURL; ?>AdminGaleri/hapusKategori/<?= $kategori['id'] ?>"
                                                                class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm"
                                                                type="button" class="btn btn-primary">
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
    <div class="modal fade" tabindex="-1" id="modalTambahKategori">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= BASEURL; ?>AdminGaleri/kategori" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title">TAMBAH DATA KATEGORI GALERI</h5>
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
                            <label for="Nama" class="col-sm-3 col-form-label required">Nama Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kategori" name="kategori"
                                    placeholder="Seni & Lomba">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button id="kt_docs_formvalidation_submit" type="submit" class="btn btn-primary float-end"
                            onclick="konversiKeJSON()">
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
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" tabindex="-1" id="modaltambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= BASEURL; ?>AdminGaleri/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="fotoLama" id="fotoLama">
                    <div class="modal-header">
                        <h5 class="modal-title">TAMBAH DATA GALERI</h5>
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
                            <label for="Nama" class="col-sm-3 col-form-label required">Foto</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="gambar" name="gambar"
                                    accept="image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="row mb-5 fv-row">
                            <label for="Jenis" class="col-sm-3 col-form-label required">Kategori</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Select example" id="kategori" name="kategori">
                                    <?php foreach ($data['kategori'] as $kategori): ?>
                                        <option value="<?= $kategori['kategori'] ?>">
                                            <?= str_replace(['-', 'dan'], [' ', '&'], $kategori['kategori']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-5 fv-row">
                            <label for="Keterangan" class="col-sm-3 col-form-label required">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    placeholder="Lomba IT Software">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
    <script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/build\ckeditor.js"></script>

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
                        const deleteUrl = "<?= BASEURL; ?>AdminGaleri/hapus/" + itemId;
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
        document.addEventListener('DOMContentLoaded', function () {
            const inputKategori = document.getElementById('kategori');

            inputKategori.addEventListener('input', function () {
                this.value = this.value.replace(/\s+/g, '-').replace(/&/g, 'dan');
            });

            inputKategori.addEventListener('keypress', function (e) {
                if (e.key === '&') {
                    e.preventDefault();
                    this.value += 'dan'; 
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            const BASEURL = window.location.href;
            $('.tombolTambahData').on('click', function () {
                $('#modalLabel').html('TAMBAH DATA GALERI')
                $('.modal-footer button[type=submit]').html('Tambah Data');

                $('#gambar').val('');
                $('#kategori').val('');
                $('#keterangan').val('');
                $('#id').val('');

            });

            $(".tampilModalUbah").click(function () {
                $("#modal").addClass("edit");
                $("#modalLabel").html("UBAH DATA GALERI");
                $(".modal-footer button[type=submit]").html("Ubah Data");
                $(".modal-content form").attr("action", `${BASEURL}/ubah`);

                const id = $(this).data("id");

                $.ajax({
                    url: `${BASEURL}/getUbah`,
                    data: { id: id },
                    method: "post",
                    dataType: "json",
                    success: function (data) {
                        $('#fotoLama').val(data.gambar);
                        $('#kategori').val(data.kategori);
                        $('#keterangan').val(data.keterangan);
                        $('#id').val(data.id);
                    },
                })
            });

        });
    </script>

    <script>
        $(document).ready(function () {
            const BASEURL = window.location.href;
            $('.tombolTambahData').on('click', function () {
                $('#modalLabel').html('TAMBAH DATA KATEGORI')
                $('.modal-footer button[type=submit]').html('Tambah Data');

                $('#gambar').val('');
                $('#kategori').val('');
                $('#keterangan').val('');
                $('#id').val('');

            });

            $(".tampilModalUbahh").click(function () {
                $("#modal").addClass("edit");
                $("#modalLabel").html("UBAH DATA KATEGORI");
                $(".modal-footer button[type=submit]").html("Ubah Data");
                $(".modal-content form").attr("action", `${BASEURL}/ubahKategori`);

                const id = $(this).data("id");

                $.ajax({
                    url: `${BASEURL}/getUbahKategori`,
                    data: { id: id },
                    method: "post",
                    dataType: "json",
                    success: function (data) {
                        $('#kategori').val(data.kategori);
                        $('#id').val(data.id);
                    },
                })
            });

        });
    </script>