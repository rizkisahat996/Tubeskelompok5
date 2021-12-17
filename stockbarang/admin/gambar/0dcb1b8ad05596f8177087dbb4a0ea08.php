<?php
include "layout/header.php";
include "function.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
<div class="mb-3">
    <a href="wyswyg.php">
    <button type="button"  class="btn btn-primary btn-icon-split " data-toggle="modal" data-target="#myModal">
        <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Barang</span>
    </button>
    </a>
</div>

<!-- alert edit barang -->
<?php
if (isset($_POST['updatebarang'])) {
    $idb= $_POST['idb'];
    $merkbarang= $_POST['merkbarang'];
    $tipebarang= $_POST['tipebarang'];
    $deskripsi= $_POST['deskripsi'];


    $editdetail= mysqli_query($conn, "update jenisbarang set merkbarang='$merkbarang', tipebarang='$tipebarang', deskripsi='$deskripsi' where idbarang='$idb'");
    if ($editdetail) {
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Sukses..!</strong> Data Berhasil Tersimpan.
        </div>';
        echo '<meta http-equiv="refresh" content="2;url=deskripsi.php">';
    }else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Gagal !</strong> Data Tidak Tersimpan.
        </div>';
        echo '<meta http-equiv="refresh" content="2;url=deskripsi.php">';
    }
}
?>

<!-- alert hapus barang -->
<?php
if (isset($_POST['hapusbarang'])) {
    $idb= $_POST['idb'];
    
    $hapusbarang= mysqli_query($conn, "delete from jenisbarang where idbarang='$idb'");
    if ($hapusbarang) {
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
                           
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID Barang</th>
                        <th>Gambar Barang </th>
                        <th>Jenis Barang </th>
                        <th>Tipe Barang </th>
                        <th>Keterangan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
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
                            $ket =$data['ket'];
                            $deskripsi =$data['deskripsi'];

                            //cek ada gambar gak
                            $image = $data['image'];
                            if($image==null){
                                //jika gak ada gambar
                                $img = 'Tidak ada gambar';
                            }else{
                                //jika ada gambar
                                $img = '<img src="gambar/'.$image.'" class="zoomable">';
                            }
                        ?>
                        <tr>
                            <td>
                                <?php
                                    echo $i;
                                    $i++;
                                ?>
                            </td>
                            <td><?=$idb;?></td>
                            <td><?=$img;?></td>
                            <td><?=$merkbarang;?></td>
                            <td><?=$tipebarang;?></td>
                            <td><?=$deskripsi;?></td>
                            <td><?=$ket;?></td>
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idb;?>">
                                Edit
                            </button>
                            <input type="hidden" name="idbaranghapus" value="<?=$idb;?>">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?=$idb;?>">
                                Hapus
                            </button>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit<?=$idb;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Edit Barang</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <form method="post">
                                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Merk Barang:</label>
                                        <input class="form-control" id="recipient-name" value="<?=$merkbarang;?>" name="merkbarang" required  oninvalid="this.setCustomValidity('Nama Barang Harus Diisi')" oninput="this.setCustomValidity('')">
                                    </div>  
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Tipe Barang:</label>
                                        <input class="form-control" id="recipient-name" value="<?=$tipebarang;?>" name="tipebarang" required  oninvalid="this.setCustomValidity('Nama Barang Harus Diisi')" oninput="this.setCustomValidity('')">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Spesifikasi Barang</label>
                                        <textarea class="form-control" id="recipient-name"  name="deskripsi"  value="<?php echo"$deskripsi"?>
                                        </textarea>
                                        <script>
                                            tinymce.init({
                                            selector: 'textarea',
                                            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                                            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
                                            toolbar_mode: 'floating',
                                            tinycomments_mode: 'embedded',
                                            tinycomments_author: 'Author name',
                                            });
                                        </script>
                                    </div>       
                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                        <button type="submit" class="btn btn-primary" name="updatebarang">Submit</button>
                                    </div>
                                    </form>                   
                                </div>
                            </div>
                        </div>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapus<?=$idb;?>">
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
                                        <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus Barang</button>
                                    </div>
                                    </form>                   
                                </div>
                            </div>
                        </div>
                        <?php
                            };
                        ?>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
                
 <?php
include "layout/footer.php";
?>