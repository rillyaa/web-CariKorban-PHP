<?php
$idx = $_GET['idx'];
include '..\models\korban.php';
$model = new Korban();
$data = $model->edit($idx);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data</title>

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
                        <a class="nav-link active" href="datahilang.php">Data Hilang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataditemukan.php">Data Ditemukan</a>
                    </li>
                </ul>
                <a href="logout.php"><button type="button" class="d-flex btn btn-danger my-2 my-sm-0">Logout</button></a>
            </div>
        </div>
    </nav>
    <br>
    <h4>Ubah Data Korban</h4>
    <a href="datahilang.php">Kembali</a>
    <br><br>
    <form action="..\models\process.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nama Korban</label>
            <br>
            <input class="form-control" type="text" name="nama_korban" value="<?= $data->nama_korban ?>">
        </div>
        <div>
            <label class="form-label">Hubungan</label>
            <br>
            <select class="form-control" name="hubungan" value="<?= $data->hubungan ?>" id="hubungan" required>
                <option value="">Pilih Hubungan</option>
                <option value="suami">Suami</option>
                <option value="istri">Istri</option>
                <option value="ayah">Ayah</option>
                <option value="ibu">Ibu</option>
                <option value="anak">Anak</option>
                <option value="saudara">Saudara</option>
                <option value="teman">Teman</option>
            </select>
            <br>
        </div>
        <div>
            <label class="form-label">Lokasi</label>
            <br>
            <input class="form-control"type="text" name="lokasi" value="<?= $data->lokasi ?>">
            <br>
        </div>
        <div>
            <label class="form-label">Tanggal</label>
            <br>
            <input class="form-control" type="date" name="tanggal" value="<?= $data->tanggal ?>">
            <br>
        </div>
        <div>
            <label class="form-label">Alasan Hilang</label>
            <br>
            <input class="form-control" type="text" name="alasan_hilang" value="<?= $data->alasan_hilang ?>">
            <br>
        </div>
        <div>
            <label class="form-label">Detail Korban</label>
            <br>
            <input class="form-control" type="text" name="detail" value="<?= $data->detail ?>">
            <br>
        </div>
        <div>
            <label class="form-label">Nama Pelapor</label>
            <br>
            <input class="form-control" type="text" name="nama_pelapor" value="<?= $data->nama_pelapor ?>">
            <br>
        </div>
        <div>
            <label class="form-label"for="status">Status</label>
            <br>
            <select class="form-control" name="status" id="status" required>
                <option value="">Pilih Status Korban</option>
                <option value="Hilang">Hilang</option>
                <option value="Ditemukan">Ditemukan</option>
            </select>
            <br>
            <br>
        <button type="submit" name="submit_edit" class="btn btn-submit">Update</button>
        <input type="hidden" name="idx" value="<?= $data->idx ?>">
        <br>
        <br>
        <br>
    </form>

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

        a{
            text-decoration: none;
        }

        form {
            margin: 0 50px;
            width: 50%;
        }

        .logo {
            font-family: 'Roboto Slab';
            font-size: 28px;
            color: #245786;
        }

        .btn-submit{
            background-color: #245786;
            color: white;
            border-radius: 10px;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 16px;
            padding: 8px;
            width: 100px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .btn-submit:hover{
            background-color: #173652;
            color: white;
            
        }

    </style>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>