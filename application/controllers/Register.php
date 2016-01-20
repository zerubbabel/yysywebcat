<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('register_model','',TRUE);
    }

	public function index()
	{
		$data['title'] = '网上报名';
		$this->load->view('header');
		$this->load->view('register',$data);
		$this->load->view('footer');
	}
	public function create()
	{
	    $this->load->helper('form');
	    //$this->load->library('form_validation');

	    $data['title'] = '网上报名';

	    $this->form_validation->set_rules('name', '姓名', 'required');
	    $this->form_validation->set_rules('phone', '手机', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('header');
	        $this->load->view('register', $data);
	        $this->load->view('footer');

	    }
	    else
	    {
	        $this->register_model->new_student();
	        $this->load->view('header');
	        $this->load->view('success');
	        $this->load->view('footer');
	    }
	}
}
