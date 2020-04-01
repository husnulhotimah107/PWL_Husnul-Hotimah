<style type="text/css">
    .bg-login {
        background-image: url(<?php echo base_url('images/bg2.jpeg'); ?>);
        background-repeat: repeat;
        background-size: cover;
    }
</style>

<body class="bg-login">
    <div class="container">
        <?php if ($this->session->flashdata('flash-data')) : ?>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Pasien <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row mt-4">
            <div class="col-md-10">
                <h2 align="center">Daftar Periksa</h2>

                <table class="table table-striped table-bordered" id="listPeriksa">
                    <thead>
                        <tr align="center" style="background-color: wheat;color:black">
                            <th>ID Periksa</th>
                            <th>Nama Dokter</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan Pasien</th>
                            <th>Tanggal Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($periksa as $pr) : ?>
                            <tr align="center" style="background-color: white;color:black">
                                <td><?php echo 'KD_P 00' . $pr['id_periksa']; ?></td>
                                <td><?php echo $pr['nama_dok']; ?></td>
                                <td><?php echo $pr['nama']; ?></td>
                                <td><?php echo $pr['keluhan']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($pr['tglperiksa'])) ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>