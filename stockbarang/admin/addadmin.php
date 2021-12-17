<?php
include "function.php";
include "layout/header.php";
?>

<div class="container-fluid">


<div class="card shadow my-5 mx-5 ">
    <div class="card-header py-3 mx-4">
        <h5 class="m-0 font-weight-bold text-primary">Add Admin</h5>
    </div>
    
    <?php 
    
        if (isset($_POST['addadmin'])) {
            $username=$_POST['username'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $admin=$_POST['admin'];
            $status=$_POST['status'];
        
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $addadmin=mysqli_query($conn, "insert into usertable (username, name, email, password,admin,status) values('$username','$name','$email','$encpass','$admin','$status')");
            if ($addadmin) {
                echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <strong> Sukses..!</strong> Data Berhasil Tersimpan.
                </div>';
                echo '<meta http-equiv="refresh" content="2;url=addadmin.php">';
            }else {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <strong> Gagal !</strong> Data Tidak Tersimpan.
                </div>';
                echo '<meta http-equiv="refresh" content="2;url=addadmin.php">';
            }
        }
    ?>
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" enctype="multipart/form-data"> 
            <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Username</label>
                    <input id="deskripsi" type="text" name="username" required oninvalid="this.setCustomValidity('Username Harus Diisi')" oninput="this.setCustomValidity('')" class="form-control">
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Nama</label>
                    <input id="deskripsi" type="text" name="name" required oninvalid="this.setCustomValidity('Nama Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control">
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" required oninvalid="this.setCustomValidity('Email Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control" >
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="password" required oninvalid="this.setCustomValidity('Password Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control" >
                </div>
                <div class="form-group mx-3" hidden>
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="admin" value="admin" required oninvalid="this.setCustomValidity('Tipe Barang Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control" >
                </div>
                <div class="form-group mx-3" hidden>
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="status" value="verified" required oninvalid="this.setCustomValidity('Tipe Barang Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control" >
                </div>

                <div class="form-group mx-3 mt-4">
                <button type="submit" class="btn btn-primary  " name="addadmin">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include "layout/footer.php";
?>