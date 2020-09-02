<?php
if (isset($_POST['login'])) {
    $db->Login($_POST);
}
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Pasien</li>
</ol>
<a href="index.php" class="btn btn-primary ">Kembali</a>
<br><br>
<div class="card card-login mx-auto mt-3">
    <div class="card-header">Login</div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <div class="form-label-group">
                    <input name="username" type="text" class="form-control" autofocus="autofocus">
                    <label>Username</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input name="password" type="password" class="form-control">
                    <label>Password</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <select name="level" class="form-control">
                        <option value="">Pilih Level</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
            </div>
            <button name="login" class="btn btn-success">Login</button>
        </form>
    </div>
</div>