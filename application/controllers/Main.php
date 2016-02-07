<?php

class Main extends CI_Controller {

	public function index(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('main');
		$this->load->view('footer');
	}

}
?>
