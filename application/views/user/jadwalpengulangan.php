<!doctype html>
<html lang="en">

          <!-- Judul -->
          <div class="container">
                <div class="row m-auto justify-content-center">
                  <h1 class="judul">JADWAL PENGULANGAN</h1>
            
          <!-- Akhir Judul -->

          <!-- Inputan -->
            <div class="container input-kelas">
                    <form action="<?= base_url().'user/jadwal_pengulangan_table'?>" method="post">
                    <div class="col-lg">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input NPM" name="cari_pengulangan">
                    <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                    </button>
                    </div>
                    </div>
                </div>
            </form>
            </div>
          <!-- Akhir Inputan -->

        <!-- Keterangan -->
            <div class="container">
                <div class="col-lg">
                    <p class="keterangan">Keterangan: </p>
                    <p>Masukan NPM anda untuk melihat jadwal pengulangan</p>
                    <p>Contoh : 53415310</p>
                </div>
            </div>
        <!-- Akhir Keterangan -->
            

         <!-- Footer -->
         <div class="containter">
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