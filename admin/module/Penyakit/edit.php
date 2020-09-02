<?php
if (isset($_POST["edit"])) {
    if ($db->uPenyakit($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Penyakit/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Penyakit/index';
        </script>";
    }
}

$id = $_GET['id'];
$dPenyakit = $db->getOnePenyakit($id);
// var_dump($dPenyakit);
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Edit Data Penyakit</li>
</ol>

<div class="card card-register mt-3">
    <div class="card-header"> <i class="fas fa-table"></i> Edit Data Penyakit</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <div class="form-label-group">
                    <input readonly value="<?= $dPenyakit->penyakit_id ?>" name="id" type="text" class="form-control" autofocus="autofocus">
                    <label>Kode Penyakit</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPenyakit->penyakit_nama ?>" name="nama" type="text" class="form-control">
                    <label>Nama Penyakit</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dPenyakit->penyakit_ket ?>" name="ket" type="text" class="form-control">
                    <label>Keterangan Penyakit</label>
                </div>
            </div>
            <button name="edit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>