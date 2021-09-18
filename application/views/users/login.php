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
	<link href="<?= base_url();?>assets/template/css/pace.min.css" rel="stylesheet" />
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
								<img src="<?= base_url();?>assets/template/images/error/login-img.jpg" class="img-fluid" alt="">
							</div>
							<div class="col-lg-6">
								<div class="card-body p-4 p-sm-5">
									<h5 class="card-title text-center"><?= $subtitle;?></h5>
									<form class="form-body" method="post" action="<?= base_url('login');?>">
										<?= validation_errors('<div class="alert alert-success">','</div>');
											if ($this->session->flashdata('success'))
											{
												echo '<div class="alert alert-success">';
												echo $this->session->flashdata('success');
												echo '</div>';
											}else if($this->session->flashdata('failed')){
												echo '<div class="alert alert-danger">';
												echo $this->session->flashdata('failed');
												echo '</div>';  
											}
										?>
										<div class="row g-3">
											<div class="col-12">
												<label for="EmailUsers" class="form-label">Email Users</label>
												<div class="ms-auto position-relative">
													<div class="position-absolute top-50 translate-middle-y search-icon px-3">
														<i class="fa fa-envelope"></i>
													</div>
													<input type="email" name="email" class="form-control radius-30 ps-5" id="EmailUsers"
														placeholder="Email" required>
												</div>
											</div>
											<div class="col-12">
												<label for="Password" class="form-label">Password</label>
												<div class="ms-auto position-relative">
													<div class="position-absolute top-50 translate-middle-y search-icon px-3">
														<i class="fas fa-lock"></i>
													</div>
													<input type="password" name="password" class="form-control radius-30 ps-5" id="Password"
														placeholder="Password" required>
												</div>
											</div>
											<div class="col-12">
                                            <label for="NamaPerusahaan" class="form-label">Nama Perusahaan</label>
                                            <div class="ms-auto position-relative">
                                                <select name="nama_perusahaan" class="form-control">
                                                    <?php foreach ($list_perusahaan as $data) { ?>
                                                    <option value="<?= $data['NamaPerusahaan'];?>">
                                                        <?= $data['NamaPerusahaan'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary radius-30">Login</button>
												</div>
											</div>
											<div class="col-12">
												<p class="mb-0">Belum punya akun? <a href="<?= base_url('registrasi');?>">Registrasi</a>
												</p>
											</div>
										</div>
									</form>
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
</body>

</html>
