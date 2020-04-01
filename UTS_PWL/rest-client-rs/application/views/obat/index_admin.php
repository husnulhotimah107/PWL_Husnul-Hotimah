<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UTS WEB</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>/assets/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo base_url();?>/assets/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url('images/login.jpg');?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

</head>

<body class="bg-login">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?= base_url(); ?>dashboard/index_admin">
                        Pelayanan Kesehatan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>user">Data User</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>data/index_admin">Data Rumah Sakit</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>dokter/index_admin">Data Dokter</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>obat/index_admin">Data Obat</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>contact/index_admin">Contact</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>auth/logout">Logout</a>
                </li>
            
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div style="background-color: black">
            <p>.</p>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                <h2><center>Data Obat</center> </h2> <br>

                <table class="table table-striped table-bordered" id="listObat">
                    <thead>
                        <tr align="center" style="background-color: #A9A9A9;color:black">
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($obat as $o) : ?>
                            <tr style="background-color: white;color:black">
                                <td><?php echo 'KD_O 00' .  $o['id_obat']; ?></td>
                                <td><?php echo $o['nama_obat']; ?></td>
                                <td><?php echo $o['jenis_obat']; ?></td>
                                <td><?php echo $o['stok_obat']; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>