<style type="text/css">
	table tr th{font-size: 14px;}
	table tr td{font-size: 13px;}
</style>
<body >
<section class="content" >

    <div class="box" style="margin-top: 100px;">
        <div class="box-header with-border">
        <h2 style="margin-top:0px; text-align: center; margin-top: 20px;">ATABA EXPRESS CIREBON</h2>
        <p align="center" style="margin-top: -7px; font-size: 12px;"><b>Jl. Citandui Komplek Stadion Bima No.61B, Kalikoa, Kedawung, Cirebon, Jawa Barat 45132.</b></p>
        <hr style="width: 900px; margin-bottom: 20px; margin-top: 20px;">
        <div style="width: 850px;">
        <p style="margin-top:10px; text-align: right; margin-bottom: 50px; margin-top: 50px;">Tanggal : <?php echo date('d F Y') ?></p>
    </div>

        <center>        
    <table class="word-table" border="1" style="border-collapse: collapse; border: 1px solid red; width: 900px;">
            <thead>
            	<tr style="background:red;border:1px;color: #fff">
            		<th colspan="4">Penerima</th>
            		<th colspan="3">Pengirim</th>
            		<th colspan="2">Status</th>
            	</tr>
                <tr>
                    <th>No</th>
                    <th>PIN</th>
                    <th>Nama Penerima</th>
                    <th>Tlp Penerima</th>
                    <th>Nama Pengirim</th>
                    <th>Tlp Pengirim</th>
                    <th>Drop Point</th>
                    <th>Berat</th>
                    <th>Isi</th>
                </tr>
            </thead>
           <tbody>
            <?php 
            $no=1;
            foreach ($cetak as $row) { ?>
            <tr>
               <td align="center"><?=$no++ ?></td>
               <td align="center"><?=$row->no_order; ?></td>
               <td align="center"><?=$row->nama_penerima; ?></td>
               <td align="center"><?=$row->notlp_penerima; ?></td>
               <td align="center"><?=$row->nama_pengirim; ?></td>
               <td align="center"><?=$row->tlp_pengirim; ?></td>
               <td align="center"><?=$row->drop_point; ?></td>
               <td align="center"><?=$row->berat; ?> Kg</td>
               <td align="center"><?=$row->isi; ?></td>
            </tr>
        <?php } ?>
              
           </tbody>
        </table>
    <div style="width: 800px;">
        <p style="margin-top:10px; text-align: right; margin-bottom: 50px; margin-top: 50px;">Cirebon, ................</p>
    <p style="margin-top:0px; text-align: right; margin-bottom: 50px;">( Admin )</p>
    </div>
    
        </center>
        
    </div>
</div>
    </section>
</body>