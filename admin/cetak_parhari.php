<?php
include '../assets/model/db.php';
include '../assets/libs/helper/helper.php';
$db = new Db();
// var_dump($_POST);
// exit;
$db->getPerhari($_POST);
?>
<!doctype html>
<html>

<head>
    <title>Sistem Pakar Certainty Factor</title>
    <style>
        html,
        body {
            background: #eee;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }


        .container {
            width: 1200px;
            margin: 25px auto;
            /* padding-left: 100px; */
        }

        /*design table 1*/
        .table {
            border-collapse: collapse;
            width: 100%;
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }

        .table,
        .th1,
        .td1 {
            border: 1px solid black;

            border: 1px solid #999;
            padding: 8px 20px;
        }

        .contoh-link:hover {
            background: #16A085;
        }
    </style>
</head>

<body>
    <div class="normal-table-area">
        <div class="container">
            <table width="100% ">
                <tr>
                    <td>
                        <img width="200px" height="170px" src="../assets/images/logo.png">
                    </td>
                    <td>
                        <h1>Sistem Pakar Penyakit Tanaman Jeruk</h1>
                        <p style="font-size: 20px">Dinas Tanaman Pangan, Holtikultura Dan Perkebunan Provinsi Sumatera Barat</p>
                        <p>Staf Bidang Holtikultura</p>
                    </td>
                </tr>
            </table>

            <hr style="display: block; height: 1px;border: 0; border-top: 1px solid #ccc;margin: 1em 0; padding: 0;">
            <br>
            <h3 class="col-sm-12" align="center"><u>Laporan Data Partanggal : <?php echo TglIndo($_POST['hari']); ?></u></h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="normal-table-list">
                        <br>
                        <table class="table">
                            <thead>
                                <tr class="tr1">
                                    <th class="th1" width="10px">No</th>
                                    <th class="th1">Nama Pasien</th>
                                    <th class="th1">Jenis Kelamin</th>
                                    <th class="th1">Alamat</th>
                                    <th class="th1">Tanggal Konsultasi</th>
                                    <th class="th1">Nama Penyakit</th>
                                    <th class="th1">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($db->getPerhari($_POST) as $no => $dLaporan) {
                                    // var_dump($dLaporan);
                                ?>
                                    <tr class="tr1">
                                        <td class="td1"><?= ++$no ?></td>
                                        <td class="td1"><?= $dLaporan->pasien_nama   ?></td>
                                        <td class="td1"><?= $dLaporan->pasien_jk ?></td>
                                        <td class="td1"><?= $dLaporan->pasien_alamat ?></td>
                                        <td class="td1"><?= TglIndo($dLaporan->konsultasi_tgl) ?></td>
                                        <td class="td1"><?= $dLaporan->penyakit_nama ?></td>
                                        <td class="td1"><?= $dLaporan->konsultasi_hasil ?> %</td>
                                    </tr>
                                <?php }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <table>
                <tr>
                    <td width="1000px"></td>
                    <td>
                        <p>Padang, <?= date('d-m-Y') ?></p>
                        Pimpinan
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        A. Aziz, SP
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br><br><br>
    <script>
        window.print();
    </script>
</body>

</html>