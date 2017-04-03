		</div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        
        <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/detect.js') ?>
        <?= $this->tag->javascriptInclude('js/fastclick.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.slimscroll.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.jquery.blockUI.js') ?>
        <?= $this->tag->javascriptInclude('js/waves.js') ?>
        <?= $this->tag->javascriptInclude('js/wow.min.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.nicescroll.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.scrollTo.min.js') ?>

        <!-- plugins -->
        <?= $this->tag->javascriptInclude('plugins/peity/jquery.peity.min.js') ?>

        <!-- jQuery  -->
        <?= $this->tag->javascriptInclude('plugins/waypoints/lib/jquery.waypoints.js') ?>
        <?= $this->tag->javascriptInclude('plugins/counterup/jquery.counterup.min.js') ?>



        <?= $this->tag->javascriptInclude('plugins/morris/morris.min.js') ?>
        <?= $this->tag->javascriptInclude('plugins/raphael/raphael-min.js') ?>

        <?= $this->tag->javascriptInclude('plugins/jquery-knob/jquery.knob.js') ?>

        <?= $this->tag->javascriptInclude('pages/jquery.dashboard.js') ?>

        <?= $this->tag->javascriptInclude('js/jquery.core.js') ?>
        <?= $this->tag->javascriptInclude('js/jquery.app.js') ?>

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