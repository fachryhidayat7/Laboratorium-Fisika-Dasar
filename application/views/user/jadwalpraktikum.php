<!doctype html>
<html lang="en">
  
          <!-- Judul -->
          <div class="container">
                <div class="row m-auto justify-content-center">
                  <h1 class="judul">JADWAL PRAKTIKUM</h1>
                
          <!-- Akhir Judul -->
          <div class="container">
          <div class="col-lg-12">
          <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Shift</th>
            <th scope="col">Senin</th>
            <th scope="col">Selasa</th>
            <th scope="col">Rabu</th>
            <th scope="col">Kamis</th>
            <th scope="col">Jumat</th>
            <th scope="col">Sabtu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>I</td>
            <td>1KA02 + 1KA14A</td>
            <td>1IC01 + 1IC03A</td>
            <td>1IB01</td>
            <td>1IA08 + 1IA10A</td>
            <td>1KA03 + 1KA07A</td>
            <td>1IA01 + 1IA03A</td>
          </tr>
          <tr>
            <td>II</td>
            <td>1KA02 + 1KA05</td>
            <td>1IC03B + 1IC02</td>
            <td>1IB02</td>
            <td>1IA10B + 1IA09</td>
            <td>1KA07B + 1KA04</td>
            <td>1IA03B + 1IA02</td>
          </tr>
          <tr>
            <td>III</td>
            <td>1KA19</td>
            <td>1KB02</td>
            <td>1KA11 + 1KA13A</td>
            <td>1KA17 + 1KA06A</td>
            <td>1KB01</td>
            <td></td>
          </tr>
          <tr>
            <td>IV</td>
            <td>1DC01</td>
            <td>1DB01</td>
            <td>1KA13B + 1KA12</td>
            <td>1KA06B + 1KA18</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
          <!-- Inputan -->
            <div class="container input-kelas">
                    <form action="<?= base_url().'user/jadwal_praktikum_table'?>" method="post">
                    <div class="col-lg">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Input Kelas atau Input Hari" name="cari_kelas">
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