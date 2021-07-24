<?php include "koneksi.php";?>
<?php
    $conn->query("insert into guru(Nama) values('".$_POST['nama']."') ");
    header("location:masterguru.php");
?>