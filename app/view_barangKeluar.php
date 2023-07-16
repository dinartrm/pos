<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data Barang Keluar</h3>
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
        <th>No.</th>
        <th>Nomor Faktur</th>
        <th>Tanggal Keluar</th>
        <th>Jumlah Barang</th>
        <th>Pegawai</th>
        <th>Produk</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM satuan";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['no_faktur'];?></td>
          <td><?php echo $row['tgl_keluar'];?></td>
          <td><?php echo $row['jml_barang'];?></td>
          <td><?php echo $row['id_pegawai'];?></td>
          <td><?php echo $row['id_produk'];?></td>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>