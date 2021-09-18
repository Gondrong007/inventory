<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url();?>assets/template/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url();?>assets/template/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/style.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>assets/template/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/template/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/template/sweetalert/css/sweetalert2.min.css">
    <title><?= $title;?></title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                                <img src="<?= base_url();?>assets/template/images/error/login-img.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title text-center"><?= $subtitle;?></h5>
                                    <div id="cek_email" style="color:red;"></div>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="NamaUsers" class="form-label">Nama Users</label>
                                            <div class="ms-auto position-relative">
                                                <div
                                                    class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control radius-30 ps-5" id="NamaUsers"
                                                    placeholder="Nama Users" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="EmailUsers" class="form-label">Email Users</label>
                                            <div class="ms-auto position-relative">
                                                <div
                                                    class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input type="email" class="form-control radius-30 ps-5" id="EmailUsers"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="NoTelp" class="form-label">No Telepon</label>
                                            <div class="ms-auto position-relative">
                                                <div
                                                    class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="number" class="form-control radius-30 ps-5" id="NoTelp"
                                                    placeholder="No Telepon" onkeypress="return onlyNumberKey(event)">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="NamaPerusahaan" class="form-label">Nama Perusahaan</label>
                                            <div class="ms-auto position-relative">
                                                <select id="NamaPerusahaan" class="form-control">
                                                    <?php foreach ($list_perusahaan as $data) { ?>
                                                    <option value="<?= $data['NamaPerusahaan'];?>">
                                                        <?= $data['NamaPerusahaan'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="Password" class="form-label">Password</label>
                                            <div class="ms-auto position-relative">
                                                <div
                                                    class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <input type="password" class="form-control radius-30 ps-5" id="Password"
                                                    placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="KonfirmasiPassword" class="form-label">Konfirmasi
                                                Password</label>
                                            <div class="ms-auto position-relative">
                                                <div
                                                    class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <input type="password" class="form-control radius-30 ps-5"
                                                    id="KonfirmasiPassword" placeholder="Konfirmasi Password" required>
                                            </div>
                                            <br>
                                            <div id="cek_pass" style="color:green;"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="Registrasi"
                                                    class="btn btn-primary radius-30" disabled>Registrasi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--end page main-->
    </div>
    <!--end wrapper-->
    <!--plugins-->
    <script src="<?= base_url();?>assets/template/js/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/template/js/pace.min.js"></script>
    <script src="<?= base_url();?>assets/template/sweetalert/js/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //Fungsi Registrasi Users
            $('#Registrasi').click(function () {
                var nama_users = $('#NamaUsers').val();
                var email_users = $('#EmailUsers').val();
                var no_telp = $('#NoTelp').val();
                var password = $('#Password').val();
                var nama_perusahaan = $('#NamaPerusahaan').val();
                if (nama_users == "" || nama_users == null) {
                    showError("Harap isi Nama Users");
                } else if (email_users == "" || email_users == null) {
                    showError("Harap isi Email Users");
                } else if (no_telp == "" || no_telp == null) {
                    showError("Harap isi No Telepon");
                } else {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('registrasi/SaveUsers');?>",
                        data: {
                            NamaUsers: nama_users,
                            EmailUsers: email_users,
                            NoTelp: no_telp,
                            NamaPerusahaan: nama_perusahaan,
                            Password: password,
                        },
                        success: function (response) {
                            var dataresponse = JSON.parse(response);
                            if (dataresponse.status != 200) {
                                $("#cek_email").show();
                                $('#cek_email').html('Email anda sudah sudah terdaftar <br> silahkan menggunakan email baru!');
                            } else {
                                Swal.fire({
                                    type: 'success',
                                    title: 'Info!',
                                    text: 'Berhasil Registrasi Akun, Silahkan verifikasi melalui email anda!',
                                }).then((response) => {
                                    location.reload(true);     
                                    window.location.href = "<?= base_url('login');?>";
                                });
                            }
                            console.log(response);
                        }
                    })
                    return false;
                }
            });

            function showError(text) {
                Swal.fire({
                    type: 'error',
                    title: 'Info!',
                    text: text
                });
            }
        });
    </script>
    <script type="text/javascript">
        function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            function CekPasword() 
            {
                var password = $("#Password").val();
                var konfirmasi_password = $("#KonfirmasiPassword").val();
                if (password != konfirmasi_password)
                {
                    document.getElementById("Registrasi").disabled = true;
                    $("#cek_pass").html("Passwords tidak sesuai!");
                }else{
                    document.getElementById("Registrasi").disabled = false;
                    $("#cek_pass").html("Passwords sesuai.");
                }    
            }

            $("#KonfirmasiPassword").keyup(CekPasword);
        });
    </script>
</body>

</html>
