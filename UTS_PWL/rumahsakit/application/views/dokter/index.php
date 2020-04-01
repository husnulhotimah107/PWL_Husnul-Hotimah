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
                <a href="<?= base_url(); ?>dokter/tambah" class="btn btn-info"> Tambah Data </a>
                <a href="<?= base_url(); ?>dokter/laporan_pdf" class="btn btn-info">Cetak Data Dokter</a>
            </div>
        </div>

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Daftar Dokter</h2>

                <table class="table table-striped table-bordered" id="listDokter">
                    <thead>
                        <tr align="center" style="background-color: lightblue;color:black">
                            <th>Kode Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Spesialis</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dokter as $d) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_D 00' .  $d['id_dok']; ?></td>
                                <td><?php echo $d['nama_dok']; ?></td>
                                <td><?php echo $d['alamat_dok']; ?></td>
                                <td><?php echo $d['no_telp_dok']; ?></td>
                                <td><?php echo $d['spesialis_dok']; ?></td>
                                <td><a href="<?= base_url(); ?>dokter/edit/<?= $d['id_dok']; ?>" class="badge badge-success float-center">Edit</a></td>
                                <td><a href="<?= base_url(); ?>dokter/hapus/<?= $d['id_dok']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


</body>
</head>

</html>