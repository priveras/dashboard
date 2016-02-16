<?php

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('main_model');
    }

	public function index(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');

		$data['stripe_summary'] = $this->main_model->get_stripe_summary();
		$data['stripe_disputes'] = $this->main_model->get_stripe_disputes();
		$data['stripe_cards'] = $this->main_model->get_stripe_card_summary();
		$data['stripe_cards_disputes'] = $this->main_model->get_stripe_card_disputes();
		$data['stripe_month'] = $this->main_model->get_stripe_month();
		$data['stripe_paid_time'] = $this->main_model->get_stripe_purchase_time('paid');
		$data['stripe_failed_time'] = $this->main_model->get_stripe_purchase_time('failed');
		$data['stripe_refunded_time'] = $this->main_model->get_stripe_purchase_time('refunded');
		$data['stripe_disputed_time'] = $this->main_model->get_stripe_purchase_time_disputes();

		$this->load->view('main', $data);
		$this->load->view('footer');

	}

	public function day(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');

		$data['stripe_day'] = $this->main_model->get_stripe_paid_day('paid');

		$this->load->view('day', $data);
		$this->load->view('footer');
	}
}
?>
