 <?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
  {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->helper(array('breadcrumb'));
        
	}
  
	public function index() {
        $data['title']="Gautam Buddha University";
		$this->load->view('common/header', $data);
        //$this->load->view('common/header2', $data);
		$this->load->view('home');
		$this->load->view('common/footer');

	}

    function school(){
        $data['title']="Gautam Buddha University::Schools";
		$this->load->view('common/header', $data);
        $this->load->view('common/header2', $data);
		$this->load->view('school');
		$this->load->view('common/footer');
    }

    public function schoolview($pagename)
	{
        $basepagename=explode("_",$pagename)[0];
        $data['title']="Gautam Buddha University::Schools::".$pagename;
        $schooldata['nav']=array(
        array('caption'=>'About School','link'=>$basepagename),
        array('caption'=>'Programmes','link'=>$basepagename.'_prog')
        );
        
             
        $this->load->view('common/header', $data);
        $this->load->view('common/header2', $data);
        $this->load->view('common/sidelink', $schooldata);
		$this->load->view('school/'.$pagename);
		$this->load->view('common/footer');
    
	
	}

	//Route will call helloword() if the URI is /greet/hello
	public function vission() {

		//set the message
		$data = array(
			      'title' => 'Vission',
			      'msg' => "Hello there! You are now in controller Greeting, method helloword() ".'<a href="' . base_url() . 'index.php/greeting">Back</a>'
			      );

		//Loads the view/greeting.php
		$this->load->view('common/header', $data);
		$this->load->view('about', $data);
		$this->load->view('common/footer');
	}

	//Route will call hiword() if the URI is /greet/hi
	public function vcmsg() {
		//set the message
		$data = array(
			      'title' => 'VC Message',
			      'msg' => "Hello there! You are now in controller Greeting, method helloword() ".'<a href="' . base_url() . 'index.php/greeting">Back</a>'
			      );
		$this->load->view('common/header', $data);
		//Loads the view/greeting.php
		$this->load->view('about', $data);
		$this->load->view('common/footer');
	}

    function gallery()
    {
    $data['title']="Gautam Buddha University:Gallery";
    $this->load->view('common/header', $data);
    $this->load->view('common/header2', $data);
    $this->load->view('gallery-index');
	$this->load->view('common/footer');  
    }

}
