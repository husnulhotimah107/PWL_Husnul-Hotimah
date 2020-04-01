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
                <!-- https://getbootstrap.com/docs/4.4/components/card/ -->

                <div class="card-header">
                    Form Edit Data Obat
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_obat" value="<?= $obat['id_obat']; ?>">
                        <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?= $obat['nama_obat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_obat">Jenis Obat</label>
                            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="<?= $obat['jenis_obat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="stok_obat">Stok Obat</label>
                            <input type="number" class="form-control" id="stok_obat" name="stok_obat" value="<?= $obat['stok_obat']; ?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                    <a href="<?= base_url(); ?>obat" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>