<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Sistem Pakar Centainty Factor

        <?php
        if (!empty($_SESSION['akun'])) {

        ?>
            | Selamat Datang <?= $_SESSION['akun']->pasien_nama ?>
        <?php } ?>

    </a>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
        </div>
    </form>


</nav>