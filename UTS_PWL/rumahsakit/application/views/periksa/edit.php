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
                    Form Edit Data Periksa
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_periksa" value="<?= $periksa['id_periksa']; ?>">
                        <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama Pasien</label>
                                <select class="form-control" name="id_user" id="id_user">
                                    <?php foreach ($user as $usr) : ?>
                                        <option value="<?= $usr['id_user'] ?>"><?= $usr['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="keluhan">Keluhan Pasien</label>
                                <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?= $periksa['keluhan']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Dokter</label>
                                <select class="form-control" name="id_dok" id="id_dok">
                                    <?php foreach ($dokter as $dok) : ?>
                                        <option value="<?= $dok['id_dok'] ?>" selected><?= $dok['nama_dok'] ?> - <?= $dok['spesialis_dok'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tglperiksa">Tanggal Transaksi</label>
                                <input type="date" class="form-control" id="tglperiksa" name="tglperiksa" value="<?= $periksa['tglperiksa']; ?>">
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                        </form>
                        <a href="<?= base_url(); ?>periksa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>