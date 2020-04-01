<style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url('images/bg1.jpeg');?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>
<body class="bg-login">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Dokter
            </div>
        <div class="card-body">
            <h5 class="card-title"><?= $dokter['nama_dok']; ?></h5>
            <p class="card-text">
                <label for=""><b> ID Dokter : </b></label>
                <?= $dokter['id_dok']; ?></p>
            <p class="card-text">
                <label for=""><b> Alamat Dokter : </b></label>
                <?= $dokter['alamat_dok']; ?></p>
            <p class="card-text">
                <label for=""><b> No Telp Dokter: </b></label>
                <?= $dokter['no_telp_dok']; ?></p>
            <p class="card-text">
                <label for=""><b> Spesialis Dokter: </b></label>
                <?= $dokter['spesialis_dok']; ?></p>
            <a href="<?= base_url();?>dokter/index_user" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>
</body>