<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cstyle.css">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title><?php echo $title ?></title>

    <style>
        body {
            background-image: url(<?php echo base_url('images/bg2.jpeg'); ?>);
            background-repeat: repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2 align="center">Daftar Obat</h2>
                <table class="table table-striped table-bordered" id="listDokter">
                    <thead>
                        <tr align="center" style="background-color: wheat;color:black">
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($obat as $o) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_O 00' .  $o['id_obat']; ?></td>
                                <td><?php echo $o['nama_obat']; ?></td>
                                <td><?php echo $o['jenis_obat']; ?></td>
                                <td><?php echo $o['stok_obat']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            &nbsp; &nbsp;
</body>
</head>

</html>