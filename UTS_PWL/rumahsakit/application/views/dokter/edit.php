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
                    Form Edit Data Dokter
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_dok" value="<?= $dokter['id_dok']; ?>">
                        <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                        <div class="form-group">
                            <label for="nama_dok">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama_dok" name="nama_dok" value="<?= $dokter['nama_dok']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_dok">Alamat Dokter</label>
                            <input type="text" class="form-control" id="alamat_dok" name="alamat_dok" value="<?= $dokter['alamat_dok']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_telp_dok">No Telp Dokter</label>
                            <input type="text" class="form-control" id="no_telp_dok" name="no_telp_dok" value="<?= $dokter['no_telp_dok']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="spesialis_dok">Spesialis Dokter</label>
                            <input type="text" class="form-control" id="spesialis_dok" name="spesialis_dok" value="<?= $dokter['spesialis_dok']; ?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                    <a href="<?= base_url(); ?>dokter" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>