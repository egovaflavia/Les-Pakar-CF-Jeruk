<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Solusi</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Tabel Solusi</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="?page=module/Solusi/tambah" class="btn btn-primary ">Tambah Data</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th>Kode Penyakit</th>
                        <th>Keterangan</th>
                        <th width="88px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($db->getAllSolusi() as $no => $dSolusi) {
                        // var_dump($dSolusi);
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dSolusi->penyakit_id ?></td>
                            <td><?= $dSolusi->solusi_ket ?></td>
                            <td>
                                <a href="index.php?page=module/Solusi/edit&id=<?= $dSolusi->solusi_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?page=module/Solusi/hapus&id=<?= $dSolusi->solusi_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>