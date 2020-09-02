<?php
$id = $_SESSION['akun']->pasien_id;
$dKonsultasi = $db->getAllKonsultasi($id);
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Konsultasi</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Tabel Konsultasi</div>
    <div class="card-body">

        <div class="table-responsive">
            <a href="index.php" class="btn btn-primary ">Kembali</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Penyakit</th>
                        <th>Tingkat Kepastian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dKonsultasi as $no => $dKonsultasi) {
                        // var_dump($dKonsultasi);
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dKonsultasi->pasien_nama ?></td>
                            <td><?= TglIndo($dKonsultasi->konsultasi_tgl) ?></td>
                            <td><?= $dKonsultasi->penyakit_nama ?></td>
                            <td><?= $dKonsultasi->konsultasi_hasil ?> %</td>
                            <td>
                                <a href="index.php?page=module/History/detail&id=<?= $dKonsultasi->konsultasi_id ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>