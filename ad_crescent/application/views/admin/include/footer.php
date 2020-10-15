<script src=<?php echo base_url("assets/js/vendor/jquery-2.1.4.min.js")?>></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src=<?php echo base_url("assets/js/plugins.js")?>></script>
    <script src=<?php echo base_url("assets/js/main.js")?>></script>


    <script src=<?php echo base_url("assets/js/lib/chart-js/Chart.bundle.js")?>></script>
    <script src=<?php echo base_url("assets/js/dashboard.js")?>></script>
    <script src=<?php echo base_url("assets/js/widgets.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/jquery.vmap.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/jquery.vmap.min.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/jquery.vmap.sampledata.js")?>></script>
    <script src=<?php echo base_url("assets/js/lib/vector-map/country/jquery.vmap.world.js")?>></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
     
    <!-- <script type="text/javascript" src="<?php echo base_url('assets/js/tinymce.min.js');?>"></script>  -->

    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
  <!-- Table  -->
   <script src=<?php echo base_url("assets/js/lib/data-table/datatables.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/dataTables.bootstrap.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/dataTables.buttons.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/buttons.bootstrap.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/jszip.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/pdfmake.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/vfs_fonts.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/buttons.html5.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/buttons.print.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/buttons.colVis.min.js");?>></script>
    <script src=<?php echo base_url("assets/js/lib/data-table/datatables-init.js");?>></script>
    <script src=<?php echo base_url("assets/js/jquery-ui-min.js");?>></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
  <!-- Table -->
    <script type="text/javascript">
    $(document).ready(function() {
    $(".datepicker").datepicker();
  });
  </script>
</body>
</html>