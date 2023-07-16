<?php 
$app = new application;
$query = "SELECT COUNT(id_satuan) as jml FROM satuan";
$id= $_GET['idsatuan'];
$queryById = "SELECT * FROM satuan WHERE id_satuan='$id'";

// // foreach ($app->tampilData($query) as $row) {   
// //     $jumlahprodukSaatini = $row['jml'];
// //     $idPro = $jumlahprodukSaatini + 1;
// //     if($idPro < 10){
// //         $idProbaru = "0".$idPro;
// //     }else{
// //         $idProbaru = $idPro;
// //     }
// }

?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Edit Produk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php
        foreach ($app->tampilDataById($queryById) as $item) {
            ?>
                 <form name="pegawi" method="POST" action="">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Satuan</label> <!--ubah-->
                <input type="text" name="namaSatuan" class="form-control" id="exampleInputEmail1" value="<?php echo $item['nm_satuan']?>"> <!--ubah-->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input type="date" name="keterangan" class="form-control" id="exampleInputEmail1" value="<?php echo $item['keterangan']?>">
            </div>  
          
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
            <?php
        }
        
        ?>
    </div>
    <!-- /.card -->



</div>
<?php 
    if (isset($_POST['submit'])) {
        // untuk menerima post dari textfield
        $namaSatuan = $_POST['nm_satuan'];//ubah
        $keterangan = $_POST['keterangan'];
       //ubah

        //jalankan method addPegawai  
        $app->updateSupplier($namaSatuan,$keterangan); //ubah
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    }

?>