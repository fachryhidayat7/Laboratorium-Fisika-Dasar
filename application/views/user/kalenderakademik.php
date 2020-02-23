<!doctype html>
<html lang="en">
<style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
   .vismis {font-size: 30px;}
   .ulul {margin-left: -50px; margin-top: 0px;}
</style>

  
          <!-- Judul -->
          <div class="container">
                <div class="row m-auto justify-content-center">
                  <h1 class="judul">KALENDER AKADEMIK</h1>
                </div>
              
          <!-- Akhir Judul -->

        <!-- Keterangan -->
        <div class="konten">
            <div class="container">
                <div class="col-lg">
                    <p class="keterangan center" style="margin-top: -30px;" >Berikut ini merupakan Kalender Akademik untuk tahun ajaran <b>2019/2020</b></p>

                    
                </div>
            </div>
            </div>
        <!-- Akhir Keterangan -->
              
        <!-- tabel -->
                <div class="row justify-content-center" >
                <div class="col-lg d-flex justify-content-center">
                <table class="table table-bordered table-kalender">
                  <thead>
                  <tr>
                  <th style="text-align:center;">Kegiatan</th>
                  <th style="text-align:center;"> Tanggal</th>
                    </tr>
                   </thead>
                   <tbody>
                     <?php 
                      foreach ($kalender->result() as $row):
                     ?>
                   <tr>
                   <td><?php echo $row->kegiatan?></td>
                   <td><?php echo $row->tanggal_kegiatan?></td>
                   </tr>
                      <?php endforeach;?>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- Akhir Tabel -->

         <!-- Footer -->
         <div class="containter">
                <div class="row footer">
                    <div class="col-lg text-center " >
                        <p clas="teks-footer">Lab Fisika Dasar |
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