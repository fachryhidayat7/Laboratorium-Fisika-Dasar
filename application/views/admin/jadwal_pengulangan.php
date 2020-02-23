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
              <h3 class="box-title">Data Jadwal Pengulangan</h3>
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
                  <th>Shift</th>
                  <th>Modul Ulang</th> 
                  <th>Tanggal Ulang</th>
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
                  <td><?php echo $row->shift?></td>
                  <td><?php echo $row->modul_ulang?></td>
                  <td><?php echo $row->tgl_ulang?></td>
                  <td>
                  <a class="btn btn-success btn-sm" role="button" data-toggle="modal" data-target="#modal_edit<?php echo $row->npm;?>">Ubah</a>
                  <a href="<?php echo base_url(). 'admin/hapus_pengulangan'; ?>/<?php echo $row->npm;?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin Hapus ?')">Hapus</a>  
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
              <form class="form-horizontal" action="<?php echo base_url().'admin/tambah_pengulangan'?>" method="POST">
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
                <label  class="col-sm control-label">Shift</label>
                  <input type="text" class="form-control"  name="shift" placeholder="Masukkan Shift" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Modul yang Diulang</label>
                  <input type="text" class="form-control" name="modul_ulang" placeholder="Modul yang Diulang" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Tanggal Ulang</label>
                  <input type="date" class="form-control"  name="tgl_ulang" placeholder="Tanggal" required="true" >
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
               
              <form class="form-horizontal" action="<?php echo base_url().'admin/ubah_pengulangan';?>" method="POST">
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
                <label  class="col-sm control-label">Shift</label>
                  <input type="text" class="form-control"  name="shift" placeholder="Masukkan Shift" value="<?php echo $row->shift;?>">
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Modul yang Diulang</label>
                  <input type="text" class="form-control" name="modul_ulang" placeholder="Modul yang Diulang" value="<?php echo $row->modul_ulang;?>" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Tanggal Ulang</label>
                  <input type="date" class="form-control"  name="tgl_ulang" placeholder="Tanggal" value="<?php echo $row->tgl_ulang;?>">
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
