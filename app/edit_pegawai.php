<?php 
$app = new application;
$query = "SELECT COUNT(id_pegawai) as jml FROM pegawai";
$id= $_GET['idpegawai'];
$queryById = "SELECT * FROM pegawai WHERE id_pegawai='$id'";

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
                <label for="exampleInputEmail1">Nama Pegawai</label> <!--ubah-->
                <input type="text" name="nmPegawai" class="form-control" id="exampleInputEmail1" value="<?php echo $item['nm_pegawai']?>"> <!--ubah-->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input type="date" name="ttl" class="form-control" id="exampleInputEmail1" value="<?php echo $item['tgl_lahir']?>">
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <input type="text" name="jenisKelamin" class="form-control" id="exampleInputEmail1" value="<?php echo $item['jsn_kelamin']?>">
            </div> 
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <textarea name="email" class="form-control" id="exampleInputPassword1" cols="30" rows="10"><?php echo $item['email']?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No. Telepon</label>
                <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" value="<?php echo $item['no_telp']?>">
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
        $nmPegawai = $_POST['nm_pegawai'];//ubah
        $ttl = $_POST['tgl_lahir'];
        $jenisKelamin = $_POST['jsn_kelamin'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];//ubah

        //jalankan method addPegawai  
        $app->updateSupplier($nmPegawai,$ttl,$jenisKelamin,$email,$no_telp,$alamat); //ubah
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    }

?>