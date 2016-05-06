<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_account_system extends CI_Model{
		function __construct() {
		parent::__construct();
			}
				function user_check($username, $password){
				$this->db->where('username', $username);
				$this->db->where('password', $password);
					return $this->db->get('sh1p_user_admin');
			}

			function user_check_user($username, $password){
				$this->db->where('username', $username);
				$this->db->where('password', $password);
					return $this->db->get('sh1p_user');
			}


			
		}



?>