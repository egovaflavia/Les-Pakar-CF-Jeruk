<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Penyakit</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Tabel Penyakit</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="?page=module/Penyakit/tambah" class="btn btn-primary ">Tambah Data</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th width="50px">Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Keterangan Penyakit</th>
                        <th width="88px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($db->getAllPenyakit() as $no => $dPenyakit) {
                        // var_dump($dPenyakit);  
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dPenyakit->penyakit_id ?></td>
                            <td><?= $dPenyakit->penyakit_nama ?></td>
                            <td><?= $dPenyakit->penyakit_ket ?></td>
                            <td>
                                <a href="index.php?page=module/Penyakit/edit&id=<?= $dPenyakit->penyakit_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?page=module/Penyakit/hapus&id=<?= $dPenyakit->penyakit_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>