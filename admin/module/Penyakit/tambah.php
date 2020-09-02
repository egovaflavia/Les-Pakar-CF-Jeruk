<?php
if (isset($_POST["simpan"])) {
    if ($db->addPenyakit($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'index.php?page=module/Penyakit/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambah');
        document.location.href = 'index.php?page=module/Penyakit/index';
        </script>";
    }
}
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Penyakit</li>
</ol>

<div class="card card-register mt-3">
    <div class="card-header"> <i class="fas fa-table"></i> Tambah Data Penyakit</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <div class="form-label-group">
                    <input name="id" type="text" class="form-control" autofocus="autofocus">
                    <label>Kode Penyakit</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="nama" type="text" class="form-control">
                    <label>Nama Penyakit</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="ket" type="text" class="form-control">
                    <label>Keterangan Penyakit</label>
                </div>
            </div>
            <button name="simpan" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>