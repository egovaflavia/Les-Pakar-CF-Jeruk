<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Laporan Data Diagnosa</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Laporan Data Diagnosa</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <form action="cetak_parhari.php" method="post" target="_blank">
                    <div class="form-group">
                        <label>Laporan Diagnosa Per-Hari</label>
                        <input class="form-control" type="date" name="hari" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Print</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form action="cetak_perbulan.php" target="_blank" method="post">
                    <div class="form-group">
                        <label>Laporan Diagnosa Per-Bulan</label>
                        <select name="bulan" class="form-control">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="04">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desembar</option>
                        </select>
                        <!-- <input class="form-control" type="month" name="bulan" value="<?php echo date('Y-m'); ?>"> -->
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Print</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form action="cetak_pertahun.php" method="post" target="_blank">
                    <div class="form-group">
                        <label>Laporan Diagnosa Per-Tahun</label>
                        <input class="form-control" type="number" min="2013" max="2023" name="tahun" value="<?php echo date('Y'); ?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Print</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>