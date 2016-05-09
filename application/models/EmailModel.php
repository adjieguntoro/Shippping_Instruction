<?php
class EmailModel extends CI_Model {

function __construct(){
    parent::__construct();
    $this->load->library('email');
 }
 

 function sendVerificatinEmail($email,$verificationText){
  
  $config = array(
        'useragent'=>'Codeigniter',
     'protocol' => 'smtp',
     'smtp_host' => 'ssl://cl46051x.maintenis.com',
     'smtp_port' => 465,
     'smtp_user' => 'no-reply@si.mytangsel.com', // change it to yours
     'smtp_pass' => '2k+Ow8boK}Wd', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );

  $data['very_code']=$verificationText;
   $this->load->library('email');
  $pesan=$this->load->view('user_view/email',$data,TRUE);
  $this->email->initialize($config);
  $this->email->set_newline("\r\n");
  $this->email->from('no-reply@si.mytangsel.com', "Shipping Instruction Admin");
  $this->email->to($email);  
  $this->email->subject("Email Verification");
  $this->email->message($pesan);
  // $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n" .base_url(). "verify/" .$verificationText."\n"."\n\nThanks\nAdmin Team");
  $this->email->send();
  
 }
}
?>
