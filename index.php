<?php
//sambung ke pangkalan data 
include "config.php";
?>
<html>
    <style>
        table, tr, td, th{
            border: 3px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
    <fieldset>
<legend><h2>MAKLUMAT PEKERJA MEGA HOLDINGS</h2></legend>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>NAMA PEKERJA</th>
                <th>NO KAD PENGENALAN</th>
                <th>NO TELEFON</th>
                <th>JANTINA</th>
            </tr> 
             <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr> -->
           
            <?php
            $samb= mysqli_connect($host, $user, $password, $database);

            $sql = "SELECT * FROM info_pekerja ORDER BY no_kp";
            $data = mysqli_query($samb, $sql);  
            $id = 1;          
            while ($info_pekerja = mysqli_fetch_array($data)) {
            ?>
            <tr>
               <td><?php echo $id; ?></td>
               
               <td><?php echo $info_pekerja['nama_pekerja']; ?></td>
               <td><?php echo $info_pekerja['no_kp']; ?></td>
               <td><?php echo $info_pekerja['jantina']; ?></td>
               <td><?php echo $info_pekerja['no_hp']; ?></td>
               <td><a href="kemaskinipekerja.php">Kemaskini</a></td>
                <td><a href="padampekerja.php">Padam</a></td>
                <td><a href="tambahpekerja.php">Tambah</a></td>
           </tr>
           <?php $id = $id + 1; } ?>
          
           
        </table>
        </f
    </body>
</html>