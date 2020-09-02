<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Hasil Konsultasi</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Tabel Hasil Konsultasi</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($db->getAllPasien() as $no => $dPasien) {
                        // var_dump($dPasien);  
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dPasien->pasien_nama ?></td>
                            <td><?= $dPasien->pasien_jk ?></td>
                            <td><?= $dPasien->pasien_alamat ?></td>
                            <td>
                                <a href="index.php?page=module/Konsultasi/detail&id=<?= $dPasien->pasien_id ?>" class="btn btn-success btn-sm">Data Konsultasi</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>