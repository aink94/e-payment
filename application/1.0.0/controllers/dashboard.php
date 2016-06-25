<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('css_js', 'menu'));
        $this->load->config('css_js');
        if(!$this->session->userdata('login'))redirect('authentication');
	}
	
	function index(){
		$data = array();
		$message = array();
		add_css(array(0, 1, 2, 3, 4));
		add_js(array(22, 0, 31, 13, 1, 3));
		$data['title'] = 'Dasboard';
		
		$this->load->view('head', $data);
		$this->load->view('header', $data);
		$this->load->view('left', $data);
		$this->load->view('content_blank', $data);
		$this->load->view('footer', $data);
		//Java Script per-Page
		$data['js'] = "";
		$this->load->view('foot', $data);
	}
	
	function coba(){
		echo menu();
	}
}