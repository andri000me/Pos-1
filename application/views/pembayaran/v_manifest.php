       <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-select.min.css') ?>" />
<!--tambahkan custom css disini-->
    <?php
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    ?>

<section class="content">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Pengiriman</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-header with-border">
            <div class="pull-right">
                <a target="_blank" href="<?=site_url('pengiriman/cetak') ?>" class="btn btn-sm btn-default" ><span class="fa fa-print"></span> Print</a>
                <a href="#" data-toggle="modal" data-target="#largeModal" class="btn btn-sm btn-info" ><span class="fa fa-plus"></span> Manifest</a>
            </div>
        <div class="row" style="margin-bottom: 10px">
        </div>
        <table id="tabel-data" class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th colspan="4" style="text-align: center;">Penerima</th>
                    <th colspan="2" style="text-align: center;">Pengirim</th>
                    <th colspan="5" style="text-align: center;">Status</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Order</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Tgl Kirim</th>
                    <th>Berat</th>
                    <th>Isi</th>
                    <th>Drop Point</th>
                    <th>Status</th>
                </tr>
            </thead>
           <tbody>
            <?php 
            $no=1;
            foreach ($manifest as $row) { ?>
            <tr>
               <td><?=$no++ ?></td>
               <td><?=$row->no_order; ?></td>
               <td><?=$row->nama_penerima; ?></td>
               <td><?=$row->notlp_penerima; ?></td>
               <td><?=$row->nama_pengirim; ?></td>
               <td><?=$row->tlp_pengirim; ?></td>
               <td><?= date('d M Y', strtotime($row->tgl_kirim)) ?></td>
               <td><?=$row->berat; ?> Kg</td>
               <td><?=$row->isi; ?></td>
               <td><?=$row->drop_point; ?></td>
               <td>
                    <?php if ($row->status = 1) : ?>
                        <a href="<?=site_url('pengiriman/hold/'.$row->id_kirim) ?>"><span class="label label-success">Manifest</span></a>
                    <?php else: ?>
                        <span class="label label-danger">Hold</span>
                    <?php endif ?>
               </td>
            </tr>
        <?php } ?>
              
           </tbody>
        </table>
       
        </div>
           
        </div>
    </div>
     <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Manifest</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?=site_url('pengiriman/add_kirim') ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Order</label>
                        <div class="col-xs-9">
                            <select name="order" id="order" class="selectpicker" data-show-subtext="true" data-live-search="true" style="width:280px;" required>
                                <option data-id="0">--Pilih No Order--</option>
                                <?php foreach ($order as $row) { ?>
                                    <option value="<?=$row->no_order ?>" data-id="<?php echo $row->id_order ?>"><?=$row->no_order ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>   
                    <script type="text/javascript">
                        $('#order').change(function(){
                        var id = $('#order option:selected').data('id');
                        if(id !== 0){
                            $.ajax({
                                url: '<?=site_url()?>pengiriman/get_order/'+id,
                            }).done(function(response){
                                var res = JSON.parse(response)
                                $('#get').val(res[0].id_order);
                            });
                        }
                    });
                    </script>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Pengiriman</label>
                        <div class="col-xs-9">
                            <input name="tgl" class="form-control" type="date" placeholder="Tanggal Kirim" style="width:220px;" required>
                            <input name="get_order" id="get" class="form-control" type="hidden" placeholder="Input Nama..." style="width:20px;" required>
                            <input name="status" value="1" id="get" class="form-control" type="hidden" placeholder="Input Nama..." style="width:280px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

</div>
    </section>
    <script src="<?=base_url('assets/js/bootstrap-select.min.js') ?>"></script>
    <?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>