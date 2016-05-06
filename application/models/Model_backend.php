<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_backend extends CI_Model{
	function __construct() {
	parent::__construct();
		}
			

			function view_all_request(){
				$view_data=$this->db->get('sh1p_request');
					return $view_data->result();
			}

			function view_all_users(){
				$view_data=$this->db->get('sh1p_user');
					return $view_data->result();
			}

			function get_details($request_id){
				$this->db->where('request_id',$request_id);
				$query=$this->db->get('sh1p_request');
					return $query->result();
			}
			function getTotalRowAllUser(){
 					$query = $this->db->query("SELECT count(*) as row FROM sh1p_user LIMIT 2")->row_array();
 						return $query['row'];
 						
			}
			function getTotalRowRequest(){
				$query = $this->db->query("SELECT count(*) as row_req FROM sh1p_request")->row_array();
 						return $query['row_req'];

			}

			
}




?>