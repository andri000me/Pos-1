<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                
            </div>
            <div class="pull-left info">
               <b><?php echo strtoupper($this->session->userdata('user')); ?></b>
            </div>
        </div>
        <!-- search form -->
        
        <li class="header"></li>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php $u=$this->session->userdata('user'); ?>
        <?php $h=$this->session->userdata('akses'); ?>
        <ul class="sidebar-menu">
            <?php if($h=='1'){ ?> 
                <li class="<?php if($this->uri->segment('1')=='welcome') { echo"active";}?>"><a href="<?php echo site_url('welcome') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="<?php if($this->uri->segment('1')=='pengguna') { echo"active";}?>"><a href="<?php echo site_url('pengguna') ?>"><i class="fa fa-user"></i> Pengguna</a></li>
                <li class="<?php if($this->uri->segment('1')=='agen') { echo"active";}?>"><a href="<?php echo site_url('agen') ?>"><i class="fa fa-users"></i> Data Agen </a></li>
                <li class="<?php if($this->uri->segment('1')=='pengiriman') { echo"active";}?>"><a href="<?php echo site_url('pengiriman') ?>"><i class="fa fa-truck"></i> Pengiriman </a></li>
               
                
            <?php }?>

        
            <?php if($h=='2'){ ?>
                <li class="<?php if($this->uri->segment('1')=='welcome') { echo"active";}?>"><a href="<?php echo site_url('welcome') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li> 
                 <li class="<?php if($this->uri->segment('1')=='pembayaran') { echo"active";}?>"><a href="<?php echo site_url('pembayaran') ?>"><i class="fa fa-money"></i> Pembayaran</a></li>
                 
            <?php }?>

            <?php if($h=='3'){ ?>
                 <!-- <li><a href="<?php echo site_url('jurnal') ?>"><i class="fa fa-book"></i> Jurnal</a></li>
                                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Buku Besar</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('bb/kas') ?>"><i class="fa fa-circle-o"></i>  Kas</a></li>
                    <li><a href="<?php echo site_url('bb/pendapatan') ?>"><i class="fa fa-circle-o"></i> Pendapatan </a></li>
                </ul>
            </li> -->
            <?php }?>
            <li class="header"></li>
            <li><a href="<?php echo base_url().'administrator/logout'?>"><i class="fa fa-circle-o text-danger"></i> Logout</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">