<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tampil Data Pegawai</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Pemilik Akun</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT a.id_users, b.nm_pegawai, a.username, a.password, a.roles 
        FROM users a
        INNER JOIN pegawai b ON a.id_pegawai = b.id_pegawai";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nm_pegawai'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><?php if( $row['roles'] == 1){
            echo "admin";
          }else{
            echo"user";
          }?></td>
        </tr>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>