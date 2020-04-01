<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cstyle.css">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title><?php echo $title ?></title>

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
                <a href="<?= base_url(); ?>periksa/tambah" class="btn btn-info"> Tambah Data </a>
                <a href="<?= base_url(); ?>periksa/laporan_pdfPeriksa" class="btn btn-info">Cetak Data Pasien</a>
            </div>
        </div>

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Daftar Pasien</h2>
                <table class="table table-striped table-bordered" id="listPeriksa">
                    <thead>
                        <tr align="center" style="background-color: lightblue;color:black">
                            <th>ID Periksa</th>
                            <th>Nama Dokter</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan Pasien</th>
                            <th>Tanggal Periksa</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($periksa as $p) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_P 00' . $p['id_periksa']; ?></td>
                                <td><?php echo $p['nama_dok']; ?> - <?php echo $p['spesialis_dok']; ?></td>
                                <td><?php echo $p['nama']; ?></td>
                                <td><?php echo $p['keluhan']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($p['tglperiksa'])) ?></td>
                                <td><a href="<?= base_url(); ?>periksa/edit/<?= $p['id_dok']; ?>" class="badge badge-success float-center">Edit</a></td>
                                <td><a href="<?= base_url(); ?>periksa/hapus/<?= $p['id_dok']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            &nbsp; &nbsp;


</body>
</head>

</html>