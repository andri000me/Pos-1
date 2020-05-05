<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    </h1>
    
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Pengguna</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            

             <div class="row">
            <div class="col-lg-12">
            <center><?php echo $this->session->flashdata('msg');?></center>
                    <div class="pull-right"><a href="<?=site_url('pengguna/add') ?>" class="btn btn-sm btn-info" ><span class="fa fa-plus"></span> Tambah Pengguna</a></div>
              
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table id="tabel-data" class="table table-bordered" style="font-size:11px;" >
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Komisi</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th style="width:200px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $komisi=$a['komisi'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo $komisi;?></td>
                        <td><?php echo $password;?></td>
                        <td>
                            <?php if ($level == 1) : ?>
                                <span class="label label-default">Manager</span>
                            <?php else: ?>
                               <span class="label label-info">Agen</span>
                            <?php endif ?>
                                
                            </td>
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-warning" href="<?php echo site_url('pengguna/edit/'.$id)?>" title="Edit"><span class="fa fa-edit"></span></a>
                            <a class="btn btn-xs btn-danger" href="<?=site_url('pengguna/hapus_pengguna/'.$id) ?>" title="Hapus"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Pengguna</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'pengguna/tambah_pengguna'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" placeholder="Input Nama..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" placeholder="Input Username..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Komis</label>
                        <div class="col-xs-9">
                            <input name="komisi" class="form-control" type="text" placeholder="Input Username..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="password" placeholder="Input Password..." style="width:280px;" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Ulangi Password</label>
                        <div class="col-xs-9">
                            <input name="password2" class="form-control" type="password" placeholder="Ulangi Password..." style="width:280px;" required>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-9">
                            <select name="level" class="form-control" style="width:280px;" required>
                                <option value="1">Admin</option>
                                <option value="2">Agen</option>
                            </select>
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

        <!-- ============ MODAL EDIT =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $komisi=$a['komisi'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                    ?>
                <div id="modalEditPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Edit Pengguna</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'pengguna/edit_pengguna'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Input Nama..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" value="<?php echo $username;?>" placeholder="Input Username..." style="width:280px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Komisi</label>
                        <div class="col-xs-9">
                            <input name="komisi" class="form-control" type="text" value="<?php echo $komisi;?>" placeholder="Input Username..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="password" placeholder="Input Password..." style="width:280px;">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Ulangi Password</label>
                        <div class="col-xs-9">
                            <input name="password2" class="form-control" type="password" placeholder="Ulangi Password..." style="width:280px;">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-9">
                            <select name="level" class="form-control" value="<?php echo $level; ?>" style="width:280px;" required>
                                <option value="1">Admin</option>
                                <option value="2">Agen</option>
                            </select>
                        </div>
                    </div>

                </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Menghapus Pengguna</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'pengguna/nonaktifkan'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus pengguna <b><?php echo $nm;?></b>..?</p>
                                    <input name="id" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>




        </div><!-- /.box-body -->
        <div class="box-footer">
            
        </div><!-- /.box-footer-->
        
    </div><!-- /.box -->

</section><!-- /.content -->


<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>