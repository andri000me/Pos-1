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
            <?php foreach ($user as $u) { ?>
    <form action="<?php echo site_url().'pembayaran/aksi_editbayaran'?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Nama Penerima</label>
                            <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima" value="<?=$u->nama ?>" required/>
                            <input type="hidden" name="id" class="form-control" placeholder="Nama Penerima" value="<?=$u->id_order; ?>" required/>
                        </div>
                        <div class="form-group has-feedback">
                            <label>No Tlp Penerima</label>
                            <input type="text" name="tlp_penerima" class="form-control" placeholder="081 xxx xxx" value="<?=$u->notlp ?>" required/>
                        </div>  
                        <div class="form-group has-feedback">
                            <label>Isi Paket</label>
                            <input type="text" name="isi" class="form-control" placeholder="Pakaian, dll." value="<?=$u->isi ?>" required/>
                        </div>  
                    </div>
                     <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Berat</label>
                            <input type="number" name="berat" class="form-control" placeholder="/kg" value="<?=$u->berat ?>" required/>
                        </div>
                        <div class="form-group has-feedback">
                            <label>Drop Point</label>
                            <select name="drop_point" class="form-control" value="<?=$u->drop_point ?>" required>
                                <option value="Yuenlong">Yuenlong</option>
                                <option value="Shamsaipo">Shamsaipo</option>
                                <option value="Causewaybay">Causewaybay</option>
                            </select>
                        </div>  
                        <div class="form-group has-feedback">
                            <label>Tangal Order</label>
                            <input type="date" name="tgl_order" class="form-control" placeholder="Password" value="<?=$u->tgl_order ?>" required/>
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
                            <input type="text" name="nama_pengirim" class="form-control" placeholder="nama" value="<?=$u->nama_terima ?>" required/>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>No tlp Pengirim</label>
                            <input type="text" name="tlp_pengirim" class="form-control" placeholder="no tlp" value="<?=$u->tlp_terima ?>" required/>

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

<?php } ?>
        </div><!-- /.box-body -->
        <div class="box-footer">
            
        </div><!-- /.box-footer-->
        
    </div><!-- /.box -->   
</section>
    <?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>