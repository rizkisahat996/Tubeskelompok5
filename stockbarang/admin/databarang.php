<?php
include "function.php";
include "layout/header.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- alert stock habis -->
    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
    <?php
        $ambildatastock = mysqli_query($conn, "select * from jenisbarang where jumlah < 1 AND ket = 2 ");
        while($fetch=mysqli_fetch_array($ambildatastock)){
            $merkbarang = $fetch['merkbarang'];
            $tipebarang = $fetch['tipebarang'];
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong></strong> Perhatian!</strong> Stock <?=$merkbarang;?> <?=$tipebarang;?> telah habis.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php
        }
    ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Barang</th>
                            <th>Jenis Barang </th>
                            <th>Tipe Barang </th>
                            <th>Jumlah Barang</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                        $tampildatastok=mysqli_query($conn, "select * from jenisbarang");
                        $i=1;
                        while ($data=mysqli_fetch_array($tampildatastok)) {
                            $idb =$data['idbarang'];
                            $merkbarang =$data['merkbarang'];
                            $tipebarang =$data['tipebarang'];
                            $jumlah =$data['jumlah'];
                            $ket =$data['ket'];

                        ?>
                        <tr>
                            <td><?php
                                echo $i;
                                $i++;
                                ?>
                            </td>
                            
                            <td><?=$idb;?></td>
                            <td><?=$merkbarang;?></td>
                            <td><?=$tipebarang;?></td>
                            <td><?=$jumlah;?></td>
                            <td><?php if ($ket==2){
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
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include "layout/footer.php";
?>
