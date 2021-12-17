
<?php

require 'function.php';
include "layout/header.php";



$get1 = mysqli_query($conn,"select * from barangmasuk");
$count1 = mysqli_num_rows($get1);
$get2 = mysqli_query($conn,"select * from barangkeluar");
$count2 = mysqli_num_rows($get2);
$get3 = mysqli_query($conn,"select * from jenisbarang");
$count3 = mysqli_num_rows($get3);
$get4 = mysqli_query($conn,"select * from usertable where admin = 'admin'");
$count4 = mysqli_num_rows($get4);

?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="databarang.php">
                            <div class="card border-left- shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                                Data Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?="$count3" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                            <a href="deskripsi.php">
                            <div class="card border-left- shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                                Deskripsi Barang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tag fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="barangmasuk.php">
                            <div class="card border-left- shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                                Barang Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?="$count1" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-folder-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="barangkeluar.php">
                            <div class="card border-left- shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                                Barang Keluar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?="$count2" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-folder-minus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    

                    <!-- Content Row -->
                    <?php
$admin = $_SESSION['admin'] == 'operator';
if($admin){
    ?>
                 
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mx-auto  mb-4">
                            <a href="admin.php">
                            <div class="card border-left- shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                               Daftar Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?="$count4" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    
<?php } ?>


                    <!-- Content Row -->
                    <div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Stock Barang</h6>
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
</div>

<?php
include "layout/footer.php";
?>