<style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url('images/login.jpeg');?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>
<body class = "bg-login">

<?=
    form_open('auth/prosesLogin');
?>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>style.css"/>
&nbsp; &nbsp;
<center>
    &nbsp;
<h2 style="color:black"> SISTEM INFORMASI RUMAH SAKIT</h2>
</center>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6" style="margin:0 auto;background-color: lightblue;border-radius: 1px;color:black">
            <div class="card-body">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors() ?>
                    </div>
                <?php endif ?>
                <h4 style="text-align: center">LOGIN</h4><br>
                <?php
                if (isset($pesan)) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $pesan; ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <input type="checkbox" onclick="passwordShowUnshow()"> Show/Unshow Password
                    </div>
                    Dont have an account? <a href="<?= base_url(); ?>auth/register">Register Here</a>
                    <button type="submit" name="submit" class="btn btn-primary float-right">Login</button><br><br>
                </form>
            </div>
        </div>
    </div>
</div>
<?=
    form_close();
?>

</body>