<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#listDokter').DataTable();
        $('#listPasien').DataTable();
        $('#listObat').DataTable();
        $('#listTransaksi').DataTable();
        $('#listTransaksiUser').DataTable();
        $('#listUser').DataTable();
        $('#listDokterUser').DataTable();
        $('#listObatUser').DataTable();
        $('#listPeriksa').DataTable();
    	});
    </script>
    
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>