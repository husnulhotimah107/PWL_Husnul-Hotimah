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
                <a href="<?= base_url(); ?>obat/tambah" class="btn btn-info"> Tambah Data </a>
                <a href="<?= base_url(); ?>obat/laporan_pdfObat" class="btn btn-info">Cetak Data Obat</a>
            </div>
        </div>

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Daftar Obat</h2>
                <table class="table table-striped table-bordered" id="listDokter">
                    <thead>
                        <tr align="center" style="background-color: lightblue;color:black">
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Stok</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($obat as $o) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_O 00' .  $o['id_obat']; ?></td>
                                <td><?php echo $o['nama_obat']; ?></td>
                                <td><?php echo $o['jenis_obat']; ?></td>
                                <td><?php echo $o['stok_obat']; ?></td>
                                <td><a href="<?= base_url(); ?>obat/edit/<?= $o['id_obat']; ?>" class="badge badge-success float-center">Edit</a></td>
                                <td><a href="<?= base_url(); ?>obat/hapus/<?= $o['id_obat']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            &nbsp; &nbsp;


</body>
</head>

</html>