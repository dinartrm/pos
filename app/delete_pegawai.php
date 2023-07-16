<?php 
        $app = new application;
        $id=$_GET['idpegawai'];
       $delete="DELETE FROM `pegawai` WHERE id_pegawai='$id'";
       $app->Deleteproduk($delete);
    
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    

?>