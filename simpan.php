<?php
include 'koneksi.php';
?>
<?php
$data=array($_POST['nama'],$_POST['email'],$_POST['pesan']);
$sql="INSERT INTO buku_tamu (nama,email,pesan) VALUES 
('".$data[0]."',
'".$data[1]."',
'".$data[2]."')";
$queryx=mysqli_query($con,$sql);
//print $sql;
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
                 
?>
