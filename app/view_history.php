<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data History</h3>
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
        $tanggalAwal = $_GET['tglAwal'];
        $tanggalAkhir = $_GET['tglAkhir'];
        $no = 1;

        $query = "SELECT * FROM `barang_masuk` WHERE tgl_masuk BETWEEN '$tanggalAwal' AND '$tanggalAkhir' ";
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
    <div class="col-md-2">
        <button type="button" onclick="printTable()"  class="btn btn-info">Print</button>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<script>
  function printTable() {
    window.print();
  }
