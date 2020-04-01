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
            margin-left: 70px;
            margin-top: 35px;
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
                    <a href="dashboard">
                        Pelayanan Kesehatan
                    </a>
                </li>
                <li>
                    <a href="data">Data Rumah Sakit</a>
                </li>
                <li>
                    <a href="dokter">Data Dokter</a>
                </li>
                <li>
                    <a href="obat">Data Obat</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="auth/logout">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div style="background-color: black">
            <p>.</p>
        </div>
        <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card-header">
                    <h1>Form Edit Data User</h1>
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id_user" value="<?= $user->id_user; ?>">
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user->nama; ?>">
                            <label>Username :</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>">
                            <label>Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $user->email; ?>">
                            <label>Level :</label>
                            <select class="form-control" name="level">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            <!-- <small style="background-color: orangered;color:white">*Level User <?= $user->username; ?> = <?= $user->level; ?></small><br> -->
                            <label>Status :</label>
                            <select name="status" class="form-control">
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                <option value="Aktif">Aktif</option>
                            </select>
                            <!-- <small style="background-color: orangered;color:white">Status User <?= $user->username; ?> = <?= $user->status; ?></small> -->
                        </div>
                        <a href="<?= base_url('user'); ?>" class="btn btn-primary">Back</a>
                        <button type="submit" name="submit" class="btn btn-success float-right">Update Data</button>
                    </form>
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
