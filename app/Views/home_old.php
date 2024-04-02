<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Gins ADV | Home</title>

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
  <!-- End of Font Google -->

  <!-- Icon Font Awesome -->
  <script src="https://kit.fontawesome.com/c25d17f12f.js" crossorigin="anonymous"></script>
  <!-- End Icon Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('/assets/css/style.css')?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="/assets/css/style.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-hero pb-5 rounded shadow">
    <nav class="navbar navbar-expand-lg p-3">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="<?=base_url('/assets/image/logo-ginsadv.png')?>" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon d-flex align-items-center"><i class="fa-solid fa-bars mx-auto"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light fw-bold" aria-current="page" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="#">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="hero-image">
    <div class="hero-text">
      <h1 class="fw-bold">CV. GINS ADV</h1>
      <p>Offset & Printing</p>
      <button class="btn btn-danger rounded-pill p-2"><i class="fa-solid fa-bounce fa-phone me-2"></i>Contact Us</button>
    </div>
  </div>
  </div>
</div>


<div class="container">
  <section>
    <div class="section-text text-center">
      <h1 class="">PERC. GINS ADV.</h1>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cumque magni earum quibusdam quis velit ipsa maiores inventore minima odit consectetur, culpa ab veniam veritatis consequuntur omnis perferendis! Unde, tempore!</P>
    </div>
  </section>

  <article class="product">
    <h1 class="text-center mb-5">Produk Kami</h1>
    <div class="row d-flex justify-content-center">
      <div class="card col-3 me-2 shadow" style="width: 18rem;">
        <img src="<?=base_url('/assets/image/ct.jpg')?>" class="card-img-top rounded" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cutting Stiker</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary" style="border: none;">Lihat Selengkapnya >> </a>
        </div>
      </div>

      <div class="card col-3 shadow" style="width: 18rem;">
        <img src="<?=base_url('/assets/image/st.jpg')?>" class="card-img-top rounded" alt="...">
        <div class="card-body">
          <h5 class="card-title">Stempel</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary">Lihat Selengkapnya >> </a>
        </div>
      </div>
    </div>

  </article>
</div>
</body>
</html>