<?php
require '../admin/function.php';
include "layout/header.php";
?>

                <!--Begin page content -->
                <div class="container-fluid">

                <!-- page heading -->
                <h1 class="h3- mb-4 text-gray-800">Edit Profile</h1>
                <div class="row">
                    <div class="col-lg-8">

                    <?php
                    

    $id= $_POST['id'];
    $username= $_POST['username'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    
    $tampildatastok=mysqli_query($conn, "select * from usertable");
    $editprofile= mysqli_query($conn, "update usertable set username='$username', name='$name', email='$email', password='$password' where id='$id'");
    if ($editprofile) {
        echo '<div class="alert alert-success alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Sukses..!</strong> Data Berhasil Tersimpan.
        </div>';
        echo '<meta http-equiv="refresh" content="20;url=profile.php">';
    }else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button  type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <strong> Gagal !</strong> Data Tidak Tersimpan.
        </div>';
        echo '<meta http-equiv="refresh" content="2;url=deskripsi.php">';
    }

    ?>



                       <form action="" method="post" id="edit<?=$id;?>" enctype="multipart/multipart/form-data">
                       <div class="form-group row">
                           <label for="email" class="col-sm-2 col-form-label">Username</label>
                           <div class="col-sm-10">
                               <input  value="<?=$username;?>"  type="text"class="form-control" id="username" name="username">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"id="name" name="name">
                            </div>
                        </div>
                       <div class="form-group row">
                           <label for="email" class="col-sm-2 col-form-label">Email</label>
                           <div class="col-sm-10">
                               <input value="<?=$email;?>" required  oninvalid="this.setCustomValidity('Nama Barang Harus Diisi')" oninput="this.setCustomValidity('')" type="text"class="form-control" id="email" name="email">
                            </div> 
                        </div>
                        <div class="form-group row">
                           <label for="email" class="col-sm-2 col-form-label">Password</label>
                           <div class="col-sm-10">
                               <input type=""class="form-control" id="password" name="password">
                            </div> 
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-2">Picture</div>
                          <div class="col-sm-10">
                              <div class="row">
                                  <div class="col-sm-3">
                                     <img src="" class="img-thumbnail">
                                  </div>
                                  <div class="col-sm-9">
                                      <input type="file" class="custom-file-input" id="image" name="image">
                                      <label class="custom-file-label" for="image">Choose File</label>
                                  </div>

                              </div>
                          </div>
        
                        </div>
                        
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="editprofile" class="btn btn-primary">Edit</button>
                    </div> 
                </div>



                </div>