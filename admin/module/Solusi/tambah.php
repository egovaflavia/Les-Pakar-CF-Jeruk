<?php
if (isset($_POST["simpan"])) {
    if ($db->addSolusi($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'index.php?page=module/Solusi/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambah');
        document.location.href = 'index.php?page=module/Solusi/index';
        </script>";
    }
}
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Solusi</li>
</ol>

<div class="card card-register mt-3">
    <div class="card-header"> <i class="fas fa-table"></i> Tambah Data Solusi</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label>Nama Penyakit</label>
                <div class="form-label-group">
                        <select name="id" class="form-control">
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
                    <input name="ket" type="text" class="form-control">
                    <label>Solusi</label>
                </div>
            </div>
            <button name="simpan" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>