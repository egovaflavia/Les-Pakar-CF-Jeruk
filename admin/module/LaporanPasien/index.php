<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Laporan Data Pasien</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Laporan Data Pasien</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="module/LaporanPasien/cetak.php" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
            <br>
            <br>
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th>Nama Pasien</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($db->getAllPasien() as $no => $dPasien) {
                        // var_dump($dPasien);
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dPasien->pasien_user ?></td>
                            <td><?= $dPasien->pasien_nama ?></td>
                            <td><?= $dPasien->pasien_pass ?></td>
                            <td><?= $dPasien->pasien_jk ?></td>
                            <td><?= $dPasien->pasien_tgl_lahir ?></td>
                            <td><?= $dPasien->pasien_alamat ?></td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>