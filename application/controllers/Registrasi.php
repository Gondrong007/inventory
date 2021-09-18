<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller 
{
	public function __Construct()
	{
        parent::__construct();
		$this->load->model('m_users','users');
		$this->load->model('m_global','global');
		$this->load->library('PHPMailer');
		$this->load->library('SMTP');
	}
	
	public function index()
	{
		$data = array(
			'title' => 'Registrasi Users', 
			'subtitle' => 'Registrasi Users', 
			'list_perusahaan' => $this->users->getmasterperusahaan()->result_array()
		);
		$this->load->view('users/registrasi',$data);
	}

	//Fungsi Insert data ke db & send notif kode verifikasi ke gmail
	public function SaveUsers()
	{
		$valid = $this->form_validation;
		$valid->set_rules('EmailUsers','Email Users','required|is_unique[Users.EmailUsers]');
		$email_users = $this->input->post('EmailUsers');
		$nama_users = $this->input->post('NamaUsers');
		$no_telp = $this->input->post('NoTelp');
		$nama_perusahaan = $this->input->post('NamaPerusahaan');
		$password = sha1($this->input->post('Password'));
		if ($valid->run()  == FALSE)
		{
   			echo json_encode(array("status"=>201));  	
      	}else{         
			$data = array(
				'EmailUsers' => $email_users,
				'NamaUsers' => $nama_users,
				'NoTelp' => $no_telp,
				'NamaPerusahaan' => $nama_perusahaan,
				'Password' => $password,
				'VerifierAccord' => sha1($this->input->post('EmailUsers')),
			);
			$this->global->InsertData('Users', $data);

			$mail = new PHPMailer();
	        $mail->IsSMTP(); // we are going to use SMTP
	        $mail->SMTPAuth   = true; // enabled SMTP authentication
	        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
	        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
	        $mail->Port       = 465;                   // SMTP port to connect to GMail
	        $mail->Username   = "inventoryapps864@gmail.com";  // user email address
	        $mail->Password   = "appsinventory0917";            // password in GMail
	        $mail->SetFrom('inventoryapps864@gmail.com');  //Who is sending the email       
			$mail->AddEmbeddedImage('assets/users/images/inventory.jpg', 'logo_2u');
	        $mail->Subject    = "Verifikasi Akun";
			$mail->Body 	  = '<html>
									<head>
										<style>
											body {
												background-color: #fff;
											}
												
											#content {
												width: 800px;
												height: 600px;
												margin: 0 auto;
											}

											#image {
													width: 800px;
													text-align: center;
													font: 35px Impact;
													position: relative;
													top: 130px;
													line-height: 50px;
													text-transform: uppercase;
											}

											#text {
												width: 800px;
												text-align: left;
												font: 20px;
												position: relative;
												margin-left:25px;  
												top: 130px;
												line-height: 30px;
											}

											#button {
												font: bold 14px Helvetica, Arial, sans-serif;
												position: relative;
												left: 500px;
												text-align: center;
												top: 30px;
											}
										</style>
									</head>
									<body>
										<div id="content">
												&nbsp;
												<div id="image">
													<img src="cid:logo_2u" style="width:90%; height:auto;">
												</div>
												<div id="text">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terima Kasih telah mendaftar di Web Inventory Kami Silahkan Verifikasi Email Anda <br>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id"button" style="width:200px; height:30px; background-color:blue;"><a href="http://localhost/inventory/registrasi/verifikasi/'.sha1($this->input->post("EmailUsers")).'" style="color:#ffffff;">Verifikasi</a></button>
												</div>
												<div id="button">
												</div>
										</div>
									</body>
								</html>';
	        $mail->AltBody    = "Terima Kasih telah mendaftar di Web Inventory Kami Silahkan Verifikasi Email Anda";
	        $destino = $this->input->post('EmailUsers'); // penerima email
	        $mail->AddAddress($destino);
			$mail->Send();
			echo json_encode(array("status"=>200)); 
		}	
	}

	//verifikasi	
	public function verifikasi()
	{
		$data = array( 
			'Status' => 1
		);
        $this->global->VerifikasiData('Users',$data);

		$name = array(
			'title' => 'Verifikasi Users', 
		);
		$this->load->view('users/verifikasi',$name);
	}
}
