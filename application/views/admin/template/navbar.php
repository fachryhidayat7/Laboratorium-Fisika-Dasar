<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url().'admin'?>"><i class="fa fa-book"></i> <span>Berita</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Jadwal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/jadwal_praktikum'?>"><i class="fa fa-circle-o"></i> Praktikum</a></li>
            <li><a href="<?php echo base_url().'admin/jadwal_pengulangan'?>"><i class="fa fa-circle-o"></i>Pengulangan</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url().'admin/jadwal_kalender'?>"><i class="fa fa-book"></i> <span>Kalender Akademik</span></a></li>
        <li><a href="<?php echo base_url().'admin/logout'?>" onclick="return confirm('Yakin Keluar?');"><i class="fa fa-book"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>