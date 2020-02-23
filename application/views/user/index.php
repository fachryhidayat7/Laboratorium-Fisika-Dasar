<!doctype html>
<html lang="en">
 
  <!-- CSS  -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/style.css">
  <body>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url(img/fotolab.jpeg);">
        <div class="container">
          <h1 class="display-4">Laboratorium <span>Fisika Dasar</span></h1>
          <h3 class="sub-display">Universitas Gunadarma</h3>
        </div>
      </div>
    <!-- Akhir Jumbotron -->

   <!-- LFD News -->
<div class="container">
      <div class="row">
        <h2 class="judul">BERITA LFD</h2>
        <div class="col-lg">
        <hr class="garis">
        </div>
      </div>
      <hr class="garis-dua">
      <?php foreach($data->result() as $row): ?>
      <div class="row">
        <img src="img/icon-notif.png" alt="icon satu" class="icon-satu" >
        <div class="col-lg content-satu">
          <a href="<?php echo base_url(). 'user/lfd_news'; ?>/<?php echo $row->id;?>"><h5><?php echo $row->judul;?></h5></a>
          <hr>
        </div>
      </div>

    <?php endforeach;?>
      
     
    </div>
    <!-- Akhir LFD News -->
    
    <!-- Prosedur LFD -->
    <div class="container margin-prosedur">
        <div class="row">
          <h2 class="judul">PROSEDUR LFD</h2>
          <div class="col-lg">
          <hr class="garis">
          </div>
        </div>
        <hr class="garis-dua">
    
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12 card-prosedur">
              <a href="<?php echo base_url(). 'user/tata_tertib'; ?>" style="text-decoration: none;">
                <div class="card shadow" style="width: 20rem; height: 20rem;">
              <div class="inner">
                <img src="img/atom1.png" class="card-img-top" alt="...">
              </div>
            <div class="card-body text-center p-2">
              <p class="card-text font-weight-bold">Tata Tertib Praktikum</p>
            </div>
          </div>
              </a>
            </div>
    
            <div class="col-lg-4 col-md-12 col-sm-12 card-prosedur">
              
            <a href="<?php echo base_url(). 'user/jadwal_praktikum'; ?>" style="text-decoration: none;">
                <div class="card shadow" style="width: 20rem; height: 20rem;">
              <div class="inner">
                <img src="img/praktikum.png" class="card-img-top" alt="...">
              </div>
            <div class="card-body text-center p-2">
              <p class="card-text font-weight-bold">Jadwal Praktikum</p>
            </div>
         </div>
              </a>
          
            </div>
    
            <div class="col-lg-4 col-md-12 card-prosedur">
  
            <a href="<?php echo base_url(). 'user/jadwal_pengulangan'; ?>" style="text-decoration: none;">
                <div class="card shadow" style="width: 20rem; height: 20rem;">
              <div class="inner">
                <img src="img/pengulangan.png" class="card-img-top" alt="...">
              </div>
            <div class="card-body text-center p-2">
              <p class="card-text font-weight-bold">Jadwal Pengulangan</p>
            </div>
          </div>
              </a>
         
            </div>
          </div>
        </div>
        <!-- Akhir Prosedur LFG -->
        
        <!-- Quotes -->
          <hr class="garis-dua">
        <div class="container">
            <section class="quotes">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h5>"Usaha adalah hasil kali gaya Anda dan perpindahan yang Anda capai. Seberapa besar pun gaya yang Anda berikan, namun bila Anda tidak semakin maju, maka usaha Anda adalah nol."</h5>
                  </div>
                </div>
      
                <div class="row justify-content-center">
                  <div class="col-lg-6 d-flex justify-content-center ">
                      
                    <figure class="figure">
                      <img src="img/man.png" class="figure-img img-fluid rounded-circle utama" alt="quotes 2">
                      <figcaption class="figure-caption">
                        <p>Quotes by</p>
                        <h5>LFD</h5>
                        
                      </figcaption>
                    </figure>

                  
                  </div>
                </div>
              </section>

        </div>
        
        <!-- Akhir Quotes -->

        <!-- Footer -->
        <div class="containter">
          <div class="row footer">
              <div class="col text-center">
                  <p>Lab Fisika Dasar |
                  Kampus H Gedung Utama Lantai Dasar - Depok |
                  2019</p>
              </div>
            </div>   
        </div>
        <!-- Akhir Footer -->
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>