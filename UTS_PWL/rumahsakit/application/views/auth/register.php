<style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url('images/1.jpg');?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>
<body class="bg-login">

<?=
    form_open('auth/prosesRegister');
?>

&nbsp; &nbsp;
<center>
    &nbsp;
<h2 style="color:black"> SISTEM INFORMASI RUMAH SAKIT </h2>
</center>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6" style="margin:0 auto;background-color: lightblue;border-radius: 25px;color:black">
            <div class="card-body">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors() ?>
                    </div>
                <?php endif ?>
                <h4 style="text-align: center">REGISTRASI</h4><br>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="passwordConf" name="passwordConf">
                        <input type="checkbox" onclick="passwordShowUnshow()"> Show/Unshow Password
                    </div>
                    Already Have an Account? <a href="<?= base_url(); ?>auth">Login Here</a>
                    <button type="submit" name="submit" class="btn btn-primary float-right">Register</button><br><br>
                </form>
            </div>
        </div>
    </div>
</div>
<?=
    form_close();
?>

</body>