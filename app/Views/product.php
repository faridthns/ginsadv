<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $menu?></li>
        </ol>
    </nav>
    <h1 class="fw-bold">Produk</h1>

    <article class="product">
        <form method="get">
            <div class="input-group ms-auto mb-3" style="width: max-content;">
                <input type="text" class="form-control" name="keyword" placeholder="Cari produk">
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        <div class="row d-flex justify-content-center grid gap-3 mt-4 mb-5" id="cards">
            <?php foreach($produk as $p) : ?>
            <div class="card col-3 p-2 shadow rounded rounded-5" id="product-cards" style="width: 18rem;">
              <img src="/assets/image/<?= $p['foto_produk']?>" class="card-img-top rounded" alt="produk" style="height: 180px;">
              <div class="card-body">
                <h5 class="card-title"><?= $p['nama_produk']?></h5>
                <p class="card-text"></p>
                <a href="<?= base_url('product/')?>/<?= $p['nama_produk']?>" class="btn btn-primary" style="border: none;">Lihat Selengkapnya >> </a>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if ($produk == null) { ?>
                <div class="product-null d-flex justify-content-center align-items-center">
                    <?= session()->getFlashdata('pesan')?>
                </div>
            <?php } ?>
        </div>
    </article>

</div>