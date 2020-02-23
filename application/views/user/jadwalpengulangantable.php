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
                    <!-- <p class="keterangan">Keterangan: </p>
                    <p>Penjelasan dari keterangan tersebut</p> -->
                </div>
            </div>
        <!-- Akhir Keterangan -->
            
          
        <!-- tabel -->
        <?php 
        if ($cari->num_rows() > 0)
        {
          echo '
          <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-12 d-flex justify-content-center">
          <h4 class="jadwal">Jadwal Pengulangan Praktikum PTA 2019/2020</h4>
          </div>
          </div>

          <div class="row justify-content-center" style="margin-top: 20px;">
          <div class="col-lg">
                      
          <table class="table table-bordered">';

            echo "
            <thead>
            <tr>
            <th >NPM</th>
            <th >Kelas</th>
            <th >Nama</th>
            <th >Kelompok</th>
            <th >Shift</th>
            <th >Modul yang Diulang</th>
            <th >Tanggal</th>
            </tr>
            </thead>
            ";
            foreach ($cari->result() as $row):
              {
            echo "
            <tbody>
            <tr>
            <td>$row->npm</td>
            <td>$row->kelas</td>
            <td>$row->nama</td>
            <td>$row->kelompok</td>
            <td>$row->shift</td>
            <td>$row->modul_ulang</td>
            <td>$row->tgl_ulang</td>     
            </tr>
            </tbody>
            ";      
              }
            endforeach;
            }
            else {
              echo "<div class='row justify-content-center'>
              <div class='col-lg-12 d-flex justify-content-center'>
              <h4 class='jadwal'>Data Tidak Tersedia</h4>
              </div>
              <br><br><br><br><br><br><br>";
            }
            ?>
             </table>
             </div>
             </div>
            
        <!-- Akhir Tabel -->

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