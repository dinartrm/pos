<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data Customer</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_costumer"><button type="button" class="btn btn-info">Add Costumer</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Id Costumer</th>
        <th>Nama Costumer</th>
        <th>No Telpon</th>
        <th>Email</th>
        <th>Alamat</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM costummer";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['id_costumer'];?></td>
          <td><?php echo $row['nm_costumer'];?></td>
          <td><?php echo $row['no_telp'];?></td>
          <td><?php echo $row['email'];?></td>          
          <td><?php echo $row['alamat'];?></td>
        </tr>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>