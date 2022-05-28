<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SMAN 1 Stabat</title>
    <link rel="icon" href="<?= base_url() ?>/assets/img/tutwuri.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3ba93a3de6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-xl" style="background-color: #70CCFF;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="vertical-align: middle">
                <img src="<?= base_url() ?>/assets/img/tutwuri.png" alt="Icon" width="40" height="40" class="d-inline-block align-text-middle">
                SMAN 1 Stabat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Kata Sambutan</a></li>
                            <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Direktori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Direktori Siswa</a></li>
                            <li><a class="dropdown-item" href="#">Direktori Alumni</a></li>
                            <li><a class="dropdown-item" href="#">Direktori Guru</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Agenda Kegiatan</a></li>
                            <li><a class="dropdown-item" href="#">Berita</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= base_url()?>" target="_blank">Pengumuman Kelulusan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Galeri Foto</a></li>
                            <li><a class="dropdown-item" href="#">Galeri Video</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ekstrakulikuler
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pramuka</a></li>
                            <li><a class="dropdown-item" href="#">PMR</a></li>
                            <li><a class="dropdown-item" href="#">Olimpiade</a></li>
                            <li><a class="dropdown-item" href="#">Olahraga</a></li>
                            <li><a class="dropdown-item" href="#">Paskibra</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <h1 class="title"><strong>Kontak</strong></h1>

        <div class="content">
            <h4>Alamat:</h4>
            <p>Jl. Proklamasi No. 3, Kwala Bingai, Kecamatan Stabat, Kabupaten Langkat, Sumatera Utara, 20811</p>
        </div>

        <div class="content">
            <h4>Nomor Telepon:</h4>
            <p><a href="tel:0618911416">(061) 8911416</a></p>
        </div>

        <div class="content">
            <h4>Email:</h4>
            <p><a href="mailto:informasi@smanegeri1stabat.sch.id" target="_blank">informasi@smanegeri1stabat.sch.id</a></p>
        </div>

        <div class="content">
            <h4>Social Media:</h4>
            <p class="content-b">Website: <a href="https://smanegeri1stabat.sch.id" target="_blank">smanegeri1stabat.sch.id</a></p>
            <p>Instagram: <a href="https://www.instagram.com/sman1stabat_official" target="_blank">sman1stabat_official</a></p>
        </div>
    </div>

    <div class="footer fixed-bottom" style="background-color: #70CCFF; text-align: center">
        <div class="container" style="padding: 30px 0">
            <p class="text-muted" style="margin: 0">Copyright &copy; 2022 SMA Negeri 1 Stabat - All Rights Reserved</p>
            <p class="text-muted" style="margin: 0">Sistem Informasi Lab 5 | Kelompok 5</p>
        </div>
    </div>
</body>
</html>