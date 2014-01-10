<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
	if (!isset($_SESSION['email'])){

	}else{

	}
	

class Site extends CI_Controller {

	function __construct() {
		parent::__construct();

		// Helpers
		$this->load->helper('url');
		$this->load->helper('form');

		// Library
		$this->load->library('parser');
	}

	public function index(){
		$this->home();
	}




	//Navigation pages

	public function home(){
		$data = array(
			'title' => 'Home | All I Want This Christmas',
            'navigation' => $this->load->view('view_navigation', '', true),
            'slideshow' => $this->load->view('homepage/view_slideshow', '', true),
            'content' => $this->load->view('content/content_home', '', true),
            'boxes' => $this->load->view('homepage/view_boxes','', true),
            
            'footer' => $this->load->view('view_footer','',true),
        );

		$this->parser->parse('view_template', $data);
	}

	public function about(){
		$data = array(
			'title' => 'About | All I Want This Christmas',
            'navigation' => $this->load->view('view_navigation', '', true),
            'content' => $this->load->view('content/content_about', '', true),
            'footer' => $this->load->view('view_footer','',true),
        );

		$this->parser->parse('view_template', $data);
	}

	public function contact(){
		$data = array(
			'title' => 'Contact | All I Want This Christmas',
            'navigation' => $this->load->view('view_navigation', '', true),
            'content' => $this->load->view('content/content_contact', '', true),
            'footer' => $this->load->view('view_footer','',true),
        );

		$this->parser->parse('view_template', $data);
	}

	public function search(){
		$data = array(
			'title' => 'Search | All I Want This Christmas',
			'navigation' => $this->load->view('view_navigation', '', true),
            'content' => $this->load->view('content/content_search', '', true),
            'footer' => $this->load->view('view_footer','',true),
		);

		$this->parser->parse('view_template', $data);
	}

	public function my_wishlist(){
		$data = array(
			'title' => 'My Wishlist | All I Want This Christmas',
			'navigation' => $this->load->view('view_navigation', '', true),
            //'content' => $this->load->view('content_search', '', true),
            'footer' => $this->load->view('view_footer','',true),
		);

		$this->parser->parse('view_template', $data);
	}

	public function log_in(){
		$data = array(
			'title' => 'Log in | All I Want This Christmas',
			'navigation' => $this->load->view('view_navigation', '', true),
            'log_in_block' => $this->load->view('view_login_boxes','', true),
            'register_block' => $this->load->view('view_register_boxes', '', true),
            'footer' => $this->load->view('view_footer','',true),
		);

		$this->parser->parse('view_template_login', $data);
	}


	//Models

	public function verify_log_in(){

		$email = $_POST['email'];
		$password = $_POST['password'];
		$this->load->model('Login');
		$check = $this->Login->checkdb($email, $password);
		if($check == TRUE) {
			echo "Success";
			$_SESSION['email'] = $email;
			header('Location: ../site/home');
		}
		else {
			$result = "Incorrect email/password. Please try again.";
			header("Location: ../site/log_in?result=".$result);
		}
	}

	public function log_out(){
		session_destroy();
		header('Location: ../site/home');
	}

	public function register() {

		$fname = $_POST['firstname'];
		$sname = $_POST['surname'];
		$email = $_POST['email'];
		$pwd   = $_POST['password'];
		$cpwd  = $_POST['confirm'];

		$this->load->model('Login');
		$check = $this->Login->check_email($email);
		if($check == FALSE){
			$error1 = $email." is an invalid email address.<br>";
			$errors = $error1;
		}

		$check = $this->Login->check_email($email);
		if($check == FALSE){
			$error2 = "<br>Your password is not long enough.<br>";
			$errors = $errors & $error2;
		}

		/*$check = $this->Login->check_email($email);
		if($check == FALSE){
			$error3 = "<br>Your passwords do not match.";
			$errors = $errors & $error3;
		}*/


		echo $errors;
		//header('Location: ../site/log_in');

	}
}
