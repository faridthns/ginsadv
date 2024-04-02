<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100%;">
    <!-- Brand Logo -->
    <div class="row w-100">
      <a href="<?= base_url('admin')?>" class="brand-link col-6 col-md-12">
        <img src="<?=base_url('/assets/image/LOGO G.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ginsadv</span>
      </a>
  
      <a class="brand-link col-6 d-md-none text-end" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-xmark"></i></a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-note-sticky"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('daftar_produk')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Produk</p>
                </a>
              </li>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-keyboard"></i>
              <p>
                Ulasan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('review_produk')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Review Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('kritik_saran')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kritik & Saran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/Auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <span class="badge badge-info right"></span>
              </p>
            </a>
        
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>