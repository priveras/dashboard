<?php

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('main_model');
    }

	public function index(){
		// $this->load->view('header');
		// $this->load->view('navbar');
		// $this->load->view('sidebar');
		// $this->load->view('main');
		// $this->load->view('footer');

		$listings = $this->main_model->get_stripe_summary();
		echo "<pre>";
		print_r($listings);
		echo "</pre>";
	}

}
?>
