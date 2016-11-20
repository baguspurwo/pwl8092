<?php 
include "koneksi.php";
if ($delete_berita=$_REQUEST['delete_siswa'])
{
	$delete="delete from siswa where siswa_nisn = '$delete_berita'";
	$result=mysql_query($delete) or die (mysql_error());
echo "<script>
		alert('Data Telah Di Hapus !');
		location.href = ('index.php?hal=siswa_admin');
		</script>";
	}
?>