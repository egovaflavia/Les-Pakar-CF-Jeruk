<?php
$id = $_GET['id'];
if ($db->dPenyakit($id) > 0) {
    echo
        "
        <script>
            alert('Data telah dihapus');
            document.location.href = 'index.php?page=module/Penyakit/index';
        </script>
        ";
} else {
    echo
        "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php?page=module/Penyakit/index';
        </script>
        ";
}
