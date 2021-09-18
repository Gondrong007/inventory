<?php $this->load->view('admin/template/header');?>
<!--start content-->
<main class="page-content">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-0 text-uppercase"><?= $subtitle;?></h6>
            <br>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Users</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($list_users as $data) { ?>
                            <tr>
                                <td class="text-center"><?= $no;?></td>
                                <td><?= $data['NamaUsers'];?></td>
                                <td><?= $data['EmailUsers'];?></td>
                                <td><?= $data['NoTelp'];?></td>
                                <td><?= $data['AlamatUsers'];?></td>
                                <td>
                                    <?php if($data['Status'] == "0") { ?>
                                        <span>TIdak Aktif</span>
                                    <?php }else if($data['Status'] == "1") { ?>    
                                        <span>Aktif</span>
                                    <?php } ?>    
                                </td>
                            </tr>
                        <?php $no++; } ?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!--end page main-->
<?php $this->load->view('admin/template/footer');?>