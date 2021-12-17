<?php
//membuat koneksi ke database
    $host = 'localhost' ;
    $user = 'root' ;
    $pass = '' ;
    $database = 'stockbarang' ;

$conn = mysqli_connect($host, $user, $pass, $database) ;

if ($conn -> connect_error) {
    die("Koneksi Gagal : ".$conn->connect_error) ;
}


if (isset($_POST['barangbaru'])) {
    $idb=$_POST['idbarang'];
    $image=$_POST['image'];
    $merkbarang=$_POST['merkbarang'];
    $tipebarang=$_POST['tipebarang'];
    $deskripsi=$_POST['deskripsi'];
    $ket=$_POST['ket'];

    //ekstensi gambar
$allowed_extension = array('png','jpg');

//ambil nama gambar
$nama = $_FILES['file']['name'];
$dot = explode('.',$nama);

//ambil ekstensi 
$ekstensi = strtolower(end($dot));

//ukuran gambar
$ukuran = $_FILES['file']['size'];

//ambil lokasi file
$file_tmp = $_FILES['file']['tmp_name'];

//enkripsi file
$image = md5(uniqid($nama,true) . time()). '.'.$ekstensi;






if($hitung <1){

    //upload
    if(in_array($ekstensi,$allowed_extension) === true){
        //validasi ukuran
        if($ukuran < 15000000){
            move_uploaded_file($file_tmp,'gambar/'.$image);

            $addtotable=mysqli_query($conn, "insert into jenisbarang (idbarang, image, merkbarang, tipebarang,ket, deskripsi) values('$idb','$image','$merkbarang','$tipebarang','$ket','$deskripsi')");
            if ($addtotable) {
                header('location:deskripsi.php');
            }else {
                echo 'Gagal';
                header('location:jenisbarang.php');
            }
        }else{
            //kalau ukuran kebesaran
            echo 
            '<script>
                alert("File kebesaran");
                window.location.href="wyswyg.php";
            </script>';
        }
    }else{
        //kalau bukan jpg
        echo 
            '<script>
                alert("File harus jpg/png");
                window.location.href="wyswyg.php";
            </script>';
    }
}
    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM jenisbarang WHERE merkbarang='$merkbarang' and tipebarang='$tipebarang'"));
    if ($cek > 0){
        header('location:deskripsi.php');
    }else {
        $addtotable=mysqli_query($conn, "insert into jenisbarang (idbarang, image, merkbarang, tipebarang,ket, deskripsi) values('$idb','$image','$merkbarang','$tipebarang','$ket','$deskripsi')");
        if ($addtotable) {
            header('location:deskripsi.php');
        }else {
            echo 'Gagal';
            header('location:jenisbarang.php');
        }
    }
}


 //menyiapkan validasi gambar yang akan di upload


 
//
 
 
//mulai validasi
//cek ektensi gambar




?>


  

