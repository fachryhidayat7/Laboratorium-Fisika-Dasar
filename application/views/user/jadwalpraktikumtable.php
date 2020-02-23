<!doctype html>
<html lang="en">

<!-- Judul -->
  <div class="container">
   <div class="row m-auto justify-content-center">
    <h1 class="judul">JADWAL PRAKTIKUM</h1>
     <!-- Akhir Judul -->

<!-- Inputan -->
<div class="container input-kelas">
                    <form action="<?= base_url().'user/jadwal_praktikum_table'?>" method="post">
                    <div class="col-lg">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input Kelas" name="cari_kelas">
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
        <p class="keterangan">Untuk input berdasarkan kelas tidak menggunakan spasi.</p>
        <p>> Contoh : 1ia15 atau 1IC03</p>
    </div>
    </div>
<!-- Akhir Keterangan -->
      
          
<!-- tabel -->
  
      <?php if($cari->num_rows() > 0)
        {

        echo '
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-12 d-flex justify-content-center">
          <h4 class="jadwal">Jadwal Praktikum PTA 2019/2020</h4>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">';
         
          echo "<p>Untuk Input Kelas $cari_hari->kelas</p>";
        }
        else {
          echo"";
        }
        ?>
      </div>
      </div>
    <div class="row justify-content-center">
      
        <div class="col-lg-2 col-md-2 d-flex justify-content-center">
        <?php if($cari->num_rows() > 0)
        {
         echo "<p>Hari: $cari_hari->hari</p>";
        }
        else {
          echo"";
        }
        ?>
            
        </div>
        <div class="col-lg-2 col-md-2 d-flex justify-content-center">
        <?php if($cari->num_rows() > 0)
        {
         echo "<p>Shift: $cari_hari->shift</p>";
        }
        else {
          echo"";
        }
        ?>    
        </div>
        </div>

    <div class="row justify-content-center ">
    <div class="col-lg ">
    <table class="table table-bordered">
              
              <?php
 
 if($cari->num_rows() > 0)
 {
   echo "
          <thead>
          <tr>
          <th >NPM</th>
          <th >Kelas</th>
          <th >Nama</th>
          <th >Kelompok</th>
          <th >m1</th>
          <th >m2</th>
          <th >m3</th>
          <th >m4</th>
          <th >m5</th>
          </thead>";
              
   foreach ($cari->result() as $row): {
     echo"
          <tbody>
          <tr>
          <td>$row->npm</td>
          <td>$row->kelas</td>
          <td>$row->nama</td>
          <td>$row->kelompok</td>
          <td>$row->m1</td>
          <td>$row->m2</td>
          <td>$row->m3</td>
          <td>$row->m4</td>
          <td>$row->m5</td>                
          </tr>
          </tbody>
          ";      
   }

    endforeach;
 }

 else
 {
   echo "<div class='row justify-content-center'>
        <div class='col-lg-12 d-flex justify-content-center'>
        <h4 class='jadwal'>Data Tidak Tersedia</h4>
        </div>
        <br><br><br><br><br><br><br>";
 }
 ?>
 
  </table>            
<!-- Akhir Tabel -->
<!-- <div class='col-lg-12 d-flex justify-content-center'>
<p style="color: grey;">Berlaku mulai 30 September 2019</p>
</div> -->

<!-- Footer -->
    <div class="containter" style="margin-top:10%;">
      <div class="row footer2 footer">
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