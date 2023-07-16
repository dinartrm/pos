<?php 
        $app = new application;
        $id=$_GET['idsupplier'];
       $delete="DELETE FROM `supplier` WHERE id_supplier='$id'";
       $app->Deleteproduk($delete);
    
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    

?>