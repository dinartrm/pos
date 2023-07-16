<?php 
        $app = new application;
        $id=$_GET['idsatuan'];
       $delete="DELETE FROM `satuan` WHERE id_satuan='$id'";
       $app->Deleteproduk($delete);
    
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    

?>