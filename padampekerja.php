<?php
//sambung ke pangkalan data 
include "config.php";
?>
<?php
 
 $no_kp = $_GET['no_kp'];
 $sql = "delete from info_pekerja where no_kp = '$no_kp'";
 $result = mysqli_query($samb, $sql);
 if ($result)
     echo "<script>alert('Berjaya padam rekod')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='index.php'</script>";
?>