<?php
class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('page_model');
		$this->load->helper('url');
	}

	public function time1()
  {
  	echo time();
  }
	public function index()
	{
		$data['title'] = 'Page Title';
		$data['page'] = $this->page_model->get_page();
		$this->load->view('common/header', $data);
		$this->load->view('common/header2', $data);
		$this->load->view('page/index', $data);
		$this->load->view('common/footer');
	}

	
	public function view($pagename)
	{
	//$data['page'] = $this->page_model->get_page();
	$data['page_item'] = $this->page_model->get_page($pagename);

	if (empty($data['page_item']))
	{
		show_404();
	}

	$data['title'] = $data['page_item']['sectiontitle'];

	//$this->load->view('common/header', $data);
	//$this->load->view('common/header2', $data);
	$this->load->view('page/view', $data);
	//$this->load->view('common/footer');
}
	
}