<?php 
        $app = new application;
        $id=$_GET['idkategori'];
       $delete="DELETE FROM `kat_produk` WHERE id_kategori='$id'";
       $app->Deleteproduk($delete);
    
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    

?>