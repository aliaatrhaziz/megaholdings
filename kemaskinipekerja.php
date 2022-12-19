<?php 
include "config.php"; 
if (isset($_POST['no_kp'])) {
$nama_pekerja = $_POST['nama_pekerja']; 
$no_kp = $_POST['no_kp']; 
$no_hp = $_POST['no_hp']; 
$jantina = $_POST['jantina']; 
 
$samb = mysqli_connect($host, $user, $password, $database);
$sql = "UPDATE info_pekerja SET nama_pekerja='$nama_pekerja', no_kp='$no_kp', no_hp='$no_hp', jantina='$jantina'  WHERE no_kp=$no_kp";

$hasil = mysqli_query($samb, $sql); 
if ($hasil) {
echo "<script>alert(' BERJAYA');
window.location='index.php'</script>";

}else{
echo "<script>alert('GAGAL!'); 
window.location='kemaskinipekerja.php'</script>";
}
$no_kp = $_POST['no_kp'];
$sql = "SELECT * FROM info_pekerja WHERE no_kp = '$no_kp'";
$hasil = mysqli_query($samb, $sql);
while($megaholdings = mysqli_fetch_array($hasil)){
    $id = $info_pekerja['id']; 
    $nama_pekerja = $info_pekerja['nama_pekerja']; 
    $no_kp = $info_pekerja['no_kp']; 
    $no_hp = $info_pekerja['no_hp']; 
    $jantina = $info_pekerja['jantina']; 
}
}
?>
<html>
    <fieldset>
<legend><h2>MAKLUMAT PEKERJA SYARIKAT MEGA HOLDINGS</h2></legend>

<body>
        <form method="POST">
        <table>
                <tr>
                    <td>Nama pekerja</td>
            <td><input type="text" name="nama_pekerja" placeholder="Nama anda" size="50" required></td></tr>
            <tr>
                <td>No KP</td>
            <td> <input type="text" name="no_kp"  maxlength='50' size="15" o></td>
           </tr>
            <tr>
            <td>No HP</td>
            <td><input type="text" name="no_hp"  maxlength='50' size="15" o></td></tr>
            <tr>
            <td>Jantina</td><br>
            <td><input type="text" name="jantina"  maxlength='50' size="15" o></td></tr>
           </table>
           <br>
           <button type="submit">Kemaskini</button>
            

        </form>
    </fieldset>
</body>
