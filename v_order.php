<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <script type="text/javascript" src=<?php echo base_url('assets/dist/js/jquery.maskMoney.js')?>></script>

    <?php $this->load->view('admin/header') ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('admin/leftbar') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><center>INFORMASI BARANG </center>
  
        </h1>
        
      </section>
      <br>
      <!-- Main content -->
     
      <section class="content">
         
        <div class="row">
        <!-- Lembaran pengirim -->
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-paper-plane"></i> Lembaran Pengirim</h3>
              </div>
              <form class="form-horizontal" name="pengirim" id="pengirim">
                <div class="box-body">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Shipment Number</label>
                    <div class="col-sm-10">
                      <input type="email" readonly="" class="form-control"  placeholder="JCRX<?=$order ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Pengirim</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="nama_pengirim" name="nama_pengirim[]" placeholder="Nama Pengirim..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat Pengirim</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="alamat_pengirim" name="alamat_pengirim[]" placeholder="Street Address..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="email" class="form-control" id="nomor_telepon_pengirim" name="telp_pengirim[]" placeholder="Nomor Telepon" required>
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                
                 
                </div>
              </form>
            </div>
          </div>
          <!-- Tutup Lembaran pengirim -->
          
          <!-- Lembaran penerima -->
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-get-pocket"></i> Lembaran Penerima</h3>
              </div>
              
              <form class="form-horizontal" name="penerima" id="penerima">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Penerima</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="nama_penerima" name="nama_penerima[]" placeholder="Nama Penerima..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat Penerima</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="alamat_penerima" name="alamat_penerima[]" placeholder="Alamat Penerima..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Negara</label>
                    <div class="col-sm-10">
                      <select name="negara[]" id="negara" class="form-control select2" style="width: 100%;">
                        <option selected="selected">pilih</option>
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
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="kode_pos" name="kode_pos[]" placeholder="Kode Pos..." required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="email" class="form-control" id="nomor_telepon_penerima" name="telp_penerima[]" placeholder="Nomor Telepon..." required>
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No.ID</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="id_penerima[]" placeholder="No.ID...">
                    </div>
                  </div>
                </div>
            </div>
            </form>
          </div>
          <!-- tutup Lembaran penerima -->
          <!-- Informasi Barang -->
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Informasi Barang/Expedisi</h3>
              </div>
          
              <form class="form-horizontal" name="informasi" id="informasi">
                <div class="box-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mitra Expedisi</label>
                    <div class="col-sm-10">
                      <select name="mitra_expedisi[]" id="mitra" class="form-control select2" style="width: 100%;">
                      <option selected="selected">pilih</option>
                      <?php foreach ($mitra->result_array() as $sws):?>
                        
                        <option value="<?php echo $sws['nama_mitra']; ?>"><?php echo $sws['nama_mitra']; ?></option>
                        <?php endforeach;   ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">AWB No.</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="awb_no" name="awb_no[]" placeholder="123456" required>
                    </div>
                  </div>

          
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Berat (Kg)</label>
                    <div class="col-sm-4">
                      <input type="text" id="berat" class="form-control" name="berat[]" placeholder="Kg..." required> 
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Koli</label>
                    <div class="col-sm-4">
                      <select name="jumlah_kodi[]" class="form-control select2" style="width: 100%;">
                      <option selected="selected" value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Layanan</label>
                    <div class="col-sm-10">
                      <select name="jenis_layanan[]" id="jenis_layanan" class="form-control select2" style="width: 100%;">
                        <option selected="selected">pilih</option>
                        <option>Document</option>
                        <option>Garment</option>
                        <option>Cosmetic</option>
                        <option>Herbal</option>
                        <option>Dry Food</option>
                        <option>Other Services</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Volume (cm)</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="panjang" name="panjang[]" id="panjang" placeholder="Panjang" required>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="lebar" name="lebar[]" id="lebar" placeholder="Lebar" required>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="tinggi" name="tinggi[]" id="tinggi" placeholder="Tinggi" required>
                    </div>
                    <div class="col-sm-2">
                    <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="total[]" id="total" placeholder="total" readonly="readonly" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ongkos Kirim</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ongkir" name="ongkir[]" placeholder="Rp...">
                    </div>
                  </div>

                </div>
            </div>
            </form>
          </div>
          <!-- tutup Informasi Barang -->

          <!-- Deskripsi Barang -->
          <div class="col-md-6">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Deskripsi Paket</h3>
              </div>
                
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" id="nama_barang" name="nama_barang[]" placeholder="Nama Barang" class="form-control name_list" required/></td> 
                                         <td><input type="text" id="quantity_1" name="quantity[]" data-id="1" placeholder="Quantity" class="form-control name_list quantity_" required/></td> 
                                         <td><input type="text" name="hs_code[]" placeholder="HS Code" class="form-control name_list" required/></td> 
                                         <td><input type="text" id="satuan_1" data-id="1" name="satuan[]" placeholder="Satuan" class="form-control name_list satuan_" required /></td> 
                                         <td><input type="text" id="total_nilai_1" name="total_nilai[]" placeholder="Total Nilai" class="form-control name_list" required/></td> 
                                         <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
                                    </tr>  
                               </table>  
                               
                          </div>  
                     </form>  
                </div>  
          
          </div>
          <!-- Tutup Informasi Barang -->
          <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-bank"></i> Deskripsi Bank</h3>
              </div>
                <div class="box-body">
                  <div class="form-group"> 
                        <form class="form-horizontal" name="metode_pembayaran" id="metode_pembayaran">
                            <input type="hidden" name="metode[]" id="metop_" value="">
                      <div id="pilihan_metode" class="box box-warning">
                     
                		<div class="radio" id="radio" name="radio" required>
                      <h4>
                			<label>
                				<input type="radio" name="metode[]" id="metode" class="metode_" value="cash" >Cash
                			</label>
                      <br>
                      <label>
                				<input type="radio" name="metode[]" id="metode" class="metode_" value="transfer">Transfer
                      </label>
                     
                      </h4>
                    </div>
                   
                </div>
                      </form>
                      </div>
                      <div class="modal-footer">
                        <input type="button"  name="submit" id="submit"  class="btn btn-primary" value="Simpan" />
                      </div>
                  </div> 
                </div> 
            </div>
        </div>
        
        </div>
        
  </section>
<!--  <center><button type="button" class="btn btn-primary" id="check">-->
<!--  Simpan-->
<!--</button></center>-->
  <center>  </center> <br>
  </div>
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> Prototype
  </div>
  <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Exitus</a>.</strong> All rights
  reserved.
</footer>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Button trigger modal -->

</body>
</html>
<script>
  $(document).on("click", "#submit", function() {
    var nama_pengirim = $("#nama_pengirim").val();
    var alamat_pengirim =$("#alamat_pengirim").val();
    var nomor_telepon_pengirim = $("#nomor_telepon_pengirim").val();
    var nomor_telepon_penerima = $("#nomor_telepon_penerima").val();
    var nama_penerima = $("#nama_penerima").val();
    var alamat_penerima = $("#alamat_penerima").val();
    var negara = $('#negara').val();
    var kodepos = $('#kode_pos').val();
    var mitra = $('#mitra').val();
    var awb_no = $('#awb_no').val();
    var berat = $('#berat').val();
    var jenis_layanan = $('#jenis_layanan').val();
    var ongkir = $('#ongkir').val();
    var nama_barang = $('#nama_barang').val();
    var quantity = $('#quantity').val();
    var satuan = $('#satuan').val();
    var total_nilai = $('#total_nilai').val();


    if (nama_pengirim == "") {
		alert("Nama Pengirim Belum di isi");
		return false;
	} else if(alamat_pengirim=="") {
		alert("Alamat Pengirim Belum di isi");
		return false;
	} else if(nomor_telepon_pengirim=="") {
		alert("Nomor Telepon Pengirim Belum di isi");
		return false;
	} 
  else if(nomor_telepon_penerima=="") {
		alert("Nomor Telepon Penerima Belum di isi");
		return false;
	}
  else if(nama_penerima=="") {
		alert("Nama Penerima Belum di isi");
		return false;
	}
  else if(alamat_penerima=="") {
		alert("Alamat Penerima Belum di isi");
		return false;
	}
  else if(negara=="pilih") {
		alert("Negara Penerima Belum di pilih");
		return false;
	}   else if(kodepos=="") {
		alert("Kode Pos Belum di isi");
		return false;
	}   else if(berat=="") {
		alert("Berat Belum di isi");
		return false;
	}   else if(ongkir=="") {
		alert("Ongkir Belum di isi");
		return false;
	}  else if(nama_barang=="") {
		alert("Nama Barang Belum di isi");
		return false;
	}  else if(quantity=="") {
		alert("Quantity Belum di isi");
		return false;
	}  else if(satuan=="") {
		alert("Satuan Belum di isi");
		return false;
	}  else if(total_nilai=="") {
		alert("Total Nilai Belum di isi");
		return false;
	}else{
	    
	
	if ($(".metode_").prop('checked', true)) {
          $("#metode_pembayaran").modal("hide");
		      $('input[type="radio"]').prop('checked', false);
          $.ajax({  
              url:"<?php echo base_url().'transaksi/simpan_order' ?>", 
                method:"POST",  
                data:$('#pengirim , #penerima , #informasi , #add_name , #metode_pembayaran').serialize(),  
                success:function(data)  
                {  
                  swal("Success!", "Input Order Berhasil", "success");
                  $('#pengirim')[0].reset();
                     $('#penerima')[0].reset(); 
                     $('#informasi')[0].reset(); 
                     $('#add_name')[0].reset(); 
                     $('#metode_pembayaran')[0].reset();   

                }  
           });  

      }
        else{
          alert("Pilih Metode Pembayaran");
		return false;
        }
        
	}
      
	});
	$(document).on('keyup','.quantity_ , .satuan_',function(){
                    var id = $(this).attr('data-id');
                    var qty=parseInt($('#quantity_'+id).val());
                    var satuan=parseInt($('#satuan_'+id).val());
                    var total=qty*satuan;
                    $('#total_nilai_'+id).val(total);
                });
                
    $(document).on('click','.metode_', function(){
        $('#metop_').val($(this).val());
    })
</script>
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="nama_barang[]" placeholder="Nama Barang" class="form-control name_list" /></td><td><input type="text" data-id="'+i+'" id="quantity_'+i+'"  name="quantity[]" placeholder="Quantity" class="form-control name_list quantity_" /></td> <td><input type="text" name="hs_code[]" placeholder="HS Code" class="form-control name_list" /></td><td><input type="text" data-id="'+i+'" id="satuan_'+i+'" name="satuan[]" placeholder="Satuan" class="form-control name_list satuan_" /></td><td><input type="text" name="total_nilai[]" placeholder="Total Nilai" id="total_nilai_'+i+'" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
      
      
      $(document).ready(function() {
                $('#tinggi, #lebar, #panjang').keyup(function(){
                var panjang=parseInt($('#panjang').val());
                var lebar=parseInt($('#lebar').val());
                var tinggi=parseInt($('#tinggi').val());
                var total=panjang*lebar*tinggi/5000;
                $('#total').val(total);
                });
            });
      $('input[type=radio][id=metode]').on('change', function() {
  switch ($(this).val()) {
    case 'credit':
      $('.transfer').remove();
      $('#pilihan_metode').append('<div class="utangpelanggan"><label for="">Pilih Pelanggan : </label><select name="utang_pelanggan[]" class="form-control"><?php foreach ($data->result_array() as $sws):?><option value="<?php echo $sws['id_pelanggan']; ?>"><?php echo $sws['nama_pelanggan']." - ".$sws['telp_pelanggan']; ?></option><?php endforeach;   ?></select></div>');  
      break;
    case 'transfer':
      $('.utangpelanggan').remove();
      $('#pilihan_metode').append('<div class="transfer"><label for="">Pilih Bank : </label><select name="bank[]" class="form-control"><?php foreach ($bank->result_array() as $sws):?><option value="<?php echo $sws['nama_bank']; ?>"><?php echo $sws['nama_bank']." (".$sws['rekening'].") a.n ".$sws['atas_nama']; ?></option><?php endforeach;   ?></select></div>');
      break;
    case 'cash':
      $('.utangpelanggan').remove();
      $('.transfer').remove();
      break;
  }
});
 });  
 </script>
 <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
				$( '#ongkir' ).mask('0.000.000.000', {reverse: true});

            })
        </script>
 <script>
$(document).ready(function($){
// 			$('#berat,#tinggi,#lebar,#panjang').maskMoney();
			$('#angka2').maskMoney({prefix:'US$'});
			//$('#ongkir').maskMoney({prefix:'', thousands:'.', decimal:',', precision:0});
		});
</script>
