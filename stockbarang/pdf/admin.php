<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "stockbarang";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
?>
<style>
    th {
        background-color: #dedede;
        color: #333333;
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
</style>

<p style="text-align: center;"><strong><span style="font-family: verdana, geneva, sans-serif;"><u>TI PHONE CELL</u></span></strong></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">Jln. in aja dulu </span></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">Telepon : +62 8123456789 </span></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">E-mail : phonecellti@gmail.com</span></p>
<p style="text-align: center;"><span style="font-family: verdana, geneva, sans-serif;">__________________________________________________________________________________</span></p>
<p style="text-align: center;"><strong><span style="font-family: verdana, geneva, sans-serif;">Daftar Data Admin</span></strong></p>
<table border="1">
    
    <thead>
    
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        require_once'../includes/koneksi.php';
        $tampildatastok=mysqli_query($koneksi, "select * from usertable where admin = 'admin' ");
        $i=1;
        while ($data=mysqli_fetch_array($tampildatastok)) {
            $name =$data['name'];
            $username =$data['username'];
            $email =$data['email'];

        ?>
        <tr>
            <td style='text-align:center;'><?php
                echo $i.".";
                $i++;
                ?>
            </td>
            
            <td style='text-align:center;'><?=$name;?></td>
            <td style='text-align:center;'><?=$username;?></td>
            <td style='text-align:center;'><?=$email;?></td>
        </tr>
        <?php
            };
        ?>
                         

            
    </tbody>
</table>