<!doctype html>
<html lang="en">
          <!-- Judul -->
          <?php foreach($data as $row):?>
          <div class="kontent">
          <div class="container">
                <div class="row m-auto justify-content-center">
                <h1 class="judul"><?php echo $row->judul;?></h1>
                
                </div>
                <div class="row m-auto justify-content-center">
                <p style="margin-top: -70px; color: rgba(0,0,0,0.5); font-size: 15px;">di posting oleh : Admin pada <?php echo $row->tanggal;?></p>
                
                </div>
               

              
          <!-- Akhir Judul -->
        <!-- Keterangan -->
            <div class="container">
              <div class="row">
                <div class="col-lg">
                   <p class="isi-berita"><?php echo $row->isi;?></p>
                </div>
              </div>
                
            </div>
            </div>
      </div>
      <?php endforeach;?>
        <!-- Akhir Keterangan -->
         <!-- Footer -->
         <div class="containter" style="margin-top: 450px">
                <div class="row footer1 footer">
                    <div class="col-md-12 text-center">
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