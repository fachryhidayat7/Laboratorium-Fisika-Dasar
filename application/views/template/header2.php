<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/style2.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <title>Jadwal Praktikum</title>
    <style>
    .navbar-brand {
    font-family: Viga;
    font-size: 32px;
}
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
              <a class="navbar-brand" href="<?= base_url().'user'?>">LFD</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link active nav-style" href="<?php echo base_url().'user'?>" style="">Home <span class="sr-only">(current)</span></a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                      Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url().'user/gambaran_umum'?>">Gambaran Umum</a>
                      <a class="dropdown-item" href="<?php echo base_url().'user/visi_misi'?>">Visi dan Misi</a>
                      <a class="dropdown-item" href="<?php echo base_url().'user/struktur_organisasi'?>">Struktur Organisasi</a>
                      <a class="dropdown-item" href="<?php echo base_url().'user/fasilitas'?>">Fasilitas</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        Praktikum
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url().'user/kalender_akademik'?>">Kalender Akademik</a>
                        <a class="dropdown-item" href="<?php echo base_url().'user/jadwal_praktikum'?>">Jadwal Praktikum</a>
                        <a class="dropdown-item" href="<?php echo base_url().'user/jadwal_pengulangan'?>">Jadwal Pengulangan</a>
                        <a class="dropdown-item" href="<?php echo base_url().'user/tata_tertib'?>">Tata Tertib Praktikum</a>
                      </div>
                    </li>
                    <a class="nav-item nav-link nav-style" href="<?php echo base_url().'user/download_modul'?>">Download Modul</a>
                    
                </div>
            </div>
            </div>
          </nav>
          <!-- Akhir Navbar -->