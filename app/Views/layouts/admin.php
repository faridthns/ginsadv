<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Ginsadv</title>
        <!-- Icon Shortcut -->
        <link rel="shortcut icon" href="/assets/image/LOGO G.png" type="image/png">
        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?=base_url('/plugins/fontawesome-free/css/all.min.css')?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url('/dist/css/adminlte.min.css')?>">

        <link rel="stylesheet" href="<?=base_url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">

        <?= $this->renderSection('styles') ?>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/c25d17f12f.js" crossorigin="anonymous"></script>

        <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <?= $this->include('partial/side_menu') ?>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <?= $this->include('partial/top_menu') ?>
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <?= $this->renderSection('content') ?>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <?= $this->include('partial/footer') ?>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url('adminLTE/dist/js/adminlte.min.js')?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=base_url('adminLTE/dist/js/demo.js')?>"></script>

        <?= $this->renderSection('scripts') ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>