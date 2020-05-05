<!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <script type="text/javascript" src=<?php echo base_url('assets/dist/js/jquery.maskMoney.js')?>></script>
<style>
.datepicker{
  cursor:pointer
}
</style>
  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   

  <!-- Search --> 
<div class="row">
<div class="col-md-5">
    
    <div class="form-group">
    <form action="<?=site_url('laporan/filter_tgl_kelola_order')?>" method="post">
   <label>Tgl Awal</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker"  name="tgl_awal" autocomplete="off">
   </div>
  </div>
  <div class="form-group">
   <label>Tgl Akhir</label>
   <div class="input-group date">
    <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
       </div>
       <input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir" autocomplete="off">
   </div>
  </div>
			<input type="submit" class="btn btn-primary" value="FILTER">
     
		</form>
    </div>
    </div>
  
   <br>
  <!-- Akhir Search --> 
  </section>

    <?php if($this->session->flashdata('berhasil') == TRUE):?>
      <div class="col-md-12">
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Edit Order Berhasil
</div> 
    </div>
<?php endif; ?>
<br>
	
	<br>
    <div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
    <h1 class="box-title"><i class="fa fa-pencil"></i> Kelola Order</h1>


    </div>
    <form action="<?=site_url('print_lap/print_resi')?>" class="form-horizontal" method="post">
    <div class="box-body">
		<table class="table table-striped table-bordered data">
    <thead>
<tr>
  <th width="10px">NO.</th>
  <th><i class="fa fa-key"></i> Order ID </th>
  <th><i class="fa fa-user"></i> Nama Pengirim</th>
  <th><i class="fa fa-key"></i> AWB No</th>
	<th><i class="fa fa-truck"></i> Mitra Expedisi</th>
  <th><i class="fa fa-user"></i> Nama Penerima</th>
  <th><i class="fa fa-home"></i> Tujuan</th>
  <th><i class="fa fa-calendar-times-o"></i> Tanggal</th>
  <th><i class="fa fa-money"></i> Ongkir</th>
    <th><i class="fa fa-money"></i> Bayar Jaskipin</th>
  <th><i class="fa fa-users"></i> Admin</th>
  <th><i class="fa fa-pencil"></i> Edit</th>
</tr>
</thead>
<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                        $no++;
                        $id_order=$sws['id_order'];
                        $nama_pengirim=$sws['nama_pengirim'];
                        $awb_no=$sws['awb_no'];
                        $mitra_expedisi=$sws['mitra_expedisi'];
                        $nama_penerima=$sws['nama_penerima'];
                        $telp_penerima=$sws['telp_penerima'];
                        $tgl_order=$sws['tgl_order'];
                        $ongkir=$sws['ongkir'];
                        $jaskipin=$sws['bayar_jaskipin'];
                        $negara=$sws['negara_penerima'];
                        $admin=$sws['admin'];
            
                ?>
<tr>
  <td><?php echo $no;?></td>
  <td><input type="hidden" name="id_order" value="<?php echo $id_order;?>"><?php echo $id_order;?></td>
	<td><?php echo $nama_pengirim;?></td>
	<td><?php echo $awb_no;?></td>
  <td><?php echo $mitra_expedisi;?></td>
  <td><?php echo $nama_penerima;?></td>
	<td><?php echo $negara;?></td>
  <td><?php echo date('d F Y', strtotime($tgl_order))?></td>
   <td>
    <?php if (empty($jaskipin)) : ?>
      <span>-</span>
      <?php else: ?>
         <?php echo "Rp. ".number_format($ongkir, 0, ".", ".");?>
      <?php endif; ?>
   </td>
   <td>
    <?php if (empty($jaskipin)) : ?>
      <span>-</span>
      <?php else: ?>
         <?php echo "Rp. ".number_format($jaskipin, 0, ".", ".");?>
      <?php endif; ?>
   </td>
  <td><?php echo $admin;?></td>
  <td><?php echo '<a class="btn btn-sm btn-primary" href="#edit'.$id_order.'" data-toggle="modal" title="Bayar"><span class="fa fa-pencil"></span></a>';?>
    <a href="<?=site_url('laporan/del_resi/'.$id_order) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
  </td>
	
	
	
		
</tr>
<?php endforeach; ?>
  </table>
</form>
</div>
  </div>
  </div>
  </div>
  <?php 
                  
                  foreach ($data->result_array() as $sws){
                    $id_order=$sws['id_order'];
                        $nama_pengirim=$sws['nama_pengirim'];
                        $mitra_expedisi=$sws['mitra_expedisi'];
                        $nama_penerima=$sws['nama_penerima'];
                        $telp_penerima=$sws['telp_penerima'];
                        $telp_pengirim=$sws['telp_pengirim'];
                        $tgl_order=$sws['tgl_order'];
                        $alamat_pengirim=$sws['alamat_pengirim'];
                        $alamat_penerima=$sws['alamat_penerima'];
                        $awb_no=$sws['awb_no'];
                        $berat=$sws['berat'];
                        $total=$sws['total'];
						$ongkir=$sws['ongkir'];
						$jenis_layanan=$sws['jenis_layanan'];
						$metode_pembayaran=$sws['metode_pembayaran'];
						$negara_penerima=$sws['negara_penerima'];
						$kode_pos=$sws['kode_pos'];
						$panjang=$sws['panjang'];
						$lebar=$sws['lebar'];
						$tinggi=$sws['tinggi'];
						$jumlah_kodi=$sws['jumlah_kodi'];
                      
              ?>
              
<div class="modal fade" id="edit<?php echo $id_order?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Edit Order</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
             <form method="post" action="<?php echo base_url().'transaksi/edit_input_order' ?>">
    <div class="modal-body">
 
    <div class="form-group">
    <label>Nama Pengirim</label>
    <input name="nama_pengirim" class="form-control" type="text" value="<?php echo $nama_pengirim;?>" required>
    </div>

    <div class="form-group">
    <label>Nama Penerima</label>
    <input name="nama_penerima" class="form-control" type="text" value="<?php echo $nama_penerima;?>" required>
    </div>

    <div class="form-group">
    <label>Mitra Expedisi</label>
    <select name="mitra_expedisi" class="form-control select2" style="width: 100%;">
                        <option selected="selected"><?php echo $mitra_expedisi;?></option>
                        <option>Citylink Express</option>
                        <option>Aramex</option>
                        <option>Nice Express</option>
                        <option>Skynet</option>
                        <option>DHL</option>
                        <option>TNT</option>
                        <option>7 Xpress</option>
                        <option>DPEX</option>
                      </select>
    </div>
          
    <div class="form-group">
    <label>Telpon Penerima</label>
    <input name="telp_penerima" class="form-control" type="text" value="<?php echo $telp_penerima;?>" required>
    </div>                      

    <div class="form-group">
    <label>Telp Pengirim</label>
    <input name="telp_pengirim" class="form-control" type="text" value="<?php echo $telp_pengirim;?>" required>
    </div>

    <div class="form-group">
    <label>Nama Penerima</label>
    <input name="nama_penerima" class="form-control" type="text" value="<?php echo $nama_penerima;?>" required>
    </div>
                               
    <div class="form-group">
    <label>Alamat Pengirim</label>
    <input name="alamat_pengirim" class="form-control" type="text" value="<?php echo $alamat_pengirim;?>" required>
    </div>                  

    <div class="form-group">
    <label>Alamat Penerima</label>
    <input name="alamat_penerima" class="form-control" type="text" value="<?php echo $alamat_penerima;?>" required>
    </div>

    <div class="form-group">
    <label>Berat(KG)</label>
    <input name="berat" class="form-control" type="text" value="<?php echo $berat;?>" required>
    </div>

    <div class="form-group">
    <label>No.AWB</label>
    <input name="awb_no" class="form-control" type="text" value="<?php echo $awb_no;?>" required>
    </div>
                 
    <div class="form-group">
    <label>Ongkir</label>
    <input name="ongkir" id="ongkir" class="form-control" type="text" value="<?php echo $ongkir;?>" required>
    </div>

    <div class="form-group">
    <label>Jenis Layanan</label>
    <select name="jenis_layanan" class="form-control select2" style="width: 100%;">
                        <option selected="selected"><?php echo $jenis_layanan;?></option>
                        <option>Document</option>
                        <option>Garment</option>
                        <option>Cosmetic</option>
                        <option>Herbal</option>
                        <option>Other Services</option>
                      </select>
    </div>
    
    <div class="form-group">
    <label>Negara Penerima</label>
    <select name="negara" class="form-control select2" style="width: 100%;">
                        <option selected="selected"><?php echo $negara_penerima?></option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Hongkong">Hongkong</option>
                    <option value="Singapore">Singapore</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Uni Emirate Arab">Uni Emirate Arab</option>
                    <option value="Saudi_arabia">Saudi Arabia</option>
                    <option value="Japan">Japan</option>
                    <option value="United State American">United State American</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Oman">Oman</option>
                    <option value="Belgium">Belgium</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="Netherland">Netherland</option>
                    <option value="Australia">Australia</option>
                    <option value="Philipine">Philipine</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Rgypt">Egypt</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="United Kingdom">United Kingdom(UK)</option>
                    <option value="Timor Leste">Timor Leste</option>
                      </select>
    </div>

    <div class="form-group">
    <label>Kode Pos</label>
    <input name="kode_pos" class="form-control" type="text" value="<?php echo $kode_pos;?>" required>
    </div>
    
    <div class="form-group">
    <label>Jumlah Kodi</label>
    <input name="jumlah_kodi" class="form-control" type="text" value="<?php echo $jumlah_kodi;?>" required>
    </div>

    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Volume (cm)</label>
                    <div class="col-sm-2">
                      <input type="test" class="form-control" name="panjang" id="panjang" value="<?php echo $panjang;?>">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="lebar" id="lebar" value="<?php echo $lebar;?>">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="tinggi" id="tinggi" value="<?php echo $tinggi;?>">
                    </div>
                   
                    <input name="id_order" value="<?php echo $id_order;?>" hidden>
                  </div>
<br>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</button>
    </div>
    </form>
  </div>
</div>
</div>
<?php
      }
      ?>
      
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> Prototype
  </div>
  <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Exitus</a>.</strong> All rights
  reserved.
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
    $('#tinggi, #lebar, #panjang').keyup(function(){
                var panjang=parseInt($('#panjang').val());
                var lebar=parseInt($('#lebar').val());
                var tinggi=parseInt($('#tinggi').val());
                var total=panjang*lebar*tinggi/5000;
                $('#total').val(total);
                });
	});

</script>
<div class="control-sidebar-bg"></div>
</div>

<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
      minDate: 0,
  });
 });
</script>
</body>

</html>
<script>
$(document).ready(function($){
			$('#berat').maskMoney();
			$('#angka2').maskMoney({prefix:'US$'});
			$('#ongkir').maskMoney({prefix:'', thousands:'.', decimal:',', precision:0});
	
		});
</script>
