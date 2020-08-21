<?php  
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		function __construct() // check if logged
		{
			parent::__construct();
			if ($this->session->userdata($newdata['logged_in'] = TRUE)) {
				redirect('admin/dashboard');
			}
		}
		function index()
		{
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		}
		function verify()
		{
			$this->load->model('admin'); //admin is from model Admin.php 
			$check = $this->admin->validate();
			
			if($check)
			{
				$result = $this->admin->showname($_POST['username']);
				$this->session->set_userdata('admin', $result->username);
				redirect('admin/dashboard');
			}
			else
			{
				redirect('admin'); //redirect to admin/login/index as per in the route
			}
		}
		public function forgot_password()
		{
			$this->load->view('templates/header');
			$this->load->view('admin/account/forgot_password');
			$this->load->view('templates/footer');
		}
		public function resetlink()
		{
			$to_email = $this->input->post('email');
			$this->load->model('admin');
			$check = $this->admin->confirmemail($to_email);
			if ($check) {
				    // Load PHPMailer library
		        $this->load->library('phpmailer_lib');
		        
		        // PHPMailer object
		        $mail = $this->phpmailer_lib->load();
		        
		        // SMTP configuration
		        $mail->isSMTP();
		        $mail->Host     = 'smtp.gmail.com';
		        $mail->SMTPAuth = true;
		        $mail->Username = 'myattendancemailer@gmail.com';
		        $mail->Password = 'attendancemonitoring';
		        $mail->SMTPSecure = 'ssl';
		        $mail->Port     = 465;
		        
		        $mail->setFrom('myattendancemailer@gmail.com', 'Admin reset');
		        //$mail->addReplyTo('info@example.com', 'CodexWorld');
		        
		        // Add a recipient
		        $mail->addAddress($to_email);
		        
		        // Add cc or bcc 
		        //$mail->addCC('cc@example.com');
		        //$mail->addBCC('bcc@example.com');
		        
		        // Email subject
		        $mail->Subject = 'Admin Reset Password';
		        
		        // Set email format to HTML
		        $mail->isHTML(true);
		        $newpass = rand(1000,9999);

		        // Email body content
		        $mailContent = "<h1>Reset Password</h1>
		            <p>Password has been reset.</p><br><p>This is your new password: ". $newpass."</p>";
		        $mail->Body = $mailContent;
		        
		        
		        if($mail->send())
		        {
		        	$response = $this->admin->updatepass($newpass,$to_email);
		        	if ($response) {
		            $this->session->set_flashdata("email_sent","Email Send Successfully.
		            	Check your mail");
		        	redirect('admin/login/forgot_password');
		        	}
		        }
		        else
		        {
		        	 $this->session->set_flashdata("email_sent","Failed to send email.");
		        }
			}
			else
			{
				$this->session->set_flashdata('notemail_sent', 'Incorrect email');
				redirect('admin/login/forgot_password');
			}
		}
	}
?>