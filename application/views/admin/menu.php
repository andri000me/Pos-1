 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #008B8B">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'welcome'?>"><b>TOKO ATENG</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
                     
                     <!-- <li>
                        <a href="<?php echo base_url().'admin/barang'?>"><span class=""></span> Barang</a>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url().'admin/penjualan/terjual'?>"><span class=""></span> Daftar Penjualan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/kategori'?>"><span class=""></span> Kategori</a>
                    </li> -->
                   <li>
                        <a href="<?php echo base_url().'admin/pengguna'?>"><span class=""></span> Pengguna</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/laporan'?>"><span class=""></span> Laporan</a>
                    </li>
                     <li class="dropdown">
                        <a href="<?php echo base_url().'admin/jurnal'?>"><span class=""></span> Jurnal</a>
                    </li>
                    <?php }?>
                    <?php if($h=='2'){ ?> 
                      <!--dropdown-->
                  
                    <!--ending dropdown-->
                    <!-- <li>
                        <a href="<?php echo base_url().'admin/retur'?>"><span class="fa fa-refresh"></span> Retur</a>
                    </li>  -->
                    <li>
                        <a href="<?php echo base_url().'admin/kategori'?>"><span class=""></span> Kategori</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url().'admin/barang'?>"><span class=""></span> Barang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/penjualan'?>"><span class=""></span> Penjualan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/laporan'?>"><span class=""></span> Laporan</a>
                    </li>
                 
                    <?php }?>

                     <?php if($h=='3'){ ?> 
                      <!--dropdown-->
                      <li>
                        <a href="<?php echo base_url().'admin/penjualan/terjual'?>"><span class=""></span> Daftar Penjualan</a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo base_url().'admin/jurnal'?>"><span class=""></span> Jurnal</a>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="<?php echo base_url().'admin/retur'?>"><span class="fa fa-refresh"></span> Retur</a>
                    </li> -->
                    <!--ending dropdown-->
                    
                    <?php }?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="<?php echo base_url().'welcome'?>">Selamat datang  <b><?php echo strtoupper($this->session->userdata('user')); ?></b></a> 
                    </li>
                     <li>
                        <a href="<?php echo base_url().'administrator/logout'?>"><span class="fa fa-sign-out"></span> Logout</a>
                    </li>
                
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>