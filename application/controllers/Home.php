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
}
