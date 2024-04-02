<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row px-5 grid gap-2 d-flex justify-content-center">
      <div class="card col-12 col-md-3">
        <div class="card-body d-flex" style="flex-direction: column;">
          <h5 class="card-title"><i class="nav-icon fa-solid fa-note-sticky me-1"></i>Produk</h5>
          <hr class="m-0">
          <a href="<?= base_url('daftar_produk')?>" class="card-link mt-2 text-dark text-decoration-none">Lihat Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>
      <div class="card col-12 col-md-3">
        <div class="card-body d-flex" style="flex-direction: column;">
          <h5 class="card-title"><i class="fa-solid fa-comment me-1"></i>Review Produk</h5>
          <hr class="m-0">
          <a href="<?= base_url('review_produk')?>" class="card-link mt-2 text-dark text-decoration-none">Lihat Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>
      <div class="card col-12 col-md-3">
        <div class="card-body d-flex" style="flex-direction: column;">
          <h5 class="card-title"><i class="nav-icon fa-solid fa-keyboard me-1"></i>Kritik dan Saran</h5>
          <hr class="m-0">
          <a href="<?= base_url('kritik_saran')?>" class="card-link mt-2 text-dark text-decoration-none">Lihat Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endsection(); ?>