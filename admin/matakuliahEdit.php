<?php
   include ('../koneksi/koneksi.php');

   $getKode_mtkul    =$_GET["kode_mtkul"];
   $editMatkul   ="SELECT * FROM matakuliah WHERE kode_mtkul = '$getKode_mtkul'";
   $resultMatkul =mysqli_query($koneksi, $editMatkul);
   $dataMatkul   =mysqli_fetch_array ($resultMatkul);
?>
<h3> EDIT DATA MATAKULIAH </h3>
<br/><hr/><br/>
<p>

<?php
if (!isset($_POST['submit']))
{
    ?>
   <form enctype="multipart/form-data" method="post">
        <table width="100%" border="0">
            <tr>
                <td width="27%">KODE MATA KULIAH</td>
                <td width="4%">:</td>
                <td width="69%"><input type="text" name="kode_mtkul" size="30" value="<?php echo $dataMatkul[0] ?>"
                readonly="readonly"></td>
</tr>
<tr>
    <td height="50">MATA KULIAH</td>
    <td>:</td>
    <td><label>
        <select name="nama_mtkul">
            <option value="">-=PILIH=-</option>
            <option value="Struktur data & Algoritma">STRUKTUR DATA & ALGORITMA</option>
            <option value="Matematika">MATEMATIKA</option>
            <option value="Akuntansi">AKUNTANSI</option>
</select>
</label><br/></td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
    <input id="submit" name="submit" type="submit" value="UBAH"></td>
</tr>
</table>
</form>

<?php
}
else
{
    $kode_mtkul    =$_POST["kode_mtkul"];
    $nama_mtkul   =$_POST["nama_mtkul"];

    //input data matakuliah
    $updateMatkul ="UPDATE matakuliah SET nama_mtkul='$nama_mtkul' WHERE kode_mtkul='$kode_mtkul'";

    $queryMatkul=mysqli_query($koneksi, $updateMatkul);

    if ($queryMatkul)
    {
        echo"<script>alert('Data Berhasil Diubah !') </script>";
        echo"<script type='text/javascript'>window.location='./?adm=matakuliah'</script>";
    }
    else
    {
        echo"<script>alert('Data Gagal Diubah !') </script>";
        echo"<script type='text/javascript'>window.location='./?adm=matakuliah'</script>";
    }
}
?>
<a href="./?adm=matakuliah">&raquo:KEMBALI </a>