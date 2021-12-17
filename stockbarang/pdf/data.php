<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "stockbarang";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
$sql1       = "select * from customer1";
$q1         = mysqli_query($koneksi,$sql1);
?>
<style>
    th {
        background-color: #dedede;
        color: #333333;
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
</style>

<p style="text-align: center;"><strong><span style="font-family: verdana, geneva, sans-serif;"><u>TI PHONE CELL</u></span></strong></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">Jln. in aja dulu </span></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">Telepon : +62 8123456789 </span></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">E-mail : phonecellti@gmail.com</span></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">__________________________________________________________________________________</span></p>
<p style="text-align: center;"><strong><span style="font-family: verdana, geneva, sans-serif;">Laporan Data Barang</span></strong></p>
<table border="1">
    
    <thead>
    
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Merk Barang</th>
            <th>Tipe Barang</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        require_once'../includes/koneksi.php';
        $tampildatastok=mysqli_query($koneksi, "select * from jenisbarang ");
        $i=1;
        while ($data=mysqli_fetch_array($tampildatastok)) {
            $idb =$data['idbarang'];
            $merkbarang =$data['merkbarang'];
            $tipebarang =$data['tipebarang'];
            $jumlah =$data['jumlah'];
            $ket =$data['ket'];

        ?>
        <tr>
            <td style='text-align:center;'><?php
                echo $i.".";
                $i++;
                ?>
            </td>
            
            <td style='text-align:center;'><?=$idb;?></td>
            <td style='text-align:center;'><?=$merkbarang;?></td>
            <td style='text-align:center;'><?=$tipebarang;?></td>
            <td style='text-align:center;'><?=$jumlah;?></td>
            <td style='text-align:center;'><?php if ($ket==2){
                echo "<p class=\"status2\" >  Available";  
            } else {
                echo "<p class=\"status1\" > Not Available" ;
            } ?></td>
        </tr>
        <?php
            };
        ?>
                         

            
    </tbody>
</table>