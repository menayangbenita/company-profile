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
								<div class="d-flex flex-column content-justify-center flex-row-fluid">
									<form action="">
										<div class="row" data-bs-theme="light">
											<div class="col-sm-12">
												<div id="toolbar-container">
													<span class="ql-formats">
														<select class="ql-font"></select>
														<select class="ql-size"></select>
													</span>
													<span class="ql-formats">
														<button class="ql-bold"></button>
														<button class="ql-italic"></button>
														<button class="ql-underline"></button>
														<button class="ql-strike"></button>
													</span>
													<span class="ql-formats">
														<select class="ql-color"></select>
														<select class="ql-background"></select>
													</span>
													<span class="ql-formats">
														<button class="ql-script" value="sub"></button>
														<button class="ql-script" value="super"></button>
													</span>
													<span class="ql-formats">
														<button class="ql-header" value="1"></button>
														<button class="ql-header" value="2"></button>
														<button class="ql-blockquote"></button>
														<button class="ql-code-block"></button>
													</span>
													<span class="ql-formats">
														<button class="ql-list" value="ordered"></button>
														<button class="ql-list" value="bullet"></button>
														<button class="ql-indent" value="-1"></button>
														<button class="ql-indent" value="+1"></button>
													</span>
													<span class="ql-formats">
														<button class="ql-direction" value="rtl"></button>
														<select class="ql-align"></select>
													</span>
													<span class="ql-formats">
														<button class="ql-link"></button>
														<button class="ql-image"></button>
														<button class="ql-video"></button>
														<button class="ql-formula"></button>
													</span>
													<span class="ql-formats">
														<button class="ql-clean"></button>
													</span>
												</div>
												<div id="editor">
												</div>
											</div>
										</div>
								</div>
							</div>
							<div class="card-footer">
								<button class="btn btn-primary float-end">Simpan Perubahan</button>
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

	<script>
		const quill = new Quill('#editor', {
			modules: {
				syntax: true,
				toolbar: '#toolbar-container',
			},
			placeholder: 'Compose an epic...',
			theme: 'snow',
		});
	</script>