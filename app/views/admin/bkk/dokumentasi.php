<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!-- Toolbar -->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Dokumentasi BKK</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">BKK</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">Dokumentasi BKK</li>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Tulis Dokumentasi BKK</span>
								</div>
							</div>


							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<form action="<?= BASEURL; ?>Bkkdokumentasi/tambah" method="post">
									<div class="d-flex flex-column content-justify-center flex-row-fluid">
										<div class="row" data-bs-theme="light">
											<div class="col-sm-12">
												<div class="row">
													<div class="document-editor__toolbar"></div>
												</div>
												<div class="row row-editor">
													<div class="editor-container">
														<textarea class="editor" name="isi">
														</textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="card-footer">
								<button id="kt_docs_formvalidation_submit" type="submit" class="btn btn-primary float-end">
									<span class="indicator-label">
										Simpan Perubahan
									</span>
									<span class="indicator-progress">
										Harap menunggu... <span
											class="spinner-border spinner-border-sm align-middle ms-2"></span>
									</span>
								</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Content-->
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
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
<!--end::Javascript-->