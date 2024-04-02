<div class="container mt-5 ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $menu?></li>
        </ol>
    </nav>
    <h1 class="fw-bold mb-5">Tentang Kami</h1>
    <section class="pt-5 pb-5 ps-3" id="container-detail-about">
        <div class="row d-flex justify-content-center grid gap-5 gap-md-0 mx-auto">
            <div class="col-md-6 text-center">
                <img id="about-pic" src="/assets/image/toko.png" alt="tentang" class="rounded-pill shadow">
            </div>
            <div class="col-md-6 shadow d-flex align-items-center justify-content-center flex-column px-5 py-3" id="container-detail-about-text">
                <h2 class="fw-bold px-5 pb-3" style="border-bottom: 2px solid grey;">
                    Percetakan Gins Adv
                </h2>
                <h6 class="mt-3">GinsADV merupakan percetakan dan pembuatan stempel. 
                    Kami mengkhususkan diri dalam menyediakan layanan percetakan berkualitas tinggi untuk kebutuhan bisnis 
                    dan individu dan dengan menggunakan teknologi terkini , kami berkomitmen untuk memberikan solusi cetak yang inovatif dan memenuhi standar.</h6>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class="container-fluid mt-4 p-4 rounded">
            <h1 class="text-center mb-5 fw-bold text-white py-2 rounded-pill" style="background-color: #0766AD;">Visi</h1>
            <div class="row d-flex justify-content-center align-item-center ">
                <div class="col-12 rounded pb-2 text-center" style="display: flex; flex-direction: column;">
                    <span style="font-size: 1.7vw;">Menjadi mitra terpercaya dalam memenuhi kebutuhan cetak dan setempel, memberikan layanan berkualitas tinggi yang mendukung pertumbuhan bisnis dan ekspresi kreatif.</span>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class="container mt-4 mb-5 py-5">
            <h1 class="text-center mb-5 fw-bold py-2 rounded-pill text-white" style="background-color: rgb(193, 64, 64);">Misi</h1>
            <div class="container-fluid py-1"> 
                <div class="row d-flex justify-content-center align-item-center mt-3">
                    <div class="col-md-3 col-4  p-3 text-center" id="wrap-misi-isi">
                        <i class="fa-regular fa-2xl fa-thumbs-up mb-2 py-4"></i>
                        <span>Memberikan layanan cetak dan pembuatan setempel yang berkualitas tinggi dan terjangkau.</span>
                    </div>
                    <div class="col-md-4 col-4 text-center p-3" id="wrap-misi-isi">
                        <i class="fa-solid fa-2xl fa-desktop mb-2 py-4"></i>
                        <span>Menggunakan teknologi terbaru untuk meningkatkan efisiensi dan presisi dalam setiap proyek cetak.</span>
                    </div>
                    <div class="col-md-3 col-4 p-3 text-center" id="wrap-misi-isi">
                        <i class="fa-solid fa-2xl fa-users mb-2 py-4"></i>
                        <span>Menjaga kepuasan pelanggan dengan memberikan pelayanan pelanggan yang unggul.</span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-item-center mt-2">
                    <div class="col-5 p-3 text-center" id="wrap-misi-isi">
                        <i class="fa-solid fa-2xl fa-handshake-angle mb-2 py-4"></i>
                        <span>Mengembangkan kemitraan jangka panjang dengan pelanggan.</span>
                    </div>
                    <div class="col-5  p-3 text-center" id="wrap-misi-isi">
                        <i class="fa-solid fa-2xl fa-comments-dollar mb-2 py-4"></i>
                        <span>Menawarkan harga yang kompetitif <br> dan transparan.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid mt-2 mb-3 py-3" style="background-color: aliceblue; border-radius: 20px;">
            <h1 class="text-center mb-4 fw-bold" style="color: #0766AD;">Terima Cetak</h1>
            <div class="row d-flex justify-content-center align-item-center mt-4">
                <div class="col-4  p-3 text-center" style="display: flex; flex-direction: column; border-radius: 20px; background-color: white; border: 2px solid #0766AD; color: #0766AD;">
                    <i class="fa-solid fs-xl fa-note-sticky mb-2"></i>
                    <span>Cutting <br> Sticker</span>
                </div>
                <div class="col-4  offset-1 p-3 text-center" style="display: flex; flex-direction: column; border-radius: 20px; background-color: white; border: 2px solid #0766AD; color: #0766AD;">
                    <i class="fa-solid fs-xl fa-stamp mb-2"></i>
                    <span>Pembuatan <br> Stempel</span>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-item-center mt-4 flex-column">
            <div class="col">
                <img src="/assets/image/banner.jpg" alt="" style="width: 100%; border-radius: 20px; background-color: #0766AD;" class="shadow mt-3 p-1">
            </div>
            <div class="col text center">
                <a href="<?= base_url('product')?>"><button class="mt-4 p-3 px-5" id="btn">Lihat Produk >></button></a>
            </div>
        </div>
    </section>

    <section>
        
    </section>
</div>