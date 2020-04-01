<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cstyle.css">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title><?= $title ?></title>

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

        <div class="container" style="margin-top:20px">
            <div class="col-lg-12">
                <h2>Daftar Mahasiswa</h2>

                <table class="table table-striped table-bordered" id="listDokter">
                    <thead>
                        <tr align="center" style="background-color: lightblue;color:black">
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>No Absen</th>
                            <th>NIM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr align="center" style="background-color: white;color:black">
                            <td><?php echo 'Husnul Hotimah' ?></td>
                            <td><?php echo  'TI 2A' ?></td>
                            <td><?php echo  '13' ?></td>
                            <td><?php echo  '1841720014' ?></td>
                        </tr>
                        <tr align="center" style="background-color: white;color:black">
                            <td><?php echo 'Livia Yurike Khuril Maula' ?></td>
                            <td><?php echo  'TI 2A' ?></td>
                            <td><?php echo  '16' ?></td>
                            <td><?php echo  '1841720025' ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>