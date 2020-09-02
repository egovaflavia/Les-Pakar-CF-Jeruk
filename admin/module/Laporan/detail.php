<?php

require_once __DIR__ . "/../assets/pdf/vendor/autoload.php";
require "../assets/model/conf.php";

$tgl = $_GET["konsultasi_tgl"];


$resHasil = query("SELECT * FROM tb_konsultasi WHERE konsultasi_tgl LIKE '%$tgl%' ORDER BY konsultasi_id DESC ");

$potong = explode("-", $tgl);

if ($potong[0] == "01") {
    $bln = "Januari";
} elseif ($potong[0] == "02") {
    $bln = "Februari";
} elseif ($potong[0] == "03") {
    $bln = "Maret";
} elseif ($potong[0] == "04") {
    $bln = "April";
} elseif ($potong[0] == "05") {
    $bln = "Mei";
} elseif ($potong[0] == "06") {
    $bln = "Juni";
} elseif ($potong[0] == "07") {
    $bln = "Juli";
} elseif ($potong[0] == "08") {
    $bln = "Agustus";
} elseif ($potong[0] == "09") {
    $bln = "September";
} elseif ($potong[0] == "10") {
    $bln = "Oktober";
} elseif ($potong[0] == "11") {
    $bln = "November";
} else {
    $bln = "Desember";
}


$mpdf = new \Mpdf\Mpdf();

$html = "
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Diagnosa</title>
</head>
<body>
    <div style='width:100%;float: left;' align='center'>
 <table>
 <tr>
    <th>
    <img align='left' height='60' src='../assets/images/bnn.png' />
    </th>
    <th>
    Alamat : Jl. Soekarno Hatta No.90,Padang Tangah,Payakumbuh Barat, Kota Payakumbuh, Sumatera Barat,No.Telp:(0752) 92374
    </th></tr>
    </table>

    </div>

    <hr style='margin:0px;color:black;'> 
    <hr style='margin-top:1.5px;color:black;height:3px;'><br>
    
    <p style='font-weight: bold;font-size: 14px;margin: 0px;' align='center'>Laporan Diagnosa Bulan " . $bln . " " . $potong[1] . "</p><br>
    <table border='1' cellspacing='0' width='100%' style='font-size:12px;'>
        <thead> 
            <tr>
                <th style='padding:5px;width: 50px;'>No</th>
                <th style='padding:5px;'>Nama</th>
                <th style='padding:5px;'>Jenis Kelamin</th>
                <th style='padding:5px;'>Alamat</th>
                <th style='padding:5px;'>Nama Penyakit</th>
                <th style='padding:5px;'>Tingkat Kepastian</th>
            </tr>
        </thead>";
$no = 1;
foreach ($resHasil as $row) :
    $html .= "
        <tbody>
            <tr>
                <td style='padding:5px;text-align:center;'>" . $no . "</td>
                <td style='padding:5px;text-align:center;'>" . $row["pasien_nama"] . "</td>
                <td style='padding:5px;text-align:center;'>" . $row["pasien_jk"] . "</td>
                <td style='padding:5px;text-align:center;'>" . $row["pasien_alamat"] . "</td>
                <td style='padding:5px;text-align:center;'>" . $row["penyakit_id"] . "</td>
                <td style='padding:5px;text-align:center;width: 100px;'>" . $row["konsultasi_hasil"] . " %</td>
            </tr>
        <tbody>";
    $no++;
endforeach;
$html .= "
    </table>
    <br>
    <div style='right:10px;width:200px;float:right;text-align:center;font-size:12px;'>
        <p>Padang, " . date("d-m-Y") . " </p><br><br><br>
        <p>(..........................................)</p>
    </div> 
</body>
</html>";

$mpdf->WriteHTML($html);
$mpdf->Output();
