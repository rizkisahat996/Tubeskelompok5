<?php
require 'function.php';
include "layout/header.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Admin</h1>
    <div class="mb-3">
        <a href="addadmin.php">
        <button type="button"  class="btn btn-primary btn-icon-split " data-toggle="modal" data-target="#myModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Admin</span>
        </button>
        </a>
        
    </div>

<?php
if (isset($_POST['editadmin'])) {

    $id= $_POST['id'];
    $username= $_POST['username'];
    $name= $_POST['name'];
    $email= $_POST['email'];


    $editadmin= mysqli_query($conn, "update usertable set username='$username', name='$name', email='$email', where id='$id'");
    if ($editadmin) {
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Sukses..!</strong> Data Berhasil Tersimpan.
        </div>';
        echo '<meta http-equiv="refresh" content="2;url=admin.php">';
    }else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Gagal !</strong> Data Tidak Tersimpan.
        </div>';
        echo '<meta http-equiv="refresh" content="5;url=admin.php">';
    }}
    ?>

    <!-- alert hapus barang -->
<?php
if (isset($_POST['hapusadmin'])) {
    $id= $_POST['id'];
    

    $hapusadmin= mysqli_query($conn, "delete from usertable where id='$id'");
    if ($hapusadmin) {
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Sukses..!</strong> Data Berhasil Dihapus.
        </div>';
        echo '<meta http-equiv="refresh" content="20;url=deskripsi.php">';
    }else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Gagal !</strong> Data Tidak Terhapus.
        </div>';
        echo '<meta http-equiv="refresh" content="20;url=deskripsi.php">';
    }
}
?>
        <!-- Tables -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                        $tampiladmin=mysqli_query($conn, "select * from usertable where admin ='admin' ");
                        $i=1;
                        while ($data=mysqli_fetch_array($tampiladmin)) {
                            $name =$data['name'];
                            $username =$data['username'];
                            $email =$data['email'];
                            $id =$data['id'];
                        ?>
                        <tr>
                            <td><?php
                                echo $i;
                                $i++;
                                ?>
                            </td>
                            <td><?=$name;?></td>
                            <td><?=$username;?></td>
                            <td><?=$email;?></td>
                            <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                Edit
                            </button>
                            <input type="hidden" name="hapusadmin" value="<?=$id;?>">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusadmin">
                                Delete
                            </button>
                            </td>
                        </tr>
                        
                            <!-- Modal Edit -->
                            <div class="modal fade" id="exampleModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Edit Barang</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <form method="post" enctype="multipart/form-data">
                                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nama</label>
                                        <input class="form-control" id="recipient-name" value="<?=$name;?>" name="name" required  oninvalid="this.setCustomValidity('Nama Harus Diisi')" oninput="this.setCustomValidity('')">
                                    </div>  
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Username</label>
                                        <input class="form-control" id="recipient-name" value="<?=$username;?>" name="username" required  oninvalid="this.setCustomValidity('Username Harus Diisi')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Email</label>
                                        <input class="form-control" id="recipient-name" value="<?=$email;?>" name="email" required  oninvalid="this.setCustomValidity('Email Harus Diisi')" oninput="this.setCustomValidity('')">
                                    </div>

     
                                        <input type="hidden" name="id" value="<?=$id;?>">
                                        <button type="submit" class="btn btn-primary" name="editadmin">Submit</button>
                                    </div>
                                    </form>                   
                                </div>
                            </div>
                        </div>

 

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusadmin">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Hapus Admin ?</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <form method="post">
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus <?= $name ?> sebagai admin?
                                        <br>
                                        <br>
                                        <input type="hidden" name="id" value="<?=$id;?>">
                                        <button type="submit" class="btn btn-danger" name="hapusadmin">Delete</button>
                                    </div>
                                    </form>                   
                                </div>
                            </div>
                        </div>

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