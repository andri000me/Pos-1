<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />



<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <?php $h=$this->session->userdata('akses'); ?>
     <?php $u=$this->session->userdata('user'); ?>
    <h1>
        Dashboard
        <small> </small>
    </h1>
    
</section>

<!-- Main content -->
<section class="content ">
 
    <div class="row">
        <div class="content-header">
            <?php if($h=='1'){ ?> 
          <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php echo $pengguna; ?></h3>
                                <p>Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="<?php echo site_url('pengguna') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?= date('d M Y') ?></h3>
                                <p>Tanggal</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    
                </div>
        <?php }?>
        <?php if($h=='2'){ ?> 
            <div class="row">
                 <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                            <?php 
                                    $this->db->join('tbl_user','user_id=id_level','LEFT');
                            $data = $this->db->get_where('tbl_order', array('id_level' => $this->session->userdata('idadmin')))->result();
                            $subtotal = 0;
                            foreach ($data as $key ): ?>
                                <h3 style="display: none;">Rp. <?= number_format($subtotal += $key->berat*$key->komisi); ?></h3>
                            <?php endforeach ?>
                            <h4>Rp. <?= number_format($subtotal)?></h4>
                                <p>KOMISI</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-money"></i>
                            </div>
                            <a href="<?php echo site_url('pembayaran') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->

                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                            <h4><?php echo $this->session->userdata('nama'); ?></h4>
                                <p>AGEN</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <a href="<?php echo site_url('pembayaran') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                     
            </div>
        <?php }?>
        <?php if($h=='3'){ ?> 
            <div class="row">
                 <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php echo $biaya ?></h3>
                                <p>Jurnal</p>
                            </div>
                            <div class="icon">
                            </div>
                            <a href="<?php echo site_url('jurnal') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                     <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo $biaya ?></h3>
                                <p>Buku Besar KAS</p>
                            </div>
                            <div class="icon">
                            </div>
                            <a href="<?php echo site_url('bb/kas') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo $biaya ?></h3>
                                <p>Buku Besar PENDAPATAN</p>
                            </div>
                            <div class="icon">
                            </div>
                            <a href="<?php echo site_url('bb/pendapatan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
            </div>
        <?php }?>
        </div>
        
     
    </div><!-- /.row (main row) -->

</section><!-- /.content -->


<?php
$this->load->view('template/js');
?>



<!--tambahkan custom js disini-->

<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>