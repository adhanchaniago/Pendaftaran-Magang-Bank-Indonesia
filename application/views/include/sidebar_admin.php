<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header" style="color: #fff;"><?php echo $this->session->userdata('email'); ?></li>
    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="<?php echo base_url('admin/user'); ?>"><i class="fa fa-dashboard"></i> <span>User</span></a></li>
    <li><a href="<?php echo base_url('admin/pendaftar'); ?>"><i class="fa fa-dashboard"></i> <span>Pendaftar</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->