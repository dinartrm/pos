<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data Produk</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_produk"><button type="button" class="btn btn-info">Add Produk Baru</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Id Produk</th>
        <th>Nama Produk</th>
        <th>Stok</th>
        <th>Satuan</th>
        <th>Kategori Produk</th>
        <th>Supplier</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
        
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT a.id_produk,a.nm_produk,a.id_supplier,d.nm_supplier,a.deskripsi,a.stok,a.id_satuan,b.nm_satuan,a.id_kategori,c.nm_kategori FROM produk a INNER JOIN satuan b ON a.id_satuan = b.id_satuan INNER JOIN kat_produk c ON a.id_kategori = c.id_kategori INNER JOIN supplier d on a.id_supplier = d.id_supplier";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['id_produk'];?></td>
          <td><?php echo $row['nm_produk'];?></td>
          <td><?php echo $row['stok'];?></td>          
          <td><?php echo $row['nm_satuan'];?></td>
          <td><?php echo $row['nm_kategori'];?></td>
          <td><?php echo $row['nm_supplier'];?></td>
          <td><?php echo $row['deskripsi'];?></td>
          <td>
          <a href="dasboard.php?page=app/edit_produk&idproduk=<?php echo $row['id_produk'];?>" class="btn btn-primary">Edit</a>
            <a href="dasboard.php?page=app/delete_produk&idproduk=<?php echo $row['id_produk'];?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>