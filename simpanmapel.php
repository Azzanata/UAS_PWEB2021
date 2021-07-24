<?php include "koneksi.php";?>
<?php
    $conn->query("insert into mapel(Nama) values('".$_POST['nama']."') ");
    header("location:mastermapel.php");
?>