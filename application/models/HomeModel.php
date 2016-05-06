<?php
class HomeModel extends CI_Model {

 function __construct(){
	  parent::__construct();
 }
 
 function verifyEmailAddress($verificationcode){  
  $sql = "update sh1p_user set active_status='A' WHERE hash=?";
  $this->db->query($sql, array($verificationcode));
  return $this->db->affected_rows(); 
 }
 
}
?>	