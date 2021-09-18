<?php $this->load->view('users/template/header');?>
<!--start content-->
<main class="page-content">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase"><?= $subtitle;?></h6>
                    <br>
                    <form method="post" action="<?= base_url('users/profile/actionupdate');?>">
                        <div class="form-group">
                            <label>Nama Users</label>
                            <input type="hidden" name="id_users" value="<?=$id_users;?>">
                            <input class="form-control form-control-sm mb-3" name="nama_users" type="text" aria-label=".form-control-sm example" value="<?= $nama_users;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email Users</label>
                            <input class="form-control form-control-sm mb-3" name="email_users" type="text" aria-label=".form-control-sm example" value="<?= $email_users;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control form-control-sm mb-3" name="no_telp" type="text" aria-label=".form-control-sm example" value="<?= $no_telp;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input class="form-control form-control-sm mb-3" name="nama_perusahaan" type="text" aria-label=".form-control-sm example" value="<?= $nama_perusahaan;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Alamat Users</label>
                            <input class="form-control form-control-sm mb-3" name="alamat_users" type="text" aria-label=".form-control-sm example" value="<?= $alamat_users;?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</main>
<!--end page main-->
<?php $this->load->view('users/template/footer');?>