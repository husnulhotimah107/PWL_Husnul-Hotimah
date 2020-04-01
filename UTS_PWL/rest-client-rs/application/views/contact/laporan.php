<!DOCTYPE html>
<html lang="en">
<head>
     <title>Report Table</title>
     <style type="text/css">
     #outtable{
         padding: 20px;
         border:1px solid #e3e3e3;
         width:654px;
         border-radius: 5px;
     }
     .short{
         width: 50px;
     }
     .normal{
         width: 110px;
     }
     table{
         border-collapse: collapse;
         font-family: arial;
         color:#5E5B5C;
     }
     tread th{
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
                        <th class="short">Id</th>
                        <th class="normal">Nama User </th>
                        <th class="normal">Email User</th>
                        <th class="normal">Pesan</th>
                    </tr>
                </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($contact as $con): ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $con->nama_contact; ?></td>
                    <td><?php echo $con->email_contact; ?></td>
                    <td><?php echo $con->pesan; ?></td>
                </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>
</body>
</html>