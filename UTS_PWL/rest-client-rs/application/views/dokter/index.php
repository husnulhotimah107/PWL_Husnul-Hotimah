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
                    <a href="<?= base_url(); ?>dashboard">
                        Pelayanan Kesehatan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>data">Data Rumah Sakit</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>dokter">Data Dokter</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>obat">Data Obat</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>contact">Contact</a>
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
                <h2><center>Data Dokter</center> </h2> <br>

                <table class="table table-striped table-bordered" id="listDokter">
                    <thead>
                        <tr align="center" style="background-color: #A9A9A9;color:black">
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Alamat Dokter</th>
                            <th>No Telp Dokter</th>
                            <th>Spesialis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dokter as $d) : ?>
                            <tr style="background-color: white;color:black">
                                <td><?php echo 'KD_D 00' .  $d['id_dok']; ?></td>
                                <td><?php echo $d['nama_dok']; ?></td>
                                <td><?php echo $d['alamat_dok']; ?></td>
                                <td><?php echo $d['no_telp_dok']; ?></td>
                                <td><?php echo $d['spesialis_dok']; ?></td>
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
