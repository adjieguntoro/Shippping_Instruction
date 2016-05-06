<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_request extends CI_Model{
	function __construct() {
	parent::__construct();
		}
			

			function form_insert($data_request){
			// Inserting in Table(sh1p_request) of Database(shipping_db)
			$this->db->insert('sh1p_request', $data_request);
			}

			function view_request(){
				$view_data=$this->db->get('sh1p_request');
					return $view_data->result();


			}

			function view_request2(){
				$user_id=$this->session->userdata('user_id');

				$this->db->where('user_id',$user_id);
				$query=$this->db->get('sh1p_request');
					return $query->result();
			}

			function get_details($request_id){
				$this->db->where('request_id',$request_id);
				$query=$this->db->get('sh1p_request');
					return $query->result();
			}
			function put_review($request_id){
				 $sql = "update sh1p_request set status='Review' WHERE request_id=?";
	  			$this->db->query($sql, array($request_id));
	  				return $this->db->affected_rows(); 
			}

			function put_approve($request_id){
				 $sql = "update sh1p_request set status='Approved' WHERE request_id=?";
	  			$this->db->query($sql, array($request_id));
	  				return $this->db->affected_rows(); 
			}

			function put_reject($request_id){
				 $sql = "update sh1p_request set status='Rejected' WHERE request_id=?";
	  			$this->db->query($sql, array($request_id));
	  				return $this->db->affected_rows(); 
			}

			// function get_details2($request_id){
			// 	$this->db->select('*');
			// 	$this->db->from('sh1p_request');
			// 	$this->db->where('request_id',$request_id);
			// 	$query = $this->db->get();    
   //  			// if($query->num_rows() > 0)
   //     // 				 return $data->result();
			// }

			public function show_data_by_id($request_id) {
				$condition = "emp_id =" . "'" . $request_id . "'";
				$this->db->select('*');
				$this->db->from('sh1p_request');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
				return $query->result();
				} else {
				return false;
				}
}

	}



?>