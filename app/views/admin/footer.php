<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!-- Toolbar -->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Footer</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Footer</li>
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
                                    <span class="text-uppercase fw-bold pb-0 fs-3">Perbarui Footer Beranda</span>
                                </div>
                            </div>
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <form id="kt_docs_formvalidation" class="form" method="post"
                                        action="<?= BASEURL ?>AdminFooter/tambah" autocomplete="off">
                                        <div class="row mb-5 fv-row">
                                            <label for="logo" class="col-sm-2 col-form-label required">Logo
                                                Sekolah</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="logo"
                                                    accept=".jpeg , .jpg, .png" name="logo"
                                                    value="<?= $data['footer']['logo'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="namasekolah" class="col-sm-2 col-form-label required">Nama
                                                Sekolah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="SMKN 8 MALANG" value="<?= $data['footer']['nama'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="teks" class="col-sm-2 col-form-label required">Teks</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="teks" name="teks"
                                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit"
                                                    value="<?= $data['footer']['teks'] ?>">
                                                <div class="form-text">Inputkan deskripsi untuk di bawah tulisan nama
                                                    sekolah
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="alamatSekolah" class="col-sm-2 col-form-label required">Alamat
                                                Sekolah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit"
                                                    value="<?= $data['footer']['alamat'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="noHP" class="col-sm-2 col-form-label required">Nomor
                                                Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="nomor" name="nomor"
                                                    placeholder="089788764453" value="<?= $data['footer']['nomor'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="email" class="col-sm-2 col-form-label required">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="example@gmail.com"
                                                    value="<?= $data['footer']['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="linkX" class="col-sm-2 col-form-label required">Link X</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="x" name="x"
                                                    placeholder="Masukkan link X sekolah"
                                                    value="<?= $data['footer']['x'] ?>"
                                                    aria-placeholder="https://loremipsumdolorsitametconsectetur">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="linkFB" class="col-sm-2 col-form-label required">Link
                                                Facebook</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fb" name="fb"
                                                    placeholder="Masukkan link Facebook sekolah"
                                                    value="<?= $data['footer']['fb'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="linkIG" class="col-sm-2 col-form-label required">Link
                                                Instagram</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="ig" name="ig"
                                                    placeholder="Masukkan link Instagram sekolah"
                                                    value="<?= $data['footer']['ig'] ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-5 fv-row">
                                            <label for="linkLinkedin" class="col-sm-2 col-form-label required">Link
                                                Linkedin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="li" name="li"
                                                    placeholder="Masukkan link Linkedin sekolah"
                                                    value="<?= $data['footer']['li'] ?>">
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
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->