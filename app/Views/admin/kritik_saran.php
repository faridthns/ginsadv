<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kritik dan Saran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Home</a></li>
              <li class="breadcrumb-item active">Kritik dan Saran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show justify-content-between" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
          <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
    <section class="content">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Deskripsi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 + (5 * ($currentPage - 1));
                foreach($kontak as $k) :
                ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $k['nama_ks']?></td>
                  <td><?= $k['email_ks']?></td>
                  <td><?= $k['dsc_ks']?></td>
                  <td class="col-1">
                    <a href="kritik_saran/delete/<?= $k['id_ks']?>" class="btn btn-danger mb-1" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></a>
                  </td>
                  
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?= $pager->links('kritik&saran', 'bs-pagination')?>
    </section>


<?= $this->endsection(); ?>