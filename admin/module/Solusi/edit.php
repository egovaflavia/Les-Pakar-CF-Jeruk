<?php
if (isset($_POST["edit"])) {
    if ($db->uSolusi($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Solusi/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Solusi/index';
        </script>";
    }
}

$id = $_GET['id'];
$dSolusi = $db->getEditSolusi($id);
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Edit Data Solusi</li>
</ol>

<div class="card card-register mt-3">
    <div class="card-header"> <i class="fas fa-table"></i> Edit Data Solusi</div>
    <div class="card-body">
      <form method="POST">
            <div class="form-group">
                <label>Nama Penyakit</label>
                <div class="form-label-group">
                        <select name="id_penyakit" class="form-control">
                            <?php foreach ($db->getAllPenyakit() as $dPenyakit) { 
                            var_dump($dPenyakit);
                            ?>
                                <option value="<?php echo $dPenyakit->penyakit_id ?>"><?php echo $dPenyakit->penyakit_nama ?></option>
                            <?php } ?>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input value="<?= $dSolusi->solusi_id ?>" name="id_solusi" type="hidden" class="form-control">
                    <input value="<?= $dSolusi->solusi_ket ?>" name="ket" type="text" class="form-control">
                    <label>Solusi</label>
                </div>
            </div>
            <button name="edit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>