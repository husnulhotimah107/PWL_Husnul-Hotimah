<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cstyle.css">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Data Rumah Sakit</title>

    <style>
        body {
            background-image: url('images/3.jpg');
            background-repeat: repeat;
            background-size: cover;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>transaksi/tambah" class="btn btn-info"> Tambah Data </a>
                <a href="<?= base_url(); ?>transaksi/laporan_pdfTransaksi" class="btn btn-info">Cetak Data Transaksi</a>
            </div>
        </div>

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Daftar Transaksi</h2>

                <table class="table table-striped table-bordered" id="listTransaksi">
                    <thead>
                        <tr align="center" style="background-color: lightblue;color:black">
                            <th>Kode Transaksi</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Nama Obat</th>
                            <th>Biaya</th>
                            <th>Tanggal Transaksi</th>
                            <th>Edit</th>
                            <th>Hapus</th>
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
                                <td><a href="<?= base_url(); ?>transaksi/edit/<?= $t['id_transaksi']; ?>" class="badge badge-success float-center">Edit</a></td>
                                <td><a href="<?= base_url(); ?>transaksi/hapus/<?= $t['id_transaksi']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>