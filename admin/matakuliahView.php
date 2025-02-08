<?php
include "../koneksi/koneksi.php";

$queryMatkul   ="SELECT * FROM matakuliah";
$resultMatkul   =mysqli_query ($koneksi, $queryMatkul);
$countMatkul    =mysqli_num_rows ($resultMatkul);
?>

<h3> DATA MATAKULIAH </h3>
<hr/><br/>
<a href="./?adm=matakuliahAdd"><input name="add" type="submit" class="buttonadm" value="TAMBAH DATA MATAKULIAH"/></a>
<br>
<br>
<table border="1" id="boxtable">
    <!-- TABEL MASTER DOSEN -->
     <tr>
        <th>KODE MATA KULIAH</th>
        <th>NAMA MATA KULIAH</th>
        <th>AKSI</th>
</tr>
<?php
if ($countMatkul > 0)
{
    while($dataMatkul=mysqli_fetch_array($resultMatkul, MYSQLI_NUM))
 {
?>

<tr class="add">
    <td class="value"><?php echo"$dataMatkul[0]"; ?></td>
    <td class="value"><?php echo"$dataMatkul[1]"; ?></td>
    <td class="value" >
        <a href="./?adm=matakuliahEdit&kode_mtkul=<?php echo"$dataMatkul[0]"; ?>">Edit</a> |
        <a href="./?adm=matakuliahDelete&kode_mtkul=<?php echo"$dataMatkul[0]"; ?>">Hapus</a> |
    <a href="./?adm=pelajarEdit&id_pelajar=<?php echo "$datapelajar[0]"; ?>">
 </td>
</tr>

<?php
}
}
else 
{
    echo"<tr>
     <td colspan='9' align='center' height='20'>
     <div> Belum ada data matakuliah</div></td>
     </tr>";
}
echo"</table>";