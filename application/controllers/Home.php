<?php
class Home extends Controller {

 function Home(){
  parent::Controller();
  $this->load->model('HomeModel');
  $this->load->model('EmailModel');
  
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
  $data['errormsg'] = $error; 
  $this->load->view('index.php', $data);   
 }


 function sendVerificationEmail(){  
  $this->EmailModel->sendVerificatinEmail("yashwantchavan@technicalkeeda.com","13nRGi7UDv4CkE7JHP1o");
  $this->load->view('index.php', $data);   
 }

 

}
?>