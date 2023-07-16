<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data Ketegori produk</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_kategoriproduk"><button type="button" class="btn btn-info">Add Kategori Baru</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama Kategori Produk</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM kat_produk";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nm_kategori'];?></td>
          <td><?php echo $row['keterangan'];?></td>
          <td>
            <a href="dasboard.php?page=app/edit_katProduk&idkategori=<?php echo $row['id_kategori'];?>" class="btn btn-primary">Edit</a>
            <a href="dasboard.php?page=app/delete_katProduk&idkategori=<?php echo $row['id_kategori'];?>" class="btn btn-danger">Delete</a></td>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>