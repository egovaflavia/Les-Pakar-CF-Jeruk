<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Gejala</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Tabel Gejala</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="?page=module/Gejala/tambah" class="btn btn-primary ">Tambah Data</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th width="50px">Kode Gejala</th>
                        <th>Nama Gejala</th>
                        <th>Nilai CF</th>
                        <th width="88px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($db->getAllGejala() as $no => $dGejala) {
                        // var_dump($dGejala);
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dGejala->gejala_id ?></td>
                            <td><?= $dGejala->gejala_nama ?></td>
                            <td><?= $dGejala->gejala_cf ?></td>
                            <td>
                                <a href="index.php?page=module/Gejala/edit&id=<?= $dGejala->gejala_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?page=module/Gejala/hapus&id=<?= $dGejala->gejala_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>