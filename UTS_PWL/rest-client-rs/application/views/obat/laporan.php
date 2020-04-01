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
         width: 150px;
     }
     table{
         border-collapse: collapse;
         font-family: arial;
         color:#5E5B5C;
     }
     thread th{
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
                        <th class="normal">Kode Obat</th>
                        <th class="normal">Nama Obat</th>
                        <th class="normal">Jenis Obat</th>
                        <th class="normal">Stok Obat</th>
                    </tr>
                </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($obat as $admin): ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo 'KD_O 00' .  $admin->id_obat; ?></td>
                    <td><?php echo $admin->nama_obat; ?></td>
                    <td><?php echo $admin->jenis_obat; ?></td>
                    <td><?php echo $admin->stok_obat; ?></td>
                </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>
</body>
</html>