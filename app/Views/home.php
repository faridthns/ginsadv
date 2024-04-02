<body>
    <div class="container-hero pb-5 rounded shadow" id="navbar-home">
        <nav class="navbar navbar-expand-lg p-3">
            <div class="container mt-2"> 
                <div class="container w-100 d-flex justify-content-between">
                <a class="navbar-brand" href="#"><img class="logo" src="/assets/image/logo-ginsadv.png" alt="logo"></a>
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex align-items-center"><i class="fa-solid fa-bars mx-auto"></i></span>
                </button>
                </div>
                <div class="collapse navbar-collapse text-nowrap" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active text-light fw-bold" aria-current="page" href="#product">Produk</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="<?= base_url('tentang_kami')?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light fw-bold" href="<?= base_url('contact')?>">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      
        <div class="hero-image">
            <div class="hero-text">
                <h1 class="fw-bold">GINS ADV</h1>
                <p class="my-3">Tempatnya Cetak Berkualitas dan Stempel Terpercaya!</p>
                <a class="btn btn-danger rounded-pill p-2 px-4 mt-2" href="<?= base_url('contact')?>"><i class="fa-solid fa-bounce fa-phone me-2"></i>Contact Us</a>
            </div>
        </div>
    </div>

<div class="container-fluid p-0">
    

      <article class="product pt-5 text-center" id="product">
        <h1 class="text-center fw-bold">Produk Kami</h1>
        <div class="row d-flex justify-content-center my-5 grid gap-3" id="cards">
              <div class="card col-3 shadow rounded rounded-5" id="product-cards" style="width: 18rem;">
                <img src="/assets/image/ct.jpg" class="card-img-top rounded" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cutting Stiker</h5>
                  <p class="card-text"></p>
                  <a href="<?= base_url('product/cutting stiker')?>" class="btn btn-primary">Lihat Selengkapnya >> </a>
                </div>
              </div>
              
              <div class="card col-3 shadow rounded rounded-5" id="product-cards" style="width: 18rem;">
                <img src="/assets/image/st.jpg" class="card-img-top rounded" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Stempel</h5>
                  <p class="card-text"></p>
                  <a href="<?= base_url('product/stempel')?>" class="btn btn-primary">Lihat Selengkapnya >> </a>
                </div>
              </div>
          </div>
          <a class="btn btn-primary mb-5 mb-md-0" href="<?= base_url('product')?>">Lihat semua produk</a>
          
          <!-- Untuk Container bergelombang -->
          <div class="wavy">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="rgb(59, 169, 210)" fill-opacity="1" d="M0,64L48,74.7C96,85,192,107,288,128C384,149,480,171,576,165.3C672,160,768,128,864,122.7C960,117,1056,139,1152,144C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
          </div>
          <!-- Akhir Container bergelombang -->
    </article>


    <section class="intro" style="background-color: rgb(59, 169, 210); height: 250px;">
      <div class="section-text text-white">
        <h1 class="fw-bold">CV . GINS ADV</h1>
        <p class="me-2">Fokus kami adalah menyediakan layanan percetakan yang berkualitas untuk kebutuhan bisnis dan individu</p>
      </div>
      <a href="<?= base_url("tentang_kami")?>" class="btn-tentang-home border border-none px-3 py-2 rounded-pill ms-0 ms-md-5 fw-bold">Tentang Kami</a>
    </section>

    <section class="mb-5 mb-md-5">
      <div class="container mb-5">
      <h1 class="text-center fw-bold">Review Produk</h1>
        <table class="table w-75 mx-auto mt-5">
        <?php if(session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success alert-dismissible fade show justify-content-between" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Produk</th>
            <th scope="col" class="text-md-nowrap">Nama Reviewer</th>
            <th scope="col">Rating</th>
            <th scope="col">Deskripsi</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
              foreach($review as $r) :
              ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $r['nama_produk']?></td>
                <td><?= $r['nama']?></td>
                <td>
                    <span class="fa fa-star" style="color: orange"></span><span><?= $r['rating']?></span>
                </td>
                <td><?= $r['desc']?></td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </div>
    </section>

</div>
    <div class="div" id="customer-care">
      <a href="https://api.whatsapp.com/send/?phone=6285881230058&text=Hallo GinsAdv, saya ingin memesan.&type=phone_number&app_absent=0" target="_blank">
        <img src="/assets/image/customer_care.png" alt="" id="customer-care-pic">
      </a>
    </div>