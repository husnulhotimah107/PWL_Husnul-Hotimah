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
                        Form Tambah Data Pasien
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors() ?>
                            </div>
                        <?php endif ?>

                        <form action="" method="post">
                            <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama Pasien</label>
                                    <select class="form-control" name="id_user" id="id_user">
                                        <option selected="selected">Pilih Nama User</option>
                                        <?php foreach ($user as $usr) : ?>
                                            <option value="<?= $usr['id_user'] ?>"><?= $usr['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="keluhan">Keluhan Pasien</label>
                                    <input type="text" class="form-control" id="keluhan" name="keluhan">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama Dokter</label>
                                    <select class="form-control" name="id_dok" id="id_dok">
                                        <option selected="selected">Pilih Dokter</option>
                                        <?php foreach ($dokter as $dok) : ?>
                                            <option value="<?= $dok['id_dok'] ?>"><?= $dok['nama_dok'] ?> - <?= $dok['spesialis_dok'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tglperiksa">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" id="tglperiksa" name="tglperiksa">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                            </form>
                            <a href="<?= base_url(); ?>periksa" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
                &nbsp;
            </div>
        </div>
    </div>
</body>