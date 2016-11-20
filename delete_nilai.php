<?php 
include "koneksi.php";
if ($delete_nilai=$_REQUEST['delete_nilai'])
{
	$delete="delete from nilai where siswa_nisn = '$delete_nilai'";
	$result=mysql_query($delete) or die (mysql_error());
echo "<script>
		alert('Data telah dihapus');
		location.href = ('index.php?hal=nilai_admin');
		</script>";
	}
?>