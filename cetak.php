<?php
session_start();
include 'assets/model/db.php';
include 'assets/libs/helper/helper.php';
$db = new Db();

$id = $_SESSION['akun']->pasien_id;
$dHasil = $db->getAllHasil($id);

$dSolusi = $db->getOneSolusi($dHasil->penyakit_id);

// var_dump($dSolusi);
?>
<script>
    window.print()
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak</title>
    <?php include 'components/head.php' ?>
</head>

<body>


    <div class="container">
        <div id="wrapper">

            <div id="content-wrapper">

                <div class="container-fluid">

                    <div class="card mb-3">
                        <div class="card-body">
                            <center>
                                <h2>Hasil Konsultasi</h2>
                            </center>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Username : <?= $dHasil->pasien_user ?></h6>
                                    <h6>Nama Pasien : <?= $dHasil->pasien_nama ?></h6>
                                    <h6>Jenis Kelamin : <?= $dHasil->pasien_jk ?></h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="float-right">Tanggal Konsultasi : <?= TglIndo($dHasil->konsultasi_tgl) ?></h6>
                                </div>
                            </div>
                            <br>
                            <br>
                            <p>Berdasarkan hasil analisa menurut gejala yang dipilih, maka di dapatlah hasil sebagai berikut :</p>
                            <p>
                                Nama hama / penyakit adalah <b><?= $dHasil->penyakit_nama ?></b> <br>
                                Keterangan penyakit : <br>
                                <b> <?= $dHasil->penyakit_ket ?></b> <br><br>
                                Dengan tingkat kepastian : <b><?= $dHasil->konsultasi_hasil ?> %</b>
                            </p>
                            <p><u>Solusi untuk penyakit adalah : </u></p>
                            <?php foreach ($dSolusi as $no => $dSolusi) { ?>
                                <table>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $dSolusi->solusi_ket ?></td>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <?php include 'components/modal.php' ?>

    <?php include 'components/scripts.php' ?>
</body>

</html>