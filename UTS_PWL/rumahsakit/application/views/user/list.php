<style type="text/css">
    .bg-user {
        background-image: url(<?php echo base_url('images/3.jpg'); ?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

<body class="bg-user">

    <div class="container" style="margin-top:20px">
        <div class="col-lg-12">
            <h2>Daftar User</h2>

            <table class="table table-striped table-bordered" id="listUser">
                <thead>
                    <tr align="center" style="background-color: lightblue;color:black">
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $u) : ?>
                        <tr align="center" style="background-color: white;color:black">
                            <td><?php echo $u['nama']; ?></td>
                            <td><?php echo $u['username']; ?></td>
                            <td><?php echo $u['email']; ?></td>
                            <td><?php echo $u['level']; ?></td>
                            <td><?php echo $u['status']; ?></td>
                            <td><a href="<?= base_url(); ?>user/detail/<?= $u['id_user']; ?>" class="badge badge-info float-center">Detail</a>
                                <a href="<?= base_url(); ?>user/edit/<?= $u['id_user']; ?>" class="badge badge-success float-center">Edit</a>
                                <a href="<?= base_url(); ?>user/hapus/<?= $u['id_user']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url(); ?>user/laporan_pdfUser" class="btn btn-info">Cetak Data User</a>
        </div>
    </div>

</body>

</html>