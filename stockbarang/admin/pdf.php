<?php
require 'function.php';
include "layout/header.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-2 text-gray-800">Data Barang</h2>
    <div class="mb-3">
        <a href="../pdf/data.php" class="mr-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-file text-white-50"></i> Tampilkan Data</a>
        <a href="../pdf/pdfdata.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
    </div>

    <h2 class="h3 mb-2 mt-4 text-gray-800">Barang Masuk</h2>
    <div class="mb-3">
        <a href="../pdf/masuk.php" class="mr-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-file text-white-50"></i> Tampilkan Data</a>
        <a href="../pdf/pdfmasuk.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
    </div>

    <h2 class="h3 mb-2 mt-4  text-gray-800">Barang Keluar</h2>
    <div class="mb-3">
        <a href="../pdf/keluar.php" class="mr-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-file text-white-50"></i> Tampilkan Data</a>
        <a href="../pdf/pdfkeluar.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
    </div>

    <?php
$admin = $_SESSION['admin'] == 'operator';
if($admin){
    ?>
    <h2 class="h3 mb-2 mt-4  text-gray-800">Daftar Admin</h2>
    <div class="mb-3">
        <a href="../pdf/admin.php" class="mr-2 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-file text-white-50"></i> Tampilkan Data</a>
        <a href="../pdf/pdfadmin.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
    </div>
<?php } ?>


    <?php
include "layout/footer.php";
?>

   

        

