<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Adminnnnn</a>
        </div>
      </div>


       <?php 
        if( $_SESSION["roles"] == "1"){ ?>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="dasboard.php?page=app/view_pegawai" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dasboard.php?page=app/view_kategoriproduk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dasboard.php?page=app/view_satuan" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jenis Satuan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dasboard.php?page=app/view_supplier" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Supplier</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dasboard.php?page=app/view_produk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Produk</p>
                        </a>
                    </li>
                    <li class="nav-item"> <!--ubah dari sini-->
                        <a href="dasboard.php?page=app/view_barangMasuk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Barang Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dasboard.php?page=app/view_barangKeluar" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Barang Keluar</p>
                        </a>
                    </li>
                    </ul>
                </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->


        <?php
        }else{
            echo "anda bukan admin";
        }
        ?>
      
    </div>
    <!-- /.sidebar -->
  </aside>