<?php
include "function.php";
include "layout/header.php";
?>

<div class="container-fluid">
<!-- kode barang -->
<?php
	$query = mysqli_query($conn, "SELECT max(idbarang) as kodeTerbesar FROM jenisbarang");
    $data = mysqli_fetch_array($query);
    $kodeBarang = $data['kodeTerbesar'];
                    
    $urutan = (int) substr($kodeBarang, 3, 3);
                    
    $urutan++;
                    
    $huruf = "HP";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);

?>

<div class="card shadow my-5 mx-5 ">
    <div class="card-header py-3 mx-4">
        <h5 class="m-0 font-weight-bold text-primary">Barang Baru</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" enctype="multipart/form-data"> 
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input id="deskripsi" type="text" name="idbarang" required oninvalid="this.setCustomValidity('ID Barang Harus Diisi')" oninput="this.setCustomValidity('')" value="<?php echo $kodeBarang ?>" class="form-control">
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Merk Barang</label>
                    <input type="text" name="merkbarang" required oninvalid="this.setCustomValidity('Nama Barang Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control" >
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Tipe Barang</label>
                    <input type="text" name="tipebarang" required oninvalid="this.setCustomValidity('Tipe Barang Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control" >
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Gambar Barang</label>
                    <br><input type="file" name="file" id="file">
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <select name="ket" class="form-control" id="exampleFormControlSelect1" oninvalid="this.setCustomValidity('Tipe Barang Harus Diisi')" oninput="this.setCustomValidity('')"  class="form-control">
                        <option value="2" id="Available">Available</option>
                        <option value="1" id="Not available">Not Available</option>
                    </select>
                </div>
                <div class="form-group mx-3">
                    <label for="exampleInputEmail1">Spesifikasi Barang</label>
                    <textarea name="deskripsi" id="deskripsi">
                    <p style="text-align: center;"><span style="text-decoration: underline; font-family: verdana, geneva, sans-serif;">DESKRIPSI PRODUK</span></p>
                    <ul style="list-style-type: initial;">
                    <li style="list-style-type: circle;">Processor :</li>
                    <li style="list-style-type: circle;">CPU:&nbsp;</li>
                    <li style="list-style-type: circle;">OS :&nbsp;</li>
                    <li style="list-style-type: circle;">Ukuran Layar :</li>
                    <li style="list-style-type: circle;">Kamera :&nbsp;</li>
                    <li style="list-style-type: circle;">Memori:</li>
                    <li style="list-style-type: circle;">SIM:</li>
                    <li style="list-style-type: circle;">Baterai:</li>
                    <li style="list-style-type: circle;">Berat:&nbsp;</li>
                    </ul>
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
                <div class="form-group mx-3 mt-4">
                <button type="submit" class="btn btn-primary  " name="barangbaru">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({ selector:'#deskripsi', });
</script>

<?php
include "layout/footer.php";
?>