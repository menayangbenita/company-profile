<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!-- Toolbar -->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">GLS
						(Gerakan Literasi Sekolah)</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">Kesiswaan</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">GLS (Gerakan Literasi Sekolah)</li>
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
									<span class="text-uppercase fw-bold pb-0 fs-3">Tulis tentang Gerakan Literasi
										Sekolah</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form action="<?= BASEURL; ?>AdminGls/tambah" method="post">
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
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary float-end">Simpan Perubahan</button>
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

	<!--begin::Custom Javascript(used for this page only)-->

	<!--end::Javascript-->

	<!-- Include CKEditor JS file -->
	<!-- <script src="https://ckeditor.com/apps/ckfinder/3.4.5/ckfinder.js"></script>

	<script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/build\ckeditor.js"></script>
	<script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/ckfinder.js"></script> -->
	<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>


	<!-- Custom JavaScript -->
	<!-- <script>
		CKEDITOR.replace('.editor', {
			filebrowserBrowseURL: '<?= BASEURL; ?>admin/plugins/custom/ckfinder/ckfinder.html',
			filebrowserUploadURL: '<?= BASEURL; ?>admin/plugins/custom/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			height: '400px'
		});
	</script>
	<script>
		// Inisialisasi CKEditor pada elemen dengan id 'isi'
		DecoupledEditor
			.create(document.querySelector('.editor'), {
				// Editor configuration.
			})
			.then(editor => {
				window.editor = editor;

				// Set a custom container for the toolbar.
				document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
				document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
			})
			.catch(handleSampleError);

		function handleSampleError(error) {
			const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

			const message = [
				'Oops, something went wrong!',
				`Please, report the following error on ${issueUrl} with the build id "q8j611lqmg98-lzyrxibt40ui" and the error stack trace:`
			].join('\n');

			console.error(message);
			console.error(error);
		} -->

		<script>
    ClassicEditor
        .create( document.querySelector( '.editor' ), {
			ckfinder: {
				uploadUrl: '<?= BASEURL;?>admin/plugins/custom/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
			}
		})
		.then(editor => {
			console.log(editor);
		})
        .catch( error => {
            console.error( error );
        } );
		
</script>


	</script>