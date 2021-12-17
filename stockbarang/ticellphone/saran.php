<?php

require_once '../admin/includes/koneksi.php';

?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$massage =$_POST['massage'];

$sql = "INSERT INTO saran (name,email,subject,massage)VALUES('$name', '$email', '$subject', '$massage')";
if($koneksi->query($sql)===TRUE){
    echo "<script>alert('TErimakasih atas Saran dan Kritikannya');history.go(-1) </script> ";    
} else {
    echo "Terjadi kesalahan:". $sql."<br/>".$koneksi->error;
}
$koneksi->close();

?>