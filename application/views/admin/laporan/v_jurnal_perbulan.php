<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan Jurnal Pertanggal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">


<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;margin-top: 100px;">
<tr>
    <td colspan="2" style="width:800px;padding-left:20px;">
        <center>
            <h4>TOKO ATENG</h4>
            <p>Jl. Jl. Guntur Raya No.14 Kec. Harjamukti, Kel. Larangan</p>
        </center>
    </td>
</tr>
                       
</table>
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;"><br>
</table>
 <table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:center;">Laporan Jurnal Pertanggal</th>
        </tr>
</table>
<?php 
    $b=$jml->row_array();
?>
<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left">Perbulan : <?php echo $b['bulan'];?></th>
        </tr>
</table>
    
<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
     <tr >  
      <th rowspan="2">No</th>
          <th rowspan="2" style="text-align: center;">TANGGAL</th>
          <th rowspan="2" style="text-align: center;">KETERANGAN</th>
          <th rowspan="2"  style="text-align: center;">REF</th>
          <th style="text-align: center;">DEBET</th>
          <th style="text-align: center;">KREDIT</th>
          </tr>
          <tr>
          <td style="text-align: center;">KAS</td>
          <td style="text-align: center;">PENJUALAN</td>
          
    </tr></thead>
<tbody>
    <?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $nofak=$i['jual_nofak'];
        $tgl=$i['jual_tanggal'];
        $kobar=$i['d_jual_barang_id'];
        
        $nabar=$i['d_jual_barang_nama'];
        $satuan=$i['d_jual_barang_satuan'];
        
        $harjul=$i['d_jual_barang_harjul'];
        $qty=$i['d_jual_qty'];
        $diskon=$i['d_jual_diskon'];
        $total=$i['d_jual_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="padding-left:5px;"><?php echo $tgl;?></td>
        <td style="text-align:center;"><?php echo "Penjualan Barang";?></td>
        <td style="text-align:center;"><?php echo 'N'. substr($a['jual_nofak'],3);?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($total);?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($total);?></td>
    </tr>
    <?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="4" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:center;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
        <td style="text-align:center;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Cirebon, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right">( Toko Ateng )</td>
    </tr>
    
</table>

</body>
</html>