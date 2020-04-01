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
                <div class="card-header">
                    Form Edit Data Transaksi
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi']; ?>">
                        <!-- https://getbootstrap.com/docs/4.4/components/forms/ -->
                        <form action="" method="post">


                            <div class="form-group">
                                <label for="nama">Nama Pasien</label>
                                <select class="form-control" name="id_periksa" id="id_periksa">
                                    <option selected="selected">Pilih Pasien</option>
                                    <?php foreach ($periksa as $p) : ?>
                                        <option value="<?= $p['id_periksa'] ?>" selected><?= $p['nama'] ?> - <?= $p['keluhan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_dok">Nama Dokter</label>
                                <select class="form-control" id="id_dok" name="id_dok">
                                    <option selected="selected">Pilih Dokter</option>
                                    <?php foreach ($dokter as $d) : ?>
                                        <option value="<?= $d['id_dok'] ?>" selected><?= $d['nama_dok'] ?> - <?= $d['spesialis_dok'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_obat">Nama Obat</label>
                                <select class="form-control" id="id_obat" name="id_obat">
                                    <option selected="selected">Pilih Obat</option>
                                    <?php foreach ($obat as $o) : ?>
                                        <option value="<?= $o['id_obat'] ?>" selected><?= $o['nama_obat'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="text" class="form-control" id="biaya" name="biaya" value="<?= $transaksi['biaya']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tgl_transaksi">Tanggal Transaksi</label>
                                <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="<?= $transaksi['tgl_transaksi']; ?>">
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                        </form>
                        <a href="<?= base_url(); ?>transaksi" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>