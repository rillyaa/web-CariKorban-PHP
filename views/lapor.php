<!doctype html>
<html lang="en">

<head>
    <title>Lapor</title>

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
                        <a class="nav-link active" aria-current="page" href="lapor.php">Lapor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datahilang.php">Data Hilang</a>
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
    <div>
        <h4>Laporan Korban Hilang</h4>
    </div>
    <div>
        <h5.5>Mohon mengisi form berikut untuk melaporkan kerabat atau teman Anda yang hilang atau belum diketahui keberadaannya.</h5.5>
    </div>
    <br>
    <form action="..\models\process.php" method="post" class="form-lapor">
        <div class="mb-3">
            <label class="form-label">Nama teman atau kerabat yang hilang</label>
            <input class="form-control" type="text" placeholder="Nama lengkap (wajib diisi)" name="nama_korban" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="hubungan">Hubungan dengan Anda</label>
            <select class="form-control" name="hubungan" id="hubungan" required>
                <option value="">Pilih hubungan</option>
                <option value="suami">Suami</option>
                <option value="istri">Istri</option>
                <option value="ayah">Ayah</option>
                <option value="ibu">Ibu</option>
                <option value="anak">Anak</option>
                <option value="saudara">Saudara</option>
                <option value="teman">Teman</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Lokasi terakhir dilihat</label>
            <input class="form-control" type="text" placeholder="Nama kota atau daerah" name="lokasi" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="tanggal_hilang">Tanggal hilang</label>
            <input class="form-control" type="date" id="tanggal_hilang" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="hilang">Hilang karena</label>
            <select class="form-control" name="alasan_hilang" id="hilang" required>
                <option value="">Pilih Alasan Hilang</option>
                <option value="gempa">Gempa Bumi XXX</option>
                <option value="banjir">Banjir XXX</option>
                <option value="longsor">Tanah Longsor XXX</option>
                <option value="tsunami">Tsunami XXX</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Detail informasi yang dapat disampaikan</label>
            <textarea class="form-control" name="detail" id="" cols="30" rows="8" placeholder="Berikan informasi sebanyak mungkin tentang kerabat atau teman Anda yang hilang (misalnya ciri-ciri fisik, pakaian dan perhiasan yang dikenakan)" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Foto kerabat atau teman Anda yang hilang</label>
            <input class="form-control" type="file" name="foto" accept="image/*">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama pelapor</label>
            <input class="form-control" type="text" name="nama_pelapor" placeholder="Nama lengkap Anda">
        </div>
        <div class="mb-3">
            <label class="form-label" for="phone">No handphone pelapor</label>
            <input class="form-control" type="tel" id="phone" name="telepon" pattern="[0]{1}[8]{1}[0-9]{2}[0-9]{4}[0-9]{4}" placeholder="No telepon Anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email pelapor</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Email Anda">
        </div>

        <!-- <button type="submit" name="submit_simpan" class="btn btn-submit">Laporkan korban hilang</button> -->

        <button class="button" style="vertical-align:middle"><span>Laporkan Korban Hilang </span></button>
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
        }

        .logo {
            font-family: 'Roboto Slab';
            font-size: 28px;
            color: #245786;
        }
        
        /* .btn-submit{
            background-color: #245786;
            color: white;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .btn-submit:hover{
            background-color: #173652;
            color: white;
            
        } */

        .button {
            display: inline-block;
            border-radius: 10px;
            background-color: #245786;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 16px;
            padding: 10px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>