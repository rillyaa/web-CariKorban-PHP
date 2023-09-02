<?php
include '..\models\korban.php';
$model = new Korban();
$index = 1;
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Data Ditemukan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">CariKorban</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="lapor.php">Lapor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datahilang.php">Data Hilang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dataditemukan.php">Data Ditemukan</a>
                    </li>
                </ul>
                <a href="logout.php"><button type="button" class="d-flex btn btn-danger my-2 my-sm-0">Logout</button></a>
            </div>
        </div>
    </nav>

    <br>
    <h4>Data Korban Ditemukan</h4>

    <br>
    <table class="table align-middle mb-0 bg-white">
        <thead style="background-color: lightblue;">
            <tr>
                <th>No.</th>
                <th>Nama Korban</th>
                <th>Hubungan</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Alasan Hilang</th>
                <th>Detail Korban</th>
                <th>Nama Pelapor</th>
                <th>Status</th>
                <th>Operasi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data();
            if (!empty($result)) {
                foreach ($result as $data) :
                    if ($data->status == 'Ditemukan') { ?>
                        <tr>
                            <td>
                                <?= $index++ ?>
                            </td>
                            <td>
                                <?= $data->nama_korban ?>
                            </td>
                            <td>
                                <?= $data->hubungan ?>
                            </td>
                            <td>
                                <?= $data->lokasi ?>
                            </td>
                            <td>
                                <?= $data->tanggal ?>
                            </td>
                            <td>
                                <?= $data->alasan_hilang ?>
                            </td>
                            <td>
                                <?= $data->detail ?>
                            </td>
                            <td>
                                <?= $data->nama_pelapor ?>
                            </td>
                            <td>
                                <?= $data->status ?>
                            </td>
                            <td>
                                <a name="edit" id="edit" href="edit.php?idx=<?= $data->idx ?>"><i class="fa fa-edit" style="font-size:14px;color:orange"></i></a>
                                |
                                <a name="hapus" id="hapus" href="..\models\process.php?idx=<?= $data->idx ?>"><i class="fa fa-trash-o" style="font-size:14px;color:red"></i></a>
                            </td>
                        </tr>
                <?php }
                endforeach;
            } else { ?>
                <tr>
                    <td colspan="9">Belum ada data korban ditemukan.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- </div> -->
    <style>
        *,
        html,
        body {
            margin: 0 4px;
            padding: 0;
        }

        body {
            font-family: 'Readex Pro';
        }

        a {
            text-decoration: none;
        }

        .logo {
            font-family: 'Roboto Slab';
            font-size: 28px;
            color: #245786;
        }

        .table {
            width: 70%;
            text-align: center;
            border-bottom: 1px solid #ddd;
            border-collapse: collapse;
            margin: 0 30px;
            border-radius: 30px;
        }
        tr:hover {background-color: lightgray;}

    </style>
    <p class="css-mine">
        <a href="http://www.cssmine.com/css3-border-radius" target="_blank"></a>
    </p> 
</body>

</html>