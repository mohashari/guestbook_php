<?php
include'koneksi.php';
//include'index.php';
$rows=$_POST['id_tamu'];

$sql="DELETE FROM buku_tamu WHERE id_tamu='".$row."'";
mysqli_query($con,$sql);
print $sql;
//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
                 
?>