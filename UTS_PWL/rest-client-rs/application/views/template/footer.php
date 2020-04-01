<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#listDokter').DataTable();
        $('#listPasien').DataTable();
        $('#listObat').DataTable();
        $('#listUser').DataTable();
    	});
    </script>
    
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
  </body>
</html>