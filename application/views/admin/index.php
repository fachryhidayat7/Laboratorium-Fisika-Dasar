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
        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">Tambah Berita</a> 
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">LFD NEWS</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>    
                <tr>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody> 
                <?php foreach ($data->result() as $row):?>            
                <tr>
                  <td><?php echo $row->judul;?></td>
                  <td>
                    <?php
                      $num_char = 50;
                      $text = $row->isi;
                      echo substr($text, 0, $num_char) . '...';
                      ?>
                    </td>
                    <td>
                      <?php echo $row->tanggal;?>
                    </td>
                  <td>
                    <a class="btn btn-success btn-sm" role="button" data-toggle="modal" data-target="#modal_edit<?php echo $row->id;?>">Ubah</a>
                    <a href="<?php echo base_url().'admin/hapus_berita'?>/<?php echo $row->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?');">Hapus</a>
                    
                  </td>

                </tr>
                <?php endforeach;?>
            
                </tbody>     
              </table>
            </div>        
          </div>
        </div>
    </section>
    </div>

    <!-- Modal Tambah -->

     <div class="modal fade" id="modal-tambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url().'admin/berita_lfd'?>" method="POST">

               
                <div class="modal-body">
                <label class="col-sm control-label">Judul Berita</label>
                  <textarea  name="judul" placeholder="Judul Berita" class="form-control"></textarea>
            </div>
              <div class="modal-body">
                <label class="col-sm control-label">Isi Berita</label>
                   <textarea  id="editor1" name="isi" placeholder="Isi Berita" class="form-control"></textarea>
              </div>

              <div class="modal-body">
                <label  class="col-sm control-label">Tanggal</label>
                  <input type="date" class="form-control"  name="tanggal" placeholder="Tanggal" >
              </div>
             
          
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
            </div>
          </form>
         
          </div>
        </div>
        <!-- AKhir Modal Tambah -->

        <!-- Modal Edit -->

        <?php foreach ($data->result() as $row): ?>
          <div class="modal fade" id="modal_edit<?php echo $row->id;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data</h4>
              </div>
               
               <form class="form-horizontal" action="<?php echo base_url().'admin/ubah_berita'?>" method="POST">
                <div class="modal-body">
                <label class="col-sm control-label">Judul Berita</label>
                <input type="hidden" class="form-control"  name="id" placeholder="Id Berita" value="<?php echo $row->id;?>">
                  <textarea name="judul" placeholder="Judul Berita" class="form-control"><?php echo $row->judul;?></textarea>
            </div>
              <div class="modal-body">
                <label class="col-sm control-label">Isi Berita</label>
                   <textarea id="editor1" name="isi" placeholder="Isi Berita" class="form-control"><?php echo $row->isi;?></textarea>
              </div>

              <div class="modal-body">
                <label  class="col-sm control-label">Tanggal</label>
                  <input type="date" class="form-control"  name="tanggal" placeholder="Tanggal" value="<?php echo $row->tanggal;?>" >
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
 
</body>
</html>

<!-- Script CK editor-->
<script>
    CKEDITOR.replace( 'editor1' );
</script>
