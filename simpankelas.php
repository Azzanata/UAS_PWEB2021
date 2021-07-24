<?php include "koneksi.php";?>
<?php
    $conn->query("insert into kelas(Nama) values('".$_POST['nama']."') ");
    header("location:masterkelas.php");
?>