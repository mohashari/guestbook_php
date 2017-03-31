<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>..::BUKU TAMU::..</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
   
        <div class="container">
         <a href="../home.php"><span class="glyphicon glyphicon-arrow-left">  </span>  Kembali Ke Menu awal</a>
            <h3><center>BUKU TAMU</center></h3>
            <form class="form-horizontal" action="simpan.php" method="POST">
                <div class="form-group">
                    <label class="label-control col-sm-2">NAMA</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" placeholder="NAMA">        
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="label-control col-sm-2">EMAIL</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" placeholder="EMAIL">        
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="label-control col-sm-2">PESAN</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="pesan" rows="5"></textarea>        
                    </div>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="OK" class="btn btn-success btn-lg">
                    </div>
 </form>
 
    <?php
$sql="SELECT * FROM buku_tamu ORDER BY id_tamu ASC";
$query=mysqli_query($con,$sql);
//print $sql;
$i=0;
while ($row= mysqli_fetch_array($query)){
    $i++;
?>  

<div class="table-responsive">
<table class="" >

    <input class="form-control" type="hidden" name="id_tamu" value="<?php echo $row[0]; ?>">
        <tfr>
        <td>PESAN KE <?php print $i;?> </td>
        
        </tr>
        <tr>
        <td>NAMA :</td>
        <td>    <?php print $row[nama];?></td>
        <!--<td><a href=delete.php?id_tamu=<?php print$rows[0];?>><span class="glyphicon glyphicon-remove-sign">Hapus</span></a></td>-->
        </tr>
        <tr>
            <td>PESAN :</td>
            <td>    <?php print $row[pesan];?></td>
        </tr>
        <br>    


<?php
}
?>
    
</table>
</div>

        </div>
    </body>
</html>