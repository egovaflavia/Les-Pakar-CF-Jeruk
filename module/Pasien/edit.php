<?php
if (isset($_POST["edit"])) {
    if ($db->uPasien($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Pasien/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Pasien/index';
        </script>";
    }
}

$id = $_GET['id'];
$dPasien = $db->getOnePasien($id);
// var_dump($dPasien);
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Edit Data Pasien</li>
</ol>

<div class="card card-register mt-3">
    <div class="card-header"> <i class="fas fa-table"></i> Edit Data Pasien</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPasien->pasien_id ?>" name="id" type="hidden">
                    <input value="<?= $dPasien->pasien_user ?>" name="user" type="text" class="form-control" autofocus="autofocus">
                    <label>Username</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPasien->pasien_pass ?>" name="pass" type="text" class="form-control">
                    <label>Password</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPasien->pasien_nama ?>" name="nama" type="text" class="form-control">
                    <label>Nama</label>
                </div>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-label-group">
                    <select name="jenis" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <script>
                        document.getElementsByName('jenis')[0].value = "<?= $dPasien->pasien_jk ?>"
                    </script>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPasien->pasien_tgl_lahir ?>" name="tgl" type="date" class="form-control">
                    <label>Tanggal Lahir</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPasien->pasien_alamat ?>" name="alamat" type="text" class="form-control">
                    <label>Alamat</label>
                </div>
            </div>
            <button name="edit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>