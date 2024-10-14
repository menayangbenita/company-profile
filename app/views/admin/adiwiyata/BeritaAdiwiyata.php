<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!-- Toolbar -->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Kelola Berita Adiwiyata</h1>
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Berita Adiwiyata</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Kelola Berita Adiwiyata</li>
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
                                                        <a class="btn btn-primary" href="<?= BASEURL; ?>AdiwiyataBeritaBaru">
                                                        <i class="ki-duotone ki-plus fs-2"></i>Berita Baru Adiwiyata</a>
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
                                                                        <th class="pe-3">No</th>
                                                                        <th class="pe-3" style="display: none;">ID</th>
                                                                        <th class="pe-3">Judul Berita</th>
                                                                        <th class="pe-3">Author</th>
                                                                        <th class="pe-3">Tanggal publikasi</th>
                                                                        <th class="pe-3 text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-700">
                                                                    <?php $i = 1; ?>
                                                                    <?php foreach ($data['berita'] as $berita) : ?>
                                                                    <tr>
                                                                        <td><?= $i++ ?></td>
                                                                        <td style="display: none;"><?= $berita['id'] ?></td>
                                                                        <td><?= $berita['judul'] ?></td>
                                                                        <td><?= $berita['author'] ?></td>
                                                                        <td><?= $berita['tanggal_publikasi'] ?></td>
                                                                        <td class="text-center text-nowrap">
                                                                            <a href="<?= BASEURL; ?>AdiwiyataBeritaEdit/<?= $berita['id'] ?>"
																data-id="<?= $berita['id']; ?>" class="btn btn-icon btn btn-outline btn-outline-primary btn-active-light-primary btn-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom" title="Edit Berita">
                                                                                <i class="ki-duotone ki-pencil fs-2">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </a>
                                                                            <a href="<?= BASEURL; ?>AdminAdiwiyataBerita/hapus/<?= $berita['id'] ?>"
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

						<script>
		$(document).ready(function () {
			const BASEURL = window.location.href;
			$('.tombolTambahData').on('click', function () {
				$('#modalLabel').html('TAMBAH DATA KOMPETENSI KEAHLIAN')
				$('.modal-footer button[type=submit]').html('Tambah Data');

				$('#judul').val('');
				$('#id').val('');

			});

			$(".tampilModalUbahh").click(function () {
				$("#modal").addClass("edit");
				$("#modalLabelSarpras").html("UBAH DATA KOMPETENSI KEAHLIAN");
				$(".modal-footer button[type=submit]").html("Ubah Data");
				$(".modal-content form").attr("action", `${BASEURL}/beritaEdit`);

				const id = $(this).data("id");

				$.ajax({
					url: `${BASEURL}/getUbah`,
					data: { id: id },
					method: "post",
					dataType: "json",
					success: function (data) {
						$('#judul').val(data.judul);
						$('#id').val(data.id);
					},
				})
			});

		});
	</script>
                      