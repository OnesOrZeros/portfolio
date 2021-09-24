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
}
