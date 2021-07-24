<?php include "koneksi.php";?>
<?php
    $conn->query("insert into siswa(NIS, Nama, Kelas) values('".$_POST['nis']."','".$_POST['nama']."','".$_POST['kelas']."') ");
    header("location:mastersiswa.php");
?>