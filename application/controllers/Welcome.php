<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
	 	parent::__construct();
	 	$this->load->model('Welcome_model');
	 }

	public function index()
	{
		$data['getAllmenu'] = $this->Welcome_model->getAllmenu();
		$this->load->view('welcome_message',$data);
	}

	function updateMenu(){

		$position = $this->input->post('position');
		$this->Welcome_model->UpdateMenu($position);
		$this->session->set_flashdata('message', '<strong>Success!</strong> Menu position update.');

	}

	function AllMenu(){
		$data['getAllmenu'] = $this->Welcome_model->getAllmenu();
		$this->load->view('all_menu',$data);
	}
}
