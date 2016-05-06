<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_daftar extends CI_Model{
		function __construct() {
		parent::__construct();
		}
			function form_insert($data){
			// Inserting in Table(students) of Database(college)
			$this->db->insert('sh1p_user', $data);
		}
		}



?>