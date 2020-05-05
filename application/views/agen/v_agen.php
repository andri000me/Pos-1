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
            <h3 class="box-title">Daftar Agen</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-header with-border">
        <div class="row" style="margin-bottom: 10px">
        </div>
        <table id="tabel-data" class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="10px">No</th>
                    <th>Nama Penerima</th>
                    <th>Tlp Penerima</th>
                    <th>Tgl order</th>
                    <th>Berat</th>
                    <th>Isi</th>
                    <th>Drop Point</th>
                    <th>Nama Pengirim</th>
                    <th>Tlp Pengirim</th>
                    <th>Agen</th>
                    <th><i class="fa fa-star"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
           <tbody>
            <?php 
            $this->db->join('tbl_user','user_id=id_level','LEFT');
            $data = $this->db->get_where('tbl_order')->result();
            $no =1;
            foreach ($data as $key ): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $key->nama_penerima ?></td>
                <td><?php echo $key->notlp_penerima ?></td>
                <td><?php echo date('d M Y',strtotime($key->tgl_order))  ?></td>
                <td><?php echo $key->berat ?>/Kg</td>
                <td><?php echo $key->isi ?></td>
                <td><?php echo $key->drop_point ?></td>
                <td><?php echo $key->nama_pengirim ?></td>
                <td><?php echo $key->tlp_pengirim ?></td>
                <td><?=$key->user_nama ?></td>
                <td>
                    <?php if ($key->print == 1) : ?>
                          <i class="fa fa-star" style="color: green;"></i>
                    <?php else: ?>
                          <a href="<?=site_url('agen/print/'.$key->id_order)  ?>" target="_blank"><i class="fa fa-star-o"></i></a>
                    <?php endif; ?>
                </td>
                <td>
                      <a href="<?=site_url('agen/print/'.$key->id_order)  ?>" class="btn btn-xs btn-info" target="_blank"><i class="fa fa-print"></i>Print</a>
                </td>
            </tr> 
            <?php endforeach ?>
              
           </tbody>
        </table>
        <p>
            Note :  (<i class="fa fa-star" style="color: green;"></i> Sudah Di Print) = (<i class="fa fa-star-o"></i> Belum Di Print)
        </p>
        </div>
           
        </div>
    </div>

</div>
    </section>
    <?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>