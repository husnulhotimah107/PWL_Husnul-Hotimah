<!DOCTYPE html>
<html lang="en">
<head>
     <title>Report Table</title>
     <style type="text/css">
     #outtable{
         padding: 20px;
         border:1px solid #e3e3e3;
         width:600px;
         border-radius: 5px;
     }
     .short{
         width: 50px;
     }
     .normal{
         width: 90px;
     }
     table{
         border-collapse: collapse;
         font-family: arial;
         color:#5E5B5C;
     }
     thead th{
         text-align: left;
         padding: 10px;
     }
     tbody td{
         border-top: 1px solid #e3e3e3;
         padding: 10px;
     }
     tbody tr:nth-child(even){
         background: #F6F5FA;
     }
     tbody tr:hover{
         background: #EAE9F5
     }
     </style>
</head>
<body>
    <!-- In production served. If you choose this, then comment the local server and uncomment this one -->
    <!-- <img src="?php // echo $_SERVER['DOCUMENT_ROOT'],"/media/dist/img/no-signal.png"; ?>" alt=""> -->
    <!-- In your local server -->
    <!-- <img src="<?php echo $_SERVER['DOCUMENT_ROOT']."/ci-dompdf/dist/img/no-signal.png"; ?>" alt=""> -->
        <div id="outtable">
            <table>
                <thead>
                    <tr>
                        <th class="short">No</th>
                        <th class="normal">Kode Transaksi</th>
                        <th class="normal">Nama Pasien</th>
                        <th class="normal">Nama Dokter</th>
                        <th class="normal">Nama Obat</th>
                        <th class="normal">Biaya</th>
                        <th class="normal">Tanggal Transaksi</th>
                    </tr>
                </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($transaksi as $admin): ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo 'KD_T 00' .  $admin->id_transaksi; ?></td>
                    <td><?php echo $admin->nama; ?></td>
                    <td><?php echo $admin->nama_dok; ?></td>
                    <td><?php echo $admin->nama_obat; ?></td>
                    <td><?php echo $admin->biaya; ?></td>
                    <td><?php echo $admin->tgl_transaksi; ?></td>
                </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>
</body>
</html>