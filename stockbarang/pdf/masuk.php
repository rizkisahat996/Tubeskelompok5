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
<p style="text-align: center;"><strong><span style="font-family: verdana, geneva, sans-serif;">Laporan Barang Masuk</span></strong></p>
</div>
<table border="1">
    <thead>
    
        <tr>
            <th>No.</th>
            <th>Tanggal Diterima</th>
            <th>Merk Barang</th>
            <th>Tipe Barang</th>
            <th>Banyak</th>
            <th>Penerima</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        require_once'../includes/koneksi.php';
        $tampildatastok=mysqli_query($koneksi, "select * from barangmasuk m, jenisbarang j where j.id = m.id ");
        $i=1;
        while ($data=mysqli_fetch_array($tampildatastok)) {
            $tanggal =$data['tanggal'];
            $merkbarang =$data['merkbarang'];
            $tipebarang =$data['tipebarang'];
            $qty =$data['qty'];
            $penerima =$data['penerima'];    
        
        $query = mysqli_query ($koneksi, "SELECT * FROM barangmasuk");
        $query1 = mysqli_query ($koneksi, "SELECT * FROM jenisbarang");
        $no = 1;
        $box = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $box[]= $row;
        }
        while ($row1 = mysqli_fetch_assoc($query1)) {
            $box1[]= $row1;
        }?>
        <tr>
                        <td style='text-align:center;'><?php
                            echo $i.".";
                            $i++;
                            ?>
                        </td>
                        <td style='text-align:center;'><?=$tanggal;?></td>
                        <td style='text-align:center;'><?=$merkbarang;?></td>
                        <td style='text-align:center;'><?=$tipebarang;?></td>
                        <td style='text-align:center;'><?=$qty;?></td>
                        <td style='text-align:center;'><?=$penerima;?></td>
                    </tr>
                    <?php
                        };
                    ?>      

            
    </tbody>
</table>