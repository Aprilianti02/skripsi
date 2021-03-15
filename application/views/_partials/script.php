    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>
    <script src="<?php echo base_url('js/demo/chart-pie-demo.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
	<script type="text/javascript">
	$(document).ready(function () {
        var kode_periksa    = $("#kode_periksa").val();
        var kode_pasien     = '<?php echo $this->session->userdata("kode_pasien") ?>';
         $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url("bumil/Hasilkonsultasi/ajax") ?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var i;
                    for(i=0; i<data.length; i++){
                        if (data[i].kode_periksa == kode_periksa && data[i].kode_pasien == kode_pasien) {
                            document.getElementById("simpan_data").disabled = true;
                        }
                    }
                }
 
        });
    });
	</script>