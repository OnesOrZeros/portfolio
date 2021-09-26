<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

    public function onepage()
	{
		$this->load->view('onepage');
	}

    public function history()
	{
		$this->load->view('history');
	}

	public function portmasonry()
	{
		$this->load->view('portmasonry');
	}
	public function contact()
	{
		$this->load->view('contact');
	}

	public function success()
	{
		$this->load->view('success');
	}

	public function sendMail()
	{
		 //Validate form data
		 $this->form_validation->set_rules('name','Name', 'required');
		 $this->form_validation->set_rules('email','Email', 'required');
		 $this->form_validation->set_rules('message','Message', 'required');
		 $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		 if($this->form_validation->run() === FALSE){
			 //If form is not valid
			 $this->load->view('contact');
		 }else{
			 //If form is valid
			 $this->contact_model->add_contact();

			 redirect('home');
		 } 
		
	}


	
	public function sendcontactmail()
	{
		$from = 'comms@finsys-group.com';
		$to='info@finsys-group.com';
		
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$text = $this->input->post("message");		

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'finsys-group.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'comms@finsys-group.com';
		$config['smtp_pass'] = 'D%bEPUE523yR';
		$config['smtp_crypto'] = 'ssl';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to($to);
		$this->email->message ('<table style="width:100%">
        <tr><td>User Name: ' . $name . '</td></tr>
        <tr><td>User Email: ' . $email . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
        
    </table>');


		try{
			$this->email->send();
			$message = 'Email Sent, We will be in touch ASAP.';
			//if the email is sent successfully the client's information is saved in the database
			$this->contact_model->add_contact();
			$data = array(
				'message' => $message
			);
			redirect('success');
		} catch (Exception $e) {
			$message = 'Email not sent! Please try again.';
			$data = array(
				'message' => $message
			);
		
		}

	}
}
