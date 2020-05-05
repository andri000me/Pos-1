<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ataba</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
        color: #352fab;
        font-size: 17px;
    font-weight: 600;
    }
    
    .invoice-box table tr td:nth-child(4) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 14px;
        line-height: 25px;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        overflow: visible;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
  
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    img.crb{
        max-width: 200px;
        float: right;
        position: absolute;
        right: 10%;
        top: 139px;
        margin:-20px;
        }
        hr{
            color: #3976c0;
            height: 2px;
            background: #3976c0;
        }
        span.dot{
            padding: 69px;
        }
        span.doted {
            padding: 62px;
        }
        span.dotede {
            padding: 42.5px;
        }
        span.name{
            margin:20px;
        }
        span.text{
            margin:20px;
        }
        span.texts{
            margin:40px;
        }
        span.do{
            margin:95px;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="invoice-box">
        <img src="<?=base_url('assets/img/crb.png') ?>" class="crb">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?=base_url('assets/img/logo.png') ?>" style="width:50%; max-width:300px;">
                                <p>
                                    Jl. Citandui Komplek Stadion Bima No.61 - Cirebon. Wa/Telp : +62811244344
                                </p>
                                <hr>
                            </td>
                            
                            <td style="text-align: left;">
                                <h3 style="margin:20px; font-size: 15px;"> No. CRB: <?= $no_order; ?></h3>
                            </td>
                        </tr>
                    </table>
                </td>               
            </tr>
           
            
            
           <tr class="item">
                <td>
                    <span class="name">Nama</span><span class="dot">:</span><span class="text"><?=$nama?></span>
                </td>
            </tr>
             <tr class="item">
                <td>
                    <span class="name">No Tlp</span> <span class="doted">:</span><span class="text"><?=$tlp_terima?></span>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <span class="name">Berat</span> <span class="dot">:</span><span class="text"><?=$berat?> Kg</span>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <span class="name">Drop HK</span> <span class="dotede">:</span><span class="texts"><?=$drop_point?></span>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <span class="name">Isi</span> <span class="do">:</span><span style="margin:-10px;"><?=$isi?></span>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <span class="name">Pengirim</span> <span class="dotede">:</span><span class="texts"><?=$nama_terima?></span>
                </td>
            </tr>
            <tr class="item">
                <td>
                    <span class="name">Alamat</span><span class="doted">:</span><span class="text"><?=$tlp_terima?></span>
                </td>
            </tr>
        </table>
        <p style="width: 50%;float: right;margin: 25px;color: #5a7dba;">
            Cirebon : <?=date('d F Y') ?>
        </p>
        <p style="width: 50%;float: right;margin: 2px;color: #5a7dba;">
            (<?php echo $this->session->userdata('nama'); ?>)
        </p>
    </div>
</body>
</html>