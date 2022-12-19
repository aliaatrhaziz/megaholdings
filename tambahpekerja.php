<?php
//sambung ke pangkalan data
include "config.php"; 

//semak sama ada data dengan ID pengguna nama telah dihantar 
if (isset($_POST['id'])) {
//pembolehubah untuk memegang data yang dihantar 
$id = $_POST['id'];
$no_kp = $_POST['no_kp'];
$nama_pekerja = $_POST['nama_pekerja'];
$jantina = $_POST['jantina']; 
$no_hp = $_POST['no_hp'];


//tambah rekod baru ke dalam table
$sql = "INSERT INTO info_pekerja (id,nama_pekerja,no_kp,jantina,no_hp ) 
VALUES ( '$id','$nama_pekerja','$no_kp', '$jantina', '$no_hp')";

// Melaksanakan pertanyaan sql dengan sambungan ke p.data 
$hasil = mysqli_query($samb, $sql);
// semak untuk melihat jika ada sebarang rekod dalam pangkalan data 
// papar mesej berjaya atau gagal simpan rekod baru
if ($hasil) {
echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
window.location='index.php'</script>";

}else{

echo "<script>alert('PENDAFTARAN AHLI GAGAL!');
window.location='tambahpekerja.php'</script>";
}

} ?>
<html>
 <fieldset>
<legend><h2>PENDAFTARAN AHLI</h2></legend>
<body>
   


        
        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
        <label>ID</label><br>
            <input type="text" name="id" id="id" placeholder="ID Pekerja" anda" size="5" required><br>
            <br>

             <label>Nama Anda</label><br>
            <input type="text" name="nama_pekerja" id="nama" placeholder="Nama anda" size="50" required><br>
            <br>

            <label>Nombor Kad Pengenalan</label><br>
            <input type="text" name="no_kp" placeholder="090887031234" maxlength='12' size="15" ><br>
            <br>

            <label>Jantina</label><br>
            <input required="required" type="radio" name="jantina" value="LELAKI">
            Lelaki
            <input required="required" type="radio" name="jantina" value="PEREMPUAN">
            Perempuan<br>
            <br>

            <label>No Telefon</label><br>
            <input type="text" name="no_hp" id="no_hp" placeholder=""  required><br>
            <br>
            

            <!-- butang daftar & reset -->
            <button type="submit">Tambah</button>
            <button type="reset">Reset</button><br><br>
            *Pilihan hanya dibenarkan sekali sahaja.
        </form>
        <form action="index.php"> <button type="submit">Home</button><br><br>
    </fieldset>
</body>

</html>