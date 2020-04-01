<style type="text/css">
    .bg-login {
        background-image: url(<?php echo base_url('images/bg1.jpeg'); ?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

<body class="bg-login">

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Obat
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors() ?>
                            </div>
                        <?php endif ?>

                        <form action="" method="post">
                            <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                            <div class="form-group">
                                <label for="nama_obat">Nama Obat</label>
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat">
                            </div>
                            <div class="form-group">
                                <label for="jenis_obat">Jenis Obat</label>
                                <input type="text" class="form-control" id="jenis_obat" name="jenis_obat">
                            </div>
                            <div class="form-group">
                                <label for="stok_obat">Stok Obat</label>
                                <input type="number" class="form-control" id="stok_obat" name="stok_obat">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <a href="<?= base_url(); ?>obat" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>