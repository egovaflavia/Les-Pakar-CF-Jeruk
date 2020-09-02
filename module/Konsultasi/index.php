<?php
if (isset($_POST["Konsultasi"])) {
    if ($db->Konsultasi($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Konsultasi');
        document.location.href = 'index.php?page=module/Konsultasi/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Konsultasi');
        document.location.href = 'index.php?page=module/Konsultasi/index';
        </script>";
    }
}

// var_dump($_SESSION['akun']->pasien_id);
$id = $_SESSION['akun']->pasien_id;

// Ganti id passien sm session pasien nanti
$dPasien = $db->getOnePasien($id);
// var_dump($dPasien);
$dGejala = $db->getAllGejala();

?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Konsultasi</li>
</ol>

<div class="card mt-3" style="width: 100%;margin-top: 0px;">
    <div class="card-header"> <i class="fas fa-table"></i> Konsultasi</div>
    <div class="card-body">
        <a href="index.php" class="btn btn-primary ">Kembali</a>
        <br><br>
        <form method="POST">
            <div class="row">
                <div class="col-md-6">
                    <input value="<?= $dPasien->pasien_id ?>" name="id" type="hidden">
                    <input value="<?= date('Y-d-m') ?>" name="tgl_kon" type="hidden">
                    <h6>Nama Pasien : <?= $dPasien->pasien_nama ?></h6>
                    <h6>Jenis Kelamin : <?= $dPasien->pasien_jk ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Tanggal Lahir : <?= TglIndo($dPasien->pasien_tgl_lahir) ?></h6>
                    <h6>Alamat : <?= $dPasien->pasien_alamat ?></h6>
                </div>
            </div>

            <h5>Pilih Gejala</h5>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10px">No</th>
                        <th width="100px">Id Gejala</th>
                        <th>Gejala</th>
                        <th width="150px">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dGejala as $no => $dGejala) {
                    ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $dGejala->gejala_id ?></td>
                            <td><?= $dGejala->gejala_nama ?></td>
                            <td>
                                <input type="radio" name="<?= $dGejala->gejala_id ?>" value="<?= $dGejala->gejala_cf ?>"> Ya
                                <input type="radio" name="<?= $dGejala->gejala_id ?>" value="0" checked> Tidak
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button name="Konsultasi" class="btn btn-success">Konsultasi</button>
        </form>
    </div>
</div>