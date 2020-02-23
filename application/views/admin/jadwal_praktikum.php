<!DOCTYPE html>
<html>
<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }
    .example-modal .modal {
      background: transparent !important;
    }
  </style>
  
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      
     
      <section class="content">
      <div class="row">
        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">Tambah Data</a> 
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Jadwal Praktikum</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>    
                <tr>
                  <!-- <th>No</th> -->
                  <th>Npm</th>
                  <th>Kelas</th>
                  <th>Nama</th>
                  <th>Kelompok</th>
                  <th>M1</th>
                  <th>M2</th>
                  <th>M3</th>
                  <th>M4</th>
                  <th>M5</th>
                  <th>M6</th>
                  <th>M7</th>
                  <th>Shift</th>
                  <th>Hari</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>   
                <?php foreach($data->result() as $row):?>
                <?php $nomor = 1;?>          
                <tr>
                  <!-- <td><?php echo $nomor?></td> -->
                  <td><?php echo $row->npm?></td>
                  <td><?php echo $row->kelas?></td>
                  <td><?php echo $row->nama?></td>
                  <td><?php echo $row->kelompok?></td>
                  <td><?php echo $row->m1?></td>
                  <td><?php echo $row->m2?></td>
                  <td><?php echo $row->m3?></td>
                  <td><?php echo $row->m4?></td>
                  <td><?php echo $row->m5?></td>
                  <td><?php echo $row->m6?></td>
                  <td><?php echo $row->m7?></td>
                  <td><?php echo $row->shift?></td>
                  <td><?php echo $row->hari?></td>
                  <td>
                  <a class="btn btn-success btn-sm" role="button" data-toggle="modal" data-target="#modal_edit<?php echo $row->npm;?>">Ubah</a>
                  <a href="<?php echo base_url(). 'admin/hapus_praktikum'; ?>/<?php echo $row->npm;?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin Hapus ?')">Hapus</a>  
                  </td>
                </tr>
                <?php $nomor++;?>
                <?php endforeach;?>
            
                </tbody>     
              </table>
            </div>        
          </div>
        </div>
    </section>
    </div>

    <div class="modal fade" id="modal-tambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url().'admin/tambah_praktikum'?>" method="POST">
                <div class="modal-body">
                <label class="col-sm control-label">NPM</label>
                  <input  type="text" class="form-control" placeholder="Masukkan NPM" name="npm" >
            </div>
              <div class="modal-body">
                <label class="col-sm control-label">Kelas</label>
                   <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" >
            </div>
             <div class="modal-body">
                <label class="col-sm control-label">Nama</label>
                   <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama" >
            </div>
            <div class="modal-body">
                <label class="col-sm control-label">Kelompok</label>
                  <input list="data_pilot" type="text" class="form-control" id="kelompok" name="kelompok" placeholder="kelompok" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M1</label>
                  <input type="text" class="form-control" name="m1" placeholder="Minggu Pertama" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M2</label>
                  <input type="text" class="form-control"  name="m2" placeholder="Minggu Kedua" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M3</label>
                  <input type="text" class="form-control"  name="m3" placeholder="Minggu Ketiga" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M4</label>
                  <input type="text" class="form-control"  name="m4" placeholder="Minggu Keempat" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M5</label>
                  <input type="text" class="form-control"  name="m5" placeholder="Minggu Kelima" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M6</label>
                  <input type="text" class="form-control"  name="m6" placeholder="Minggu Keenam" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M7</label>
                  <input type="text" class="form-control"  name="m7" placeholder="Minggu Ketujuh" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Hari</label>
                  <input type="text" class="form-control"  name="hari" placeholder="Masukkan Hari" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Shift</label>
                  <input type="text" class="form-control"  name="shift" placeholder="Masukkan Shift" >
            </div>
          
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
            </div>
          </form>
         
          </div>
        </div>


        <?php foreach ($data->result() as $row): ?>
          <div class="modal fade" id="modal_edit<?php echo $row->npm;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data</h4>
              </div>
               
              <form class="form-horizontal" action="<?php echo base_url().'admin/ubah_praktikum';?>" method="POST">
              <div class="modal-body">
                <label class="col-sm control-label">NPM</label>
                  <input  type="text" class="form-control" placeholder="Masukkan NPM" name="npm" value="<?php echo $row->npm;?>" >
            </div>
              <div class="modal-body">
                <label class="col-sm control-label">Kelas</label>
                   <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" value="<?php echo $row->kelas;?>" >
            </div>
             <div class="modal-body">
                <label class="col-sm control-label">Nama</label>
                   <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama" value="<?php echo $row->nama;?>">
            </div>
            <div class="modal-body">
                <label class="col-sm control-label">Kelompok</label>
                  <input list="data_pilot" type="text" class="form-control" id="kelompok" name="kelompok" placeholder="kelompok" value="<?php echo $row->kelompok;?>" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M1</label>
                  <input type="text" class="form-control" name="m1" placeholder="Minggu Pertama" value="<?php echo $row->m1;?>" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M2</label>
                  <input type="text" class="form-control"  name="m2" placeholder="Minggu Kedua" value="<?php echo $row->m2;?>">
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M3</label>
                  <input type="text" class="form-control"  name="m3" placeholder="Minggu Ketiga" value="<?php echo $row->m3;?>">
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M4</label>
                  <input type="text" class="form-control"  name="m4" placeholder="Minggu Keempat" value="<?php echo $row->m4;?>">
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M5</label>
                  <input type="text" class="form-control"  name="m5" placeholder="Minggu Kelima" value="<?php echo $row->m5;?>" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M6</label>
                  <input type="text" class="form-control"  name="m6" placeholder="Minggu Kelima" value="<?php echo $row->m6;?>" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">M7</label>
                  <input type="text" class="form-control"  name="m7" placeholder="Minggu Kelima" value="<?php echo $row->m7;?>" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Hari</label>
                  <input type="text" class="form-control"  name="hari" placeholder="Masukkan Hari" value="<?php echo $row->hari;?>">
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Shift</label>
                  <input type="text" class="form-control"  name="shift" placeholder="Masukkan Shift" value="<?php echo $row->shift;?>">
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-info pull-right">Ubah Data</button>
              </div>
            </div>
          </form>
          </div>
        </div>   
        <?php endforeach;?> 
 </section>
</body>
</html>
