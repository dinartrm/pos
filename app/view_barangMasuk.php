<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data Barang Masuk</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_satuan"><button type="button" class="btn btn-info">Add Satuan Baru</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Nomor Faktur</th>
        <th>Supplier</th>
        <th>Produk</th>
        <th>Tanggal Masuk</th>
        <th>Jumlah Barang</th>
        <th>Pegawai</th>
       
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM barang_masuk";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['no_faktur'];?></td>
          <td><?php echo $row['id_supplier'];?></td>
          <td><?php echo $row['id_produk'];?></td>
          <td><?php echo $row['tgl_masuk'];?></td>
          <td><?php echo $row['jml_barang'];?></td>
          <td><?php echo $row['id_pegawai'];?></td>
      </tbody>
      <?php $no++; } ?>
    </table>
    <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Tambah Jenis Satuan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="pegawi" method="POST" action="">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Awal</label>
                <input type="text" name="tglAwal" class="form-control" id="exampleInputPassword1" placeholder="Nama costumer">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Akhir</label>
                <input type="text" name="tglAkhir" class="form-control" id="exampleInputPassword1" placeholder="Nama costumer">

            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
    <?php 
   if (isset($_POST['submit'])) {
    // Untuk menerima post dari textfield
    $tglAwal = $_POST['tglAwal'];
    $tglAkhir = $_POST['tglAkhir'];

    // Jalankan method addPegawai   
    // Redirect link
    $redirectURL = "dasboard.php?page=app/view_history&tglAwal=" . $tglAwal . "&tglAkhir=" . $tglAkhir;
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $redirectURL . '">';
}


?>
    <!-- /.card -->



</div>
  </div>
  <!-- /.card-body -->
</div>