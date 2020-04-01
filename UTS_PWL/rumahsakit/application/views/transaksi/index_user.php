<style type="text/css">
    .bg-login {
        background-image: url(<?php echo base_url('images/bg2.jpeg'); ?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

<body class="bg-login">
    <div class="container" style="margin-top:20px">
        <div class="col-lg-12">
            <h2 align="center">Daftar Transaksi</h2>

            <table class="table table-striped table-bordered" id="listTransaksiUser">
                <thead>
                    <tr align="center" style="background-color: wheat;color:black">
                        <th>Kode Transaksi</th>
                        <th>Nama User</th>
                        <th>Nama Dokter</th>
                        <th>Nama Obat</th>
                        <th>Biaya</th>
                        <th>Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $t) : ?>
                        <tr align="center" style="background-color: white;color:black">
                            <td><?php echo 'KD_T 00' . $t['id_transaksi']; ?></td>
                            <td><?php echo $t['nama']; ?></td>
                            <td><?php echo $t['nama_dok']; ?></td>
                            <td><?php echo $t['nama_obat']; ?></td>
                            <td><?php echo $t['biaya']; ?></td>
                            <td><?php echo date('d-m-Y', strtotime($t['tgl_transaksi'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>