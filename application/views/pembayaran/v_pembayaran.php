<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<section class="content">
     <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Form Pembayaran</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
            <div class="col-lg-12">
            <center><?php echo $this->session->flashdata('msg');?></center>
                    <div class="pull-right"><a href="<?=site_url('pembayaran/add_bayar') ?>" class="btn btn-sm btn-info" ><span class="fa fa-plus"></span> Tambah Pembayaran</a></div>
              
            </div>
        </div>
            
            <table id="tabel-data" class="table table-bordered table-striped responsive" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penerima</th>
                    <th>Tlp Penerima</th>
                    <th>Tgl order</th>
                    <th>Berat</th>
                    <th>Isi</th>
                    <th>Komisi</th>
                    <th>Nama Pengirim</th>
                    <th>Tlp Pengirim</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
           <tbody>
            <?php 
                    $this->db->join('tbl_user','user_id=id_level','LEFT');
            $data = $this->db->get_where('tbl_order', array('id_level' => $this->session->userdata('idadmin')))->result();
            $no =1;
            $subtotal = 0;
            foreach ($data as $key ): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $key->nama_penerima ?></td>
                <td><?php echo $key->notlp_penerima ?></td>
                <td><?php echo $key->tgl_order ?></td>
                <td><?php echo $key->berat ?>/Kg</td>
                <td><?php echo $key->isi ?></td>
                <td>Rp.<?php echo number_format(($key->berat*$key->komisi))  ?></td>
                <td><?php echo $key->nama_pengirim ?></td>
                <td><?php echo $key->tlp_pengirim ?></td>
                <td>
                    <? if ($key->print == 0) : ?>
                        <span class="label label-danger">Belum</span>
                    <?php else: ?>
                         <a href="<?=site_url('pembayaran/cetak_unresi/'.$key->id_order) ?>"><span class="label label-success">Sudah</span></a>
                    <?php endif; ?>
                        
                    </td>
                <td width="90px" align="center">
                    <? if ($key->print == 0) : ?>
                         <a href="<?=site_url('pembayaran/cetak_resi/'.$key->id_order) ?>" class="btn btn-xs btn-info" target="_blank"><i class="fa fa-print"></i></a>
                    <?php else: ?>
                          <!-- <a href="<?=site_url('pembayaran/cetak_unresi/'.$key->id_order) ?>" class="btn btn-xs btn-danger"><i class="fa fa-print"></i></a> -->
                    <?php endif; ?>
                    <a href="<?=site_url('pembayaran/edit/'.$key->id_order) ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                    <a href="<?=site_url('pembayaran/hapus_pembayaran/'.$key->id_order) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                </td>
                
            </tr> 
            <?php endforeach ?>
              
           </tbody>
        </table>
       
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