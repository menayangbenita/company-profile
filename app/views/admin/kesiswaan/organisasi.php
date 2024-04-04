<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Organisasi</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Kesiswaan</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Organisasi</li>
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
														<span class="text-uppercase fw-bold pb-0 fs-3">Tulis tentang Organisasi</span>
													</div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
                                                        <form action="">
                                                            <div class="row" data-bs-theme="light">
																<div class="col-sm-12">
																	<textarea name="kt_docs_ckeditor_classic" id="kt_docs_ckeditor_classic">
																	</textarea>
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
                                                            <span class="text-uppercase fw-bold pb-0 fs-3">Unggah Gambar galeri organisasi</span>
                                                        </div>
													</div>
                                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                                        <i class="ki-duotone ki-plus fs-2"></i>Gambar baru</button>
                                                    </div>
												</div>
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<!--begin::Table-->
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered align-middle"
                                                                id="table">
                                                                <thead  class="fw-bold fs-7 text-uppercase text-gray-900 text-nowrap">
                                                                    <tr>
                                                                        <th class="pe-3">No.</th>
                                                                        <th class="pe-3">Gambar</th>
                                                                        <th class="pe-3 text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-700">
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td class="text-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="">
                                                                                    <!--begin::Overlay-->
                                                                                    <a class="d-block overlay" data-fslightbox="lightbox-basic" href="assets/media/stock/900x600/23.jpg">
                                                                                        <!--begin::Image-->
                                                                                        <div class="symbol symbol-50px">
                                                                                            <img src="assets/media/stock/900x600/23.jpg">
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
                                                                        <td class="text-center text-nowrap">
                                                                            <button type="button" class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-primary btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Edit">
                                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </button>
                                                                            <button class="btn btn-icon btn btn-outline btn-outline-danger btn-active-light-danger btn-sm" data-kt-permissions-table-filter="delete_row" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                                                                                <i class="ki-duotone ki-trash fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                    <span class="path4"></span>
                                                                                    <span class="path5"></span>
                                                                                </i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
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
						<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
						</div>
						<!--end::Close-->
					</div>

					<form id="kt_docs_formvalidation" class="form" action="#" autocomplete="off">
						<div class="modal-body">
							<div class="row mb-3">
								<div class="col-md-12">
									<!--begin::Input group-->
									<div class="row mb-3 fv-row">
										<label for="galeriorganisasi" class="col-sm-2 col-form-label required">Gambar</label>
										<div class="col-sm-10">
											<input type="file" class="form-control" accept=".jpeg , .jpg, .png" id="galeriorganisasi" name="required">
                                            <div class="form-text">Inputkan file dengan jenis .jpg .png</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
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
				</div>
			</div>
		</div>
		<!--modal end-->

        <!--begin::Custom Javascript(used for this page only)-->
        <script>
            ClassicEditor
                .create(document.querySelector('#kt_docs_ckeditor_classic'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

        <!--begin::Custom Javascript(used for this page only)-->
		<script>
            "use strict";

            var KTAppEcommerceReportSales = function () {
                var dataTable;

                return {
                    init: function () {
                        // Initialize DataTable
                        (dataTable = document.querySelector("#table")) && (dataTable.querySelectorAll("tbody tr").forEach((row => {
                            const cells = row.querySelectorAll("td");
                            const dateValue = moment(cells[0].innerHTML, "MMM DD, YYYY").format();
                            cells[0].setAttribute("data-order", dateValue);
                        })), dataTable = $(dataTable).DataTable({
                            info: !1,
                            order: [],
                            pageLength: 10,
                            scrollX: true,
                            scrollCollapse: true,
                            fixedColumns: {
                                left: 1,
                                right: 1
                            }
                        }));

                        // Initialize DataTable Buttons
                        (() => {
                            const title = "Laporan";
                            new $.fn.dataTable.Buttons(dataTable, {
                                buttons: [
                                    { extend: "copyHtml5", title: title },
                                    { extend: "excelHtml5", title: title },
                                    { extend: "csvHtml5", title: title },
                                    { extend: "pdfHtml5", title: title }
                                ]
                            }).container().appendTo($("#table-export"));

                            document.querySelectorAll("#table_export [table-export]").forEach((button => {
                                button.addEventListener("click", (event => {
                                    event.preventDefault();
                                    const exportType = event.target.getAttribute("table-export");
                                    document.querySelector(".dt-buttons .buttons-" + exportType).click();
                                }))
                            }));
                        })();

                        // Add event listener for search input
                        document.querySelector('[table-search="search"]').addEventListener("keyup", (function (event) {
                            dataTable.search(event.target.value).draw();
                        }));
                    }
                }
            }();

            KTUtil.onDOMContentLoaded((function () {
                KTAppEcommerceReportSales.init();
            }));

        </script>

		<!--delete row-->
        <script>
            $(document).ready(function () {
                $('[data-kt-permissions-table-filter="delete_row"]').on('click', function () {
                    const row = $(this).closest('tr');
                    const itemName = row.find('td:eq(1)').text();

                    Swal.fire({
                        text: "Apakah Anda yakin untuk menghapus '" + itemName + "' ?",
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
                            Swal.fire({
                                text: "Data '" + itemName + "' berhasil di hapus!",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 900,
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            }).then(() => {
                                row.remove();
                            });
                        } else if (result.dismiss === "cancel") {
                            Swal.fire({
                                text: "Data '" + itemName + " ' tidak dihapus.",
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
            const tambahForm = document.getElementById('kt_docs_formvalidation');
            const tambahValidator = FormValidation.formValidation();
        
            // Submit button handler
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
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
        
                                Swal.fire({
                                    text: "BERHASIL!",
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer: 1300
                                }).then(function () {
                                    $(`#${modalId}`).modal('hide');
                                });
                            }, 2000);
                        }
                    });
                }
            }
        </script>
		<!--end::Javascript-->