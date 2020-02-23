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
              <h3 class="box-title">Data Kalender Akademik</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>    
                <tr>
                  <!-- <th>No</th> -->
                  <!-- <th>id Kalender</th> -->
                  <th>Kegiatan</th>
                  <th>Tanggal</th> 
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>   
                <?php foreach($data->result() as $row):?>
                <?php $nomor = 1;?>          
                <tr>
                  <!-- <td><?php echo $nomor?></td> -->
                  <!-- <td><?php echo $row->id_kalender?></td> -->
                  <td><?php echo $row->kegiatan?></td>
                  <td><?php echo $row->tanggal_kegiatan?></td>
                  <td>
                  <a class="btn btn-success btn-sm" role="button" data-toggle="modal" data-target="#modal_edit<?php echo $row->id_kalender;?>">Ubah</a>
                  <a href="<?php echo base_url(). 'admin/hapus_kalender'; ?>/<?php echo $row->id_kalender;?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin Hapus ?')">Hapus</a>  
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
              <form class="form-horizontal" action="<?php echo base_url().'admin/tambah_kalender'?>" method="POST">
                <div class="modal-body">
                <label class="col-sm control-label">Kegiatan</label>
                  <input  type="text" class="form-control" placeholder="Tuliskan Kegiatan" name="kegiatan" >
            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Tanggal</label>
                  <input type="text" class="form-control"  name="tanggal_kegiatan" placeholder="Tanggal" required="true" >
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
          <div class="modal fade" id="modal_edit<?php echo $row->id_kalender;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data</h4>
              </div>
               
              <form class="form-horizontal" action="<?php echo base_url().'admin/ubah_kalender';?>" method="POST">
            
              <div class="modal-body">
                <label class="col-sm control-label">Kegiatan</label>
                 <input  type="hidden" class="form-control" placeholder="Id" name="id_kalender" value="<?php echo $row->id_kalender;?>" >
                  <input  type="text" class="form-control" placeholder="Kegiatan" name="kegiatan" value="<?php echo $row->kegiatan;?>" >

            </div>
            <div class="modal-body">
                <label  class="col-sm control-label">Tanggal</label>
                  <input type="text" class="form-control"  name="tanggal_kegiatan" placeholder="Tanggal" value="<?php echo $row->tanggal_kegiatan;?>">
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
