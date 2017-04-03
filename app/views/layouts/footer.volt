		</div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        
        {{ javascript_include("js/jquery.min.js") }}
        {{ javascript_include("js/bootstrap.min.js") }}
        {{ javascript_include("js/detect.js") }}
        {{ javascript_include("js/fastclick.js") }}
        {{ javascript_include("js/jquery.slimscroll.js") }}
        {{ javascript_include("js/jquery.jquery.blockUI.js") }}
        {{ javascript_include("js/waves.js") }}
        {{ javascript_include("js/wow.min.js") }}
        {{ javascript_include("js/jquery.nicescroll.js") }}
        {{ javascript_include("js/jquery.scrollTo.min.js") }}

        <!-- plugins -->
        {{ javascript_include("plugins/peity/jquery.peity.min.js") }}

        <!-- jQuery  -->
        {{ javascript_include("plugins/waypoints/lib/jquery.waypoints.js") }}
        {{ javascript_include("plugins/counterup/jquery.counterup.min.js") }}



        {{ javascript_include("plugins/morris/morris.min.js") }}
        {{ javascript_include("plugins/raphael/raphael-min.js") }}

        {{ javascript_include("plugins/jquery-knob/jquery.knob.js") }}

        {{ javascript_include("pages/jquery.dashboard.js") }}

        {{ javascript_include("js/jquery.core.js") }}
        {{ javascript_include("js/jquery.app.js") }}

        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="plugins/datatables/dataTables.colVis.js"></script>
        <script src="plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script src="pages/datatables.init.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            });
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>