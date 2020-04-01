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
        .col-md-6{
            margin-left: 100px;
            margin-top: 50px;
        }
    </style>

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

        <div class="card-header">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                <h1>KRITIK & SARAN</h1> <br>
        </div>

    <div class="row">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
            <h2><center>Hubungi Kami</center></h2>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                
                    <form action="" method="post">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                            
                            <div class="form-group">
                                <label for="nama_contact">Nama </label>
                                <input type="text" class="form-control" id="nama_contact" name="nama_contact">
                            </div>
                            <div class="form-group">
                                <label for="email_contact">Email </label>
                                <input type="email" class="form-control" id="email_contact" name="email_contact">
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <input type="text" class="form-control" id="pesan" name="pesan">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
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
