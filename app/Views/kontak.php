<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $menu?></li>
        </ol>
    </nav>
    <div class="row text-start">
        <h1 class="col-12 fw-bold"> Kontak Kami </h1>
        <div class="col-12">Terima kasih telah mengunjungi halaman kontak kami . <br> Kami senang mendengar masukan dari Anda .</div>
    </div>

    <?php if(session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show justify-content-between" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
          <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="row mt-5 mx-auto grid gap-5 gap-md-0" style="width: 80vw;">

        <!-- Kolom Input Kontak Kami kiri -->
        <div class="col-md-6 pe-5">
            <form action="contact/kritik_saran" method="post">
                <h5 class="mt-5 fw-bold" style="font-size: 15px;">Silakan isi formulir di bawah ini untuk menghubungi tim kami.</h5>
                <div class="form mt-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama_ks" class="form-control input-kontak" id="nama">
                </div>
                <div class="form mt-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email_ks" class="form-control input-kontak" id="email">
                </div>
                <div class="form mt-4">
                    <label for="desc" class="form-label">Pesan</label>
                    <textarea type="text" name="dsc_ks" class="form-control input-kontak" id="desc"></textarea>
                </div>
                <div class="tombol-kontak-submit mt-4">
                    <button type="submit" class="fw-bold border border-none text-white p-2 rounded-pill" style="width: 80px; background-color: #0766AD;">Kirim</button>
                </div>
            </form>
        </div>

        <!-- Kolom Input Kontak Kami kanan -->
        <div class="col-md-6 bg-dark p-5" style="border-radius: 20px;">
            <h3 class="text-white mb-4">Informasi Kontak</h3>
            <img src="/assets/image/logo-ginsadv.png" alt="" style="width: 160px;" class="mb-4">
            <div class="info-kontak text-white mt-3">
                <p><i class="fa-brands fa-xl fa-whatsapp me-3"></i>085881230058</p>
                <p><i class="fa-regular fa-xl fa-envelope me-3"></i>infoginsadv@gmail.com / wardinogino@ginsadv.com</p>
                <p><i class="fa-solid fa-xl fa-location-dot me-3"></i>Jln . Raya Veteran No . 16 ( Samping PMI Kota Bekasi ) Kel. Margajaya , Kec. Bekasi Selatan Kota Bekasi</p>
            </div>
            <div class="icon-kontak text-white mt-5 float-end">
                <a href="https://api.whatsapp.com/send/?phone=6285881230058&text=Hallo%20GinsAdv,%20saya%20ingin%20memesan.&type=phone_number&app_absent=0" style="text-decoration: none;">
                    <i class="fa-brands fa-whatsapp fa-xl text-white"></i>
                </a>
                <a href="mailto:infoginsadv@gmail.com" style="text-decoration: none;">
                    <i class="fa-regular mx-3 fa-xl fa-envelope mx-2 text-white"></i>
                </a>
                <a href="https://www.google.co.id/maps/place/CV+GINS+ADV+offset+%26+Printing/@-6.2385733,106.9973672,17z/data=!3m1!4b1!4m6!3m5!1s0x2e698dec75c6bcb9:0xf806317936a00abf!8m2!3d-6.2385733!4d106.9999421!16s%2Fg%2F11k55zw3dj?entry=tts" style="text-decoration: none;">
                    <i class="fa-solid fa-xl fa-location-dot text-white"></i>
                </a>
            </div>
        </div>
    </div>
</div>