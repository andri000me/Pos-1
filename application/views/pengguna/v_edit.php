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
        <h2 style="margin-top:0px">Edit Agen</h2><hr>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            
        </div>
<?php foreach($user as $u){ ?>
        <form action="<?php echo site_url().'pengguna/edit_pengguna'?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Username" required value="<?php echo $u->user_nama;?>"/>
                              <input name="kode" type="hidden" value="<?php echo $u->user_id;?>">
                        </div>
                        <div class="form-group has-feedback">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Password" required value="<?php echo $u->user_username;?>"/>
                        </div>  
                        <div class="form-group has-feedback">
                            <label>Komisi</label>
                            <input type="text" name="komisi" class="form-control" placeholder="Password" required value="<?php echo $u->komisi;?>"/>
                        </div>  
                    </div>
                     <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Username"  />
                        </div>
                        <div class="form-group has-feedback">
                            <label>Ulangi Password</label>
                            <input type="password" name="password2" class="form-control" placeholder="Password"  />
                        </div>  
                        <div class="form-group has-feedback">
                            <label>Level</label>
                           <select name="level" class="form-control" required value="<?php echo $u->level;?>">
                                <option value="1">Manager</option>
                                <option value="2">Agen</option>
                            </select>
                        </div>  
                    </div>
                </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
    <?php } ?>

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