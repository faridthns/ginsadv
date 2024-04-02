<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product')?>">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $menu?></li>
        </ol>
    </nav>

    <div class="row d-flex align-items-center mb-5">
        <div class="img col-md-6">
            <img src="/assets/image/<?= $produk['foto_produk'];?>" alt="product" class="border border-3 border-dark float-start me-5" id="product-pic">
        </div>
        <section class="description col-md-6">
            <h3 class="price">Rp.<?= $produk['harga_produk'];?></h3>
            <h2><?= $produk['nama_produk'];?></h2>

            <span>Stock : <?php if ($produk['stok_produk'] == 0) {
              echo '<span class="text-danger">Stok Habis</span>';
            } else {
              echo $produk['stok_produk'];
            } ?></span>
            <br>
            <br>
            <a href="https://api.whatsapp.com/send/?phone=6285881230058&text=Hallo GinsAdv, saya ingin memesan <?= $produk['nama_produk'];?> dengan jumlah ...&type=phone_number&app_absent=0" class="btn btn-success rounded rounded-pill" target="_blank"><i class="fa-brands fa-whatsapp me-2"></i>Order by Whatsapp</a>
        </section>
    </div>
    <div style="clear: both;"></div>
    
    <section>
      <div class="container card shadow d-flex justify-content-center mt-5">
        <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show justify-content-between mt-2" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
              <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Deskripsi</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ulasan</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <section class="fs-5 p-3">
              <h1 class="fw-bold">Deskripsi</h1>
              <pre style="font-family: quicksand; white-space: pre-wrap;"><?= $produk['dsc_produk'];?></pre>
            </section>
          </div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <section class="p-3">
              <h1 class="fw-bold">Ulasan Produk</h1>
              <div class="form-ulasan mt-3">
                <form action="ulasan" method="post">
                  <div class="mb-3">
                    <span>Berikan ulasan terbaikmu.</span>
                  </div>
                  <input type="hidden" name="id_produk" value="<?= $produk['id_produk']?>">
                  <input type="hidden" name="nama_produk" value="<?= $produk['nama_produk']?>">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Rating :</label>
                    <input type="hidden" name="rating">
                    <div>
                      <span class="fa fa-star" id="star-1" onclick="rate(1)"></span>
                      <span class="fa fa-star" id="star-2" onclick="rate(2)"></span>
                      <span class="fa fa-star" id="star-3" onclick="rate(3)"></span>
                      <span class="fa fa-star" id="star-4" onclick="rate(4)"></span>
                      <span class="fa fa-star" id="star-5" onclick="rate(5)"></span>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi :</label>
                    <textarea type="text" class="form-control" id="desc" name="desc" placeholder="Deskripsi"></textarea>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-success" type="submit">Kirim</button>
                  </div>
                </form>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
</div>

<script>
  function rate(id)
  {
    document.getElementsByName("rating")[0].value = id;
    switch(id){
      case 1 :
        checked("star-1");
        unchecked("star-2");
        unchecked("star-3");
        unchecked("star-4");
        unchecked("star-5");
        break;
      
      case 2 :
        checked("star-1");
        checked("star-2");
        unchecked("star-3");
        unchecked("star-4");
        unchecked("star-5");
        break;

      case 3 :
        checked("star-1");
        checked("star-2");
        checked("star-3");
        unchecked("star-4");
        unchecked("star-5");
        break;

      case 4 :
        checked("star-1");
        checked("star-2");
        checked("star-3");
        checked("star-4");
        unchecked("star-5");
        break;

      case 5 :
        checked("star-1");
        checked("star-2");
        checked("star-3");
        checked("star-4");
        checked("star-5");
        break;
      
        default :
    }
  }

  function checked(star_id)
  {
    var element = document.getElementById(star_id);
    element.classList.add("checked");
  }

  function unchecked(star_id)
  {
    var element = document.getElementById(star_id);
    element.classList.remove("checked");
  }
</script>