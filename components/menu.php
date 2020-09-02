<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=module/Penyakit/index">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Penyakit Jeruk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=module/Bantuan/index">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Bantuan</span></a>
    </li>

    <?php
    if (empty($_SESSION['akun'])) {
    ?>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=module/Login/index">
                <i class="fas fa-fw fa-table"></i>
                <span>Login</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=module/Daftar/index">
                <i class="fas fa-fw fa-table"></i>
                <span>Daftar</span></a>
        </li>
    <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=module/Konsultasi/index">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Konsultasi</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=module/History/index">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>History Konsultasi</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=module/Logout/index">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Logout</span></a>
        </li>
    <?php } ?>
</ul>