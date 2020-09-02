<?php
if (isset($_POST["edit"])) {
    if ($db->uGejala($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Gejala/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Gejala/index';
        </script>";
    }
}

$id = $_GET['id'];
$dGejala = $db->getOneGejala($id);
// var_dump($dGejala);
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Edit Data Gejala</li>
</ol>

<div class="card card-register mt-3">
    <div class="card-header"> <i class="fas fa-table"></i> Edit Data Gejala</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <div class="form-label-group">
                    <input readonly value="<?= $dGejala->gejala_id ?>" name="id" type="text" class="form-control" autofocus="autofocus">
                    <label>Kode Gejala</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dGejala->gejala_nama ?>" name="nama" type="text" class="form-control">
                    <label>Nama Gejala</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dGejala->gejala_cf ?>" name="cf" type="number" min="0" class="form-control">
                    <label>Nilai CF</label>
                </div>
            </div>
            <button name="edit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>