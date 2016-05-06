<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	function __construct(){
	  parent::__construct();
	  $this->load->model('HomeModel');
	  $this->load->model('EmailModel');
  
 }

	
	public function Completed()
	{	
			$this->load->model('Model_daftar');
			$angka=range(0, 9);
			shuffle($angka);
			$ambilangka=array_rand($angka,5);
			$data = array(
				'user_id'=>rand(1000, 9999),
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'hash' => md5(rand(0, 1000))
				);
				//Transfering data to Model
				$this->Model_daftar->form_insert($data);
				$this->EmailModel->sendVerificatinEmail($data['email'],$data['hash']);
					//$this->sendVerificationEmail();	
      	$data['message'] = 'Please check your email for confimation your account';
        $data['tittle']='Success - Shipping Instruction - Kemendag RI';
      $this->load->view('user_view/ok',$data);
	}


 
 
		function index(){    
		  
		 }
		 
		 
		 function verify($verificationText=NULL){  
		  $noRecords = $this->HomeModel->verifyEmailAddress($verificationText);  
				  if ($noRecords > 0){
				   $error = array( 'success' => "Email Verified Successfully!"); 
				  }else{
				   $error = array( 'error' => "Sorry Unable to Verify Your Email!"); 
				  }
				  $data['tittle']='Success - Shipping Instruction - Kemendag RI';
				  $data['errormsg'] = $error; 
				  $this->load->view('user_view/user_actived', $data);   
		 }


		 function sendEmail(){  

		  $this->EmailModel->sendVerificatinEmail("adjie1607@gmail.com","43534bwebteryrhfhnhf5");
		  // $this->load->view('index.php', $data);   
		 } 

 

}


