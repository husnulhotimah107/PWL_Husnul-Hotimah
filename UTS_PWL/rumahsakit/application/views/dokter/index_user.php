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
            <h2 align="center">Daftar Dokter</h2>

            <table class="table table-striped table-bordered" id="listDokterUser">
                <thead>
                    <tr align="center" style="background-color: wheat;color:black">
                        <th>Kode Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokter as $d) : ?>
                        <tr align="center" style="background-color: white;color:black">
                            <td><?php echo 'KD_D 00' .  $d['id_dok']; ?></td>
                            <td><?php echo $d['nama_dok']; ?></td>
                            <td><?php echo $d['spesialis_dok']; ?></td>
                            <td><a href="<?= base_url(); ?>dokter/detail_user/<?= $d['id_dok']; ?>" class="badge badge-info float-center">Detail</a></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>


</body>