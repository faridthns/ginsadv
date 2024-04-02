<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <button type="button" class="btn btn-primary float-end my-4" data-bs-toggle="modal" data-bs-target="#modal-tambah">
        <i class="fa-solid fa-plus me-2"></i>Tambah Produk
      </button>

      <!-- Modal -->
      <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
            </div>
            <div class="modal-body">
              <form action="admin/tambah" method="post" enctype="multipart/form-data">
                <div class="nama_produk mb-3">
                  <label class="form-label fw-normal">Nama Produk :</label>
                  <input type="text" class="form-control" name="nama_produk">
                </div>
                <div class="desc mb-3">
                  <label class="form-label fw-normal">Deskripsi :</label>
                  <textarea type="text" class="form-control" name="dsc_produk"></textarea>
                </div>
                <div class="row">
                  <div class="harga mb-3 col-6">
                    <label class="form-label fw-normal">Harga (Rp.) :</label>
                    <input type="text" class="form-control" name="harga_produk">
                  </div>
                  <div class="stok mb-3 col-6">
                    <label class="form-label fw-normal">Stok :</label>
                    <input type="text" class="form-control" name="stok_produk">
                  </div>
                </div>
                <div class="foto mb-3">
                  <label class="form-label fw-normal">Foto :</label>
                  <input type="file" class="form-control" name="foto_produk">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <table class="table">
      <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show justify-content-between" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
          <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col" class="text-nowrap">Nama Produk</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Foto</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 + (5 * ($currentPage - 1));
            foreach($produk as $p) :
            ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $p['nama_produk']?></td>
              <td><?= $p['dsc_produk']?></td>
              <td><?= $p['harga_produk']?></td>
              <td><?= $p['stok_produk']?></td>
              <td><img src="/assets/image/<?= $p['foto_produk']?>" height="100" alt="<?= $p['foto_produk']?>"></td>
              <td class="col-1">
                <a class="btn btn-success edit-button btn-edit mb-1" data-id="<?= $p['id_produk']?>" data-name="<?= $p['nama_produk']?>" data-desc="<?= $p['dsc_produk']?>" data-harga="<?= $p['harga_produk']?>" data-stok="<?= $p['stok_produk']?>" data-foto="<?= $p['foto_produk']?>" data-bs-toggle="modal" data-bs-target="#modal-edit" title="Edit">
                  <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="daftar_produk/delete/<?= $p['id_produk']?>" class="btn btn-danger mb-1" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?= $pager->links('daftar_produk', 'bs-pagination')?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-edit" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Produk</h1>
            </div>
            <div class="modal-body">
              <form action="admin/edit" method="post" enctype="multipart/form-data">
                <input class="foto_produk" type="hidden" name="fotoLama">
                <input class="id_produk" type="hidden" name="id_produk">
                <div class="nama_produk mb-3">
                  <label class="form-label fw-normal">Nama Produk :</label>
                  <input type="text" class="form-control nama_produk" name="nama_produk">
                </div>
                <div class="desc mb-3">
                  <label class="form-label fw-normal">Deskripsi :</label>
                  <textarea type="text" class="form-control desc_produk" name="dsc_produk"></textarea>
                </div>
                <div class="row">
                  <div class="harga mb-3 col-md-6">
                    <label class="form-label fw-normal">Harga :</label>
                    <input type="number" class="form-control harga_produk" name="harga_produk">
                  </div>
                  <div class="stok mb-3 col-md-6">
                    <label class="form-label fw-normal">Stok :</label>
                    <input type="text" class="form-control stok_produk" name="stok_produk">
                  </div>
                </div>
                <div class="foto mb-3">
                  <label class="form-label fw-normal">Foto :</label>
                  <input type="file" class="form-control foto_produk" name="foto_produk" accept="image/*">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
<script>
      $(document).ready(function(){
          // get Edit Product
          $('.btn-edit').on('click',function(){
              // get data from button edit
              const id = $(this).data('id');
              const name = $(this).data('name');
              const desc = $(this).data('desc');
              const harga = $(this).data('harga');
              const stok = $(this).data('stok');
              const foto = $(this).data('foto');
              // Set data to Form Edit
              $('.id_produk').val(id);
              $('.nama_produk').val(name);
              $('.desc_produk').val(desc);
              $('.harga_produk').val(harga);
              $('.stok_produk').val(stok);
              $('.foto_produk').val(foto);
              // Call Modal Edit
              $('#modal-edit').modal('show');
          });
      });
    </script>
<?= $this->endsection(); ?>
