<?php
include ('../koneksi/koneksi.php');

$kode_mtkul=$_GET["kode_mtkul"];
$delMatkul  ="DELETE FROM matakuliah WHERE kode_mtkul='$kode_mtkul'";
$resultMatkul  =mysqli_query($koneksi, $delMatkul);

if($resultMatkul)
{
        echo"<script>alert('Data Matakuliah Berhasil Dihapus !') </script>";
        echo"<script type='text/javascript'>window.location='./?adm=matakuliah'</script>";
}
else
{
    echo"<script>alert('Data Matakuliah Gagal Dihapus !') </script>";
        echo"<script type='text/javascript'>window.location='./?adm=matakuliah'</script>";
}
?>