
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="Toko Ateng">

    <title>Welcome To Point of Sale Apps</title>

    <!-- Bootstrap Core CSS -->
      <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">

      <style type="text/css">
      .bg {
           width: 100%;
           height: 100%;
           position: fixed;
           z-index: -1;
           float: left;
           left: 0;
           margin-top: -20px;
      }
      </style>
</head>

<body style="background-color:#F0F8FF">

    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page text-center" style="color:#008B8B;">DASHBOARD
                </h1><hr>
            </div>
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">
     <?php $h=$this->session->userdata('akses'); ?>
     <?php $u=$this->session->userdata('user'); ?>

        <!-- Projects Row -->
        <div class="row">
         <?php if($h=='1'){ ?> 
           <!--  <div class="col-md-4 portfolio-item">
                <div class="menu-item " style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/barang'?>" data-toggle="modal">
                           <i class="fa fa-shopping-cart"></i>
                            <p style="text-align:center;font-size:20px;">Barang</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-4 portfolio-item">
                <div class="menu-item green" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/penjualan/terjual'?>" data-toggle="modal">
                           <i class="fa fa-cubes"></i>
                            <p style="text-align:center;font-size:20px;">Penjualan</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-orange" style="height:150px;">
                     <a href="<?php echo base_url().'admin/suplier'?>" data-toggle="modal">
                           <i class="fa fa-truck"></i>
                            <p style="text-align:center;font-size:20px;">Suplier</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-4 portfolio-item">
                <div class="menu-item color" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/kategori'?>" data-toggle="modal">
                           <i class="fa fa-sitemap"></i>
                            <p style="text-align:center;font-size:20px;">Kategori</p>
                      </a>
                </div> 
            </div> -->
            <?php }?>
            <?php if($h=='2'){ ?> 
            <div class="col-md-6 portfolio-item">
                <div class="menu-item blue" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/penjualan'?>" data-toggle="modal">
                           <i class="fa fa-dashboard"></i>
                            <p style="text-align:center;font-size:20px;">Penjualan</p>
                      </a>
                </div> 
            </div>
            <!-- <div class="col-md-3 portfolio-item">
                <div class="menu-item green" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan_grosir'?>" data-toggle="modal">
                           <i class="fa fa-users"></i>
                            <p style="text-align:center;font-size:20px;">Penjualan Grosir</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-orange" style="height:150px;">
                     <a href="<?php echo base_url().'admin/retur'?>" data-toggle="modal">
                           <i class="fa fa-truck"></i>
                            <p style="text-align:center;font-size:20px;">Retur</p>
                      </a>
                </div> 
            </div> -->
            <div class="col-md-6 portfolio-item">
                <div class="menu-item color" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/laporan'?>" data-toggle="modal">
                           <i class="fa fa-file"></i>
                            <p style="text-align:center;font-size:20px;">Laporan</p>
                      </a>
                </div> 
            </div>
            <?php }?>

            <?php if($h=='3'){ ?> 
               <div class="row">
            <div class="col-lg-12">
           <table class="table table-bordered table-condensed" border="1" style="font-size:11px; " id="mydata">
                <thead>
                    <tr >  
                      <th rowspan="2">No</th>
                          <th rowspan="2" style="text-align: center;">AKSI</th>
                          <th rowspan="2" style="text-align: center;">TANGGAL</th>
                          <th rowspan="2" style="text-align: center;">KETERANGAN</th>
                          <th rowspan="2"  style="text-align: center;">REF</th>
                          <th style="text-align: center;">DEBET</th>
                          <th style="text-align: center;">KREDIT</th>
                          </tr>
                          <tr>
                          <td>KAS</td>
                          <td>PENJUALAN</td>
                          
                    </tr>
                </thead>
                <tbody style="background-color:#F0F8FF">
                <?php 
                    $no=1;
                    foreach ($jurnal->result_array() as $a):
                        $id = $a['jual_nofak'];
                        ?>
                    <tr style="background-color:#F0F8FF">
                        <td><?php echo $no++;?></td>
                      <td style="text-align:center;">
                            <a class="btn btn-xs btn-danger" href="<?php echo base_url('welcome/hapus/'.$id) ?>" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td> 
                        <td><?php echo $a['jual_tanggal'] ?></td>
                        <td><?php echo 'pemjualan barang' ?></td>
                        <td><?php echo 'N'. $a['jual_nofak'];?></td>
                        <td><?php echo 'Rp '.number_format ($a['jual_total']) ?></td>
                        <td> <?php echo 'Rp '.number_format($a['jual_total']) ?></td>

                        
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table> 
         
            </div>
        </div>
          <?php }?>
        </div>
        
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        <?php if($h=='1'){ ?> 
            
            <div class="col-md-4 portfolio-item">
                <div class="menu-item red" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/pengguna'?>" data-toggle="modal">
                           <i class="fa fa-users"></i>
                            <p style="text-align:center;font-size:20px;">Pengguna</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-4 portfolio-item">
                <div class="menu-item blue" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/laporan'?>" data-toggle="modal">
                           <i class="fa fa-bar-chart"></i>
                            <p style="text-align:center;font-size:20px;">Laporan</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-4 portfolio-item">
                <div class="menu-item purple" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/jurnal'?>" data-toggle="modal">
                           <i class="fa fa-list"></i>
                            <p style="text-align:center;font-size:20px;">Jurnal</p>
                      </a>
                </div> 
            </div>
            <!-- <div class="col-md-3 portfolio-item">
                <div class="menu-item light-red" style="height:150px;">
                     <a href="<?php echo base_url().'admin/pembelian'?>" data-toggle="modal">
                           <i class="fa fa-cubes"></i>
                            <p style="text-align:center;font-size:20px;">Pembelian</p>
                      </a>
                </div> 
            </div> -->
            <?php }?>
            <?php if($h=='2'){ ?> 
              <div class="col-md-6 portfolio-item">
                <div class="menu-item color" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/barang'?>" data-toggle="modal">
                           <i class="fa fa-shopping-cart"></i>
                            <p style="text-align:center;font-size:20px;">Barang</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="menu-item color" style="height:150px; background-color:  #ADD8E6;">
                     <a href="<?php echo base_url().'admin/kategori'?>" data-toggle="modal">
                           <i class="fa fa-sitemap"></i>
                            <p style="text-align:center;font-size:20px;">Kategori</p>
                      </a>
                </div> 
            </div>
           
            <?php }?>
            <?php if($h=='3'){ ?> 
           
            <?php }?>
        </div>
        
		
        <!-- /.row -->
	
    <!-- /.container -->
    <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <!-- /.row -->
        </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>

</body>

</html>
