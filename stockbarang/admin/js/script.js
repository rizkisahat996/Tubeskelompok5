window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);

                            <?php
                                $ambildatastock = mysqli_query($conn, "select * from jenisbarang where jumlah < 1");
                                while($fetch=mysqli_fetch_array($ambildatastock)){
                                    $merkbarang = $fetch['merkbarang'];
                                    $tipebarang = $fetch['tipebarang'];
                             ?>