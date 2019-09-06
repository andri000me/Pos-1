<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="Toko Ateng">

    <title>Management data barang terjual</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Barang Grosir/Eceran yang Terjual
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>No Tanggal</th>
                        <th>Harga Jual</th>
                        <th>Uang Pembayaran</th>
                        <th>Uang Kembalian</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($jual->result_array() as $a):
                        $id = $a['jual_nofak'];
                        ?>
                    <tr>
                        <td align="center"><?php echo $no++;?></td>
                        <td align="center"><?php echo $a['jual_tanggal'] ?></td>
                        <td align="center"><?php echo 'Rp.'.number_format($a['jual_total'])  ?></td>
                        <td align="center"><?php echo 'Rp.'.number_format ($a['jual_jml_uang']) ?></td>
                        <td align="center"><?php echo 'Rp.'.number_format($a['jual_kembalian']) ?></td>
                        <td align="center"><?php echo $a['jual_keterangan'] ?></td>

                        
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
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
