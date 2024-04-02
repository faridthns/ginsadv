<!doctype html>
<html lang="en">
  <body>
    <div class="container-login">
        <div class="container text-center text-white mt-4" id="header">
            <h1 class="fw-bold"> Login Admin </h1>
            <!-- <img src="logo-ginsadv.png" alt="" width="100px" class="py-2"> -->
            <p> Selamat Datang Admin </p>
        </div>
        <div class="container shadow bg-light d-flex justify-content-center px-5 pb-4 pt-5 mb-3" id="container-login">
        <div class="icon-login bg-light p-3 rounded-circle position-absolute" style="width: max-content; transform: translate(0px, -90px);">
            <img src="/assets/image/logo-ginsadv.png" alt="" class="py-2" style="width: 130px; height: 60px;">
        </div>
        <form method="post" id="add_create" enctype="multipart/form-data" name="add_create" action="<?= site_url('Auth/Login') ?>" style="width: 100%;" class="mt-5">
            <?php if (isset($validation)) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            <?php endif; ?>
            <div>
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="form mt-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="tombol text-center">
                <button type="submit" class="button-login mt-4 text-center text-white p-2 fw-bold"> Login </button>
            </div>
            <div class="buat-lupa text-center" style="display: flex; flex-direction: column;">
                <a href="" class="mt-3 text-decoration-none" style="color: rgb(59, 169, 210);">Lupa Password?</a>
            </div>
        </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>