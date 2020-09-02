<?php
if (isset($_POST["simpan"])) {
    if ($db->addPasien($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambah');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Daftar</li>
</ol>

<a href="index.php" class="btn btn-primary ">Kembali</a>
<br><br>
<div class="card card-login mx-auto mt-3 mb-3">
    <div class="card-header">Silhakan isi data diri</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <div class="form-label-group">
                    <input name="user" type="text" class="form-control" autofocus="autofocus">
                    <label>Username</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="pass" type="text" class="form-control">
                    <label>Password</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="nama" type="text" class="form-control">
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
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="tgl" type="date" class="form-control">
                    <label>Tanggal Lahir</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="alamat" type="text" class="form-control">
                    <label>Alamat</label>
                </div>
            </div>
            <button name="simpan" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>