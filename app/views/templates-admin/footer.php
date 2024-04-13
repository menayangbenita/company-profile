
<?php Flasher::flash(); ?>
						
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">
										<script>
										document.write(new Date().getFullYear());
										</script>
									&copy;</span> <a href="#" target="_blank" class="text-gray-800 text-hover-primary">SMKN 8 MALANG.</a>
									All Rights Reserved Paper Play Studio
								</div>
							</div>
						</div>
						<!--end::Footer-->

					</div>
					<!--end:::Main-->
				</div>
			</div>
		</div>

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->
		<script>var hostUrl = "<?= BASEURL; ?>admin/";</script>
		<!--Global Javascript Bundle(mandatory for all pages)-->
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

		<!--end::Javascript-->

        <!--CKEditor Build Bundles:: Only include the relevant bundles accordingly-->
        <!-- <script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/build\ckeditor.js"></script> -->
        <script src="<?= BASEURL; ?>admin/plugins/custom/ckeditor/ckfinder.js"></script>
        <!--begin::Custom Javascript(used for this page only)-->
		<!-- <script>
			DecoupledEditor
	.create( document.querySelector( '.editor' ), {
		// Editor configuration.
	} )
	.then( editor => {
		window.editor = editor;

		// Set a custom container for the toolbar.
		document.querySelector( '.document-editor__toolbar' ).appendChild( editor.ui.view.toolbar.element );
		document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
	} )
	.catch( handleSampleError );

function handleSampleError( error ) {
	const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

	const message = [
		'Oops, something went wrong!',
		`Please, report the following error on ${ issueUrl } with the build id "q8j611lqmg98-lzyrxibt40ui" and the error stack trace:`
	].join( '\n' );

	console.error( message );
	console.error( error );
}

            ClassicEditor
                .create(document.querySelector('#kt_docs_ckeditor_classic'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

        </script> -->

		<script>
			function previewImage(event) {
				var reader = new FileReader();
				reader.onload = function() {
					var output = document.getElementById('selectedImage');
					output.src = reader.result;
				}
				reader.readAsDataURL(event.target.files[0]);
			}
		</script>
		<!--end::Javascript-->

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

	</body>
</html>