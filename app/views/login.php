<!DOCTYPE html>
<html lang="en">

<head>
    <base href="" />
    <title>SMKN 8 Kota Malang - <?= $data['judul'] ?></title>
    <meta charset="utf-8" />
    <meta name="description" content="Frontend by PaperPlay" />
    <meta name="author" content="PaperPlay, paperplay@gmail.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="<?= BASEURL; ?>admin/media/logo_smk8-removebg-preview.png" />
    <!--Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--Vendor Stylesheets(used for this page only)-->
    <link href="<?= BASEURL; ?>admin/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= BASEURL; ?>admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= BASEURL; ?>admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <style>
            body {
                background-image: url('<?= BASEURL; ?>admin/media/auth/bg10.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('<?= BASEURL; ?>admin/media/auth/bg10-dark.jpeg');
            }
        </style>
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="<?= BASEURL; ?>admin/media/auth/agency.png" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="<?= BASEURL; ?>admin/media/auth/agency-dark.png" alt="" />
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">ASTA ARKANANTA K8 MALANG</h1>
                </div>
            </div>
            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-start p-12 me-lg-20">
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-300px w-md-500px p-10">
                    <div class="d-flex flex-center flex-column align-items-stretch w-200px h-lg-100 w-md-400px">
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                data-kt-redirect-url="<?= BASEURL; ?>dashboard" method="post"
                                action="<?= BASEURL; ?>login/logProccess">
                                <div class="text-center mb-5">
                                    <img class="logo w-80px"
                                        src="<?= BASEURL; ?>admin/media/logo_smk8-removebg-preview.png" alt="logo">
                                </div>
                                <div class="separator separator-content my-8">
                                    <span class="w-300px text-gray-500 fw-semibold fs-7">SMKN 8 MALANG</span>
                                </div>
                                <div class="fv-row mb-5">
                                    <input type="text" placeholder="Username" name="username" autocomplete="off"
                                        class="form-control bg-transparent" />
                                </div>
                                <div class="fv-row mb-5" data-kt-password-meter="true">
                                    <div class="position-relative mb-3">
                                        <input type="password" placeholder="Kata Sandi" name="password"
                                            autocomplete="off" class="form-control bg-transparent" maxlength="30" />
                                        <span
                                            class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                            <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i>
                                            <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <span class="indicator-label">Sign In</span>
                                        <span class="indicator-progress">Harap tunggu...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex flex-stack">
                            <div class="me-10">
                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted fw-semibold me-1">
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        &copy;
                                    </span> <a href="#" target="_blank" class="text-gray-800 text-hover-primary">SMKN 8
                                        MALANG.</a> <br>
                                    All Rights Reserved Paper Play Studio
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php Flasher::flash(); ?>
    <script>var hostUrl = "<?= BASEURL; ?>admin/";</script>
    <script src="<?= BASEURL; ?>admin/plugins/global/plugins.bundle.js"></script>
    <script src="<?= BASEURL; ?>admin/js/scripts.bundle.js"></script>
    <script>
        "use strict";

        var KTSigninGeneral = function () {
            var form, submitButton, validation;

            return {
                init: function () {
                    form = document.querySelector("#kt_sign_in_form");
                    submitButton = document.querySelector("#kt_sign_in_submit");

                    validation = FormValidation.formValidation(form, {
                        fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: "Username harus diisi!"
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: "Password harus diisi!"
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    });

                    submitButton.addEventListener("click", function (e) {
                        e.preventDefault();
                        validation.validate().then(function (status) {
                            if (status === "Valid") {
                                form.submit()
                            } else {
                                Swal.fire({
                                    text: "Mohon maaf, tampaknya ada beberapa kesalahan yang terdeteksi. Silakan coba lagi.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        });
                    });

                    // Menggunakan jQuery untuk mengambil referensi tombol submit
                    const submitButton = $('#kt_sign_in_submit');

                    submitButton.on("click", function (event) {
                        event.preventDefault();

                        // Mengambil data dari form
                        const form = document.querySelector("#kt_sign_in_form");
                        const username = form.querySelector('[name="username"]').value;
                        const password = form.querySelector('[name="password"]').value;

                        // Mengirim data login ke backend PHP
                        $.ajax({
                            url: '<?= BASEURL; ?>dashboard',
                            type: 'POST',
                            dataType: 'json',
                            data: { username: username, password: password },
                            success: function (response) {
                                if (response.success) {
                                    submitButton.attr("data-kt-indicator", "on");
                                    submitButton.prop("disabled", true);

                                    setTimeout(function () {
                                        submitButton.removeAttr("data-kt-indicator");
                                        submitButton.prop("disabled", false);

                                        Swal.fire({
                                            text: "You have successfully logged in!",
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        });

                                        setTimeout(function () {
                                            Swal.close();
                                            form.querySelector('[name="username"]').value = "";
                                            form.querySelector('[name="password"]').value = "";

                                            var redirectUrl = form.getAttribute("data-kt-redirect-url");

                                            if (redirectUrl) {
                                                location.href = redirectUrl;
                                            }
                                        }, 1100);
                                    }, 2300);
                                } else {
                                    Swal.fire({
                                        text: response.message,
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, mengerti!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            },
                            error: function () {
                                Swal.fire({
                                    text: "Terjadi kesalahan saat melakukan login.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        });
                    });

                }
            }
        };
        }();

        KTUtil.onDOMContentLoaded(function () {
            KTSigninGeneral.init();
        });
    </script>

</body>

</html>