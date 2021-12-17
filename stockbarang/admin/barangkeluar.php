<?php
require 'function.php';
include "layout/header.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Barang Keluar</h1>
    <div class="mb-3">
        <button type="button"  class="btn btn-primary btn-icon-split " data-toggle="modal" data-target="#myModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Barang</span>
        </button>
    </div>

    <?php  
    //menambah barang keluar
    if (isset($_POST['barangkeluar'])) {
        $pilihbarang=$_POST['pilihbarang'];
        $penerima=$_POST['penerima'];
        $qty=$_POST['qty'];

        $cekstoksekarang=mysqli_query($conn, "select * from jenisbarang where id='$pilihbarang'");
        $ambildata=mysqli_fetch_array($cekstoksekarang);

        $stoksekarang=$ambildata['jumlah'];
        $totalsetelahdikurang=$stoksekarang-$qty;

        $addtokeluar=mysqli_query($conn, "insert into barangkeluar (id, qty, penerima) values('$pilihbarang','$qty','$penerima')");
        $updatestokkeluar=mysqli_query($conn, "update jenisbarang set jumlah='$totalsetelahdikurang' where id='$pilihbarang'");
        if ($addtokeluar&&$updatestokkeluar) {
            echo '<div class="alert alert-success alert-dismissible" role="alert">
            <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <strong> Sukses..!</strong> Data Berhasil Tersimpan.
            </div>';
            echo '<meta http-equiv="refresh" content="2;url=barangkeluar.php">';
        
        }else {
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
            <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <strong> Gagal !</strong> Data Tidak Tersimpan.
            </div>';
            echo '<meta http-equiv="refresh" content="2;url=barangmasuk.php">';
        }
    }
        ?>

        <!-- Tables -->
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
                            <th>Tanggal</th>
                            <th>Merk Barang </th>
                            <th>Tipe Barang </th>
                            <th>Jumlah Barang</th>
                            <th>Penerima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                        $tampildatastok=mysqli_query($conn, "select * from barangkeluar m, jenisbarang j where j.id = m.id ");
                        $i=1;
                        while ($data=mysqli_fetch_array($tampildatastok)) {
                            $tanggal =$data['tanggal'];
                            $merkbarang =$data['merkbarang'];
                            $tipebarang =$data['tipebarang'];
                            $qty =$data['qty'];
                            $penerima =$data['penerima'];
                            

                        ?>
                        <tr>
                            <td><?php
                                echo $i;
                                $i++;
                                ?>
                            </td>
                            <td><?=$tanggal;?></td>
                            <td><?=$merkbarang;?></td>
                            <td><?=$tipebarang;?></td>
                            <td><?=$qty;?></td>
                            <td><?=$penerima;?></td>
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
<!-- alert hapus barang -->
<?php
if (isset($_POST['hapuskeluar'])) {
    $idb= $_POST['idb'];
    

    $hapuskeluar= mysqli_query($conn, "delete from barangkeluar where id='$id'");
    if ($hapuskeluar) {
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Sukses..!</strong> Data Berhasil Dihapus.
        </div>';
        echo '<meta http-equiv="refresh" content="2;url=deskripsi.php">';
    }else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Gagal !</strong> Data Tidak Terhapus.
        </div>';
        echo '<meta http-equiv="refresh" content="2;url=deskripsi.php">';
    }
}
?>
 <!-- Modal Hapus -->
 <div class="modal fade" id="hapus1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Hapus Barang ?</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <form method="post">
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus <?=$merkbarang;?> <?=$tipebarang;?> ?
                                        <br>
                                        <br>
                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                        <button type="submit" class="btn btn-danger" name="hapuskeluar">Hapus Barang</button>
                                    </div>
                                    </form>                   
                                </div>
                            </div>
                        </div>                       
<!-- Modal tambah barang -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Barang Keluar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Jumlah Barang:</label>
                    <select name="pilihbarang" class="form-control">
                        <option value=""></option>
                        <?php
                            $ambilsemuadata=mysqli_query($conn, "select * from jenisbarang");
                            while ($fetcharray=mysqli_fetch_array($ambilsemuadata)) {
                                    $tipebarangselect=$fetcharray['tipebarang'];
                                    $idbarangselect=$fetcharray['id'];
                                    $merkbarangselect=$fetcharray['merkbarang'];
                        ?>
                        <option value="<?=$idbarangselect;?>"><?=$merkbarangselect;?>--<?=$tipebarangselect;?></option>
                        <?php        
                            } 
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Jumlah Barang:</label>
                    <input type="number" class="form-control" id="recipient-name" name="qty" required  oninvalid="this.setCustomValidity('Nama Barang Harus Diisi')" oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Penerima Barang:</label>
                    <input  class="form-control" id="recipient-name" name="penerima" required  oninvalid="this.setCustomValidity('Nama Barang Harus Diisi')" oninput="this.setCustomValidity('')">
                </div>
                <button type="submit" class="btn btn-primary" name="barangkeluar">Submit</button>
            </div>
            </form>                     
        </div>
    </div>
</div>

<?php
include "layout/footer.php";
?>
