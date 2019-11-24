<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	function emailSend()
	{
		$fromEmail = $this->input->post('password');
        $isiEmail = $this->input->post('password');
		$mail = new PHPMailer();
		$mail->IsHTML(true);    // set email format to HTML
		$mail->IsSMTP();   // we are going to use SMTP
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Port       = 465;                   // SMTP port to connect to GMail
		$mail->Username   = $fromEmail;  // alamat email kamu
		$mail->Password   = "password email kamu";            // password GMail
		$mail->SetFrom('info@yourdomain.com', 'noreply');  //Siapa yg mengirim email
		$mail->Subject    = "Pesan Dari Custumer";
		$mail->Body       = $isiEmail;
		$toEmail = "email.penerima@gmail.com"; // siapa yg menerima email ini
		$mail->AddAddress($toEmail);
		if (!$mail->Send()) {
			echo "Eror: " . $mail->ErrorInfo;
		} else {
			echo "Email berhasil dikirim";
		}
		redirect('Home');
	}
}
