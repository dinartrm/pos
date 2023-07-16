<?php 
$app = new application;
$query = "SELECT COUNT(id_supplier) as jml FROM supplier";
$id= $_GET['idsupplier'];
$queryById = "SELECT * FROM supplier WHERE id_supplier='$id'";

// foreach ($app->tampilData($query) as $row) {   
//     $jumlahprodukSaatini = $row['jml'];
//     $idPro = $jumlahprodukSaatini + 1;
//     if($idPro < 10){
//         $idProbaru = "0".$idPro;
//     }else{
//         $idProbaru = $idPro;
//     }
// }

?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Edit Supplier</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php
        foreach ($app->tampilDataById($queryById) as $item) {
            ?>
                 <form name="pegawi" method="POST" action="">
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Supplier</label> <!--ubah-->
                <input type="text" name="nm_supplier" class="form-control" id="exampleInputEmail1" value="<?php echo $item['nm_supplier']?>"> <!--ubah-->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No. Telepon</label>
                <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" value="<?php echo $item['no_telp']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <textarea name="email" class="form-control" id="exampleInputPassword1" cols="30" rows="10"><?php echo $item['email']?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleInputPassword1" cols="30" rows="10"><?php echo $item['alamat']?></textarea>
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
        $nm_supplier = $_POST['nm_supplier'];//ubah
        $no_telp = $_POST['no_telp'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        //ubah

        //jalankan method addPegawai  
        $app->updateSupplier($nm_supplier,$no_telp,$email,$alamat); //ubah
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    }

?>