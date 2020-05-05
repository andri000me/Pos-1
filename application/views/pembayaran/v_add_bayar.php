<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Penerima</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="<?php echo site_url().'pembayaran/aksi_bayaran'?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Nama Penerima</label>
                            <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima" required/>
                            <input type="hidden" name="no_order" class="form-control" placeholder="Nama Penerima"/>
                        </div>
                        <div class="form-group has-feedback">
                            <label>No Tlp Penerima</label>
                            <input type="text" name="tlp_penerima" class="form-control" placeholder="081 xxx xxx" required/>
                        </div>  
                        <div class="form-group has-feedback">
                            <label>Isi Paket</label>
                            <input type="text" name="isi" class="form-control" placeholder="Pakaian, dll." required/>
                        </div>  
                    </div>
                     <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Berat</label>
                            <input type="number" name="berat" class="form-control" placeholder="/kg" required/>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Drop Point</label>
                            <select name="drop_point" class="form-control" required>
                                <option value="0">--Pilih Drop Point--</option>
                                <option value="Yuenlong">Yuenlong</option>
                                <option value="Shamsaipo">Shamsaipo</option>
                                <option value="Causewaybay">Causewaybay</option>
                            </select>
                        </div>  
                        <div class="form-group has-feedback">
                            <label>Tangal Order</label>
                            <input type="date" name="tgl_order" class="form-control" placeholder="Password" required/>
                        </div>  
                    </div>
                </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            
        </div><!-- /.box-footer-->
        
    </div><!-- /.box -->   

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Pengirim</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Nama Pengirim</label>
                            <input type="text" name="nama_pengirim" class="form-control" placeholder="nama" required/>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>No tlp Pengirim</label>
                            <input type="text" name="tlp_pengirim" class="form-control" placeholder="no tlp" required/>

                            <input type="hidden" value="<?php echo strtoupper($this->session->userdata('idadmin')); ?>" name="level_id" class="form-control" placeholder="no tlp" required/>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Kirim</button>
                        </div><!-- /.col -->
                    </div>
                </form>
        </div><!-- /.box-body -->
        
    </div><!-- /.box -->   
</section>
<?php 
    $this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
    $this->load->view('template/foot');
?>