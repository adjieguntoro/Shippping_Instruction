<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_approving extends CI_Model{
	function __construct() {
	parent::__construct();
		}
			
			function insert_data_approve($data){
			$this->db->insert('sh1p_shipping_approved', $data);
			}

			function send_download_link($request_id){
				$sql = "update sh1p_shipping_approved set download_status='1' WHERE request_id=?";
	  			$this->db->query($sql, array($request_id));
	  				return $this->db->affected_rows(); 

			// $this->db->insert('sh1p_shipping_approved', $data);
			}

			function get_details_approve($request_id){
				$this->db->where('request_id',$request_id);
				$query=$this->db->get('sh1p_shipping_approved');
					return $query->result();
			}

			// function view_data_approve($request_id){
				

			// 	$this->db->where('request_id',$request_id);
			// 	$query=$this->db->get('sh1p_shipping_approved');
			// 		return $query->result();
			// }
	}



?>