<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_account extends CI_Model{
	function __construct() {
	parent::__construct();
		}
			

			function form_insert($data_request){
			// Inserting in Table(sh1p_request) of Database(shipping_db)
			$this->db->insert('sh1p_request', $data_request);
			}

			
			function view_request2(){
				$user_id=$this->session->userdata('user_id');

				$this->db->where('user_id',$user_id);
				$query=$this->db->get('sh1p_request');
					return $query->result();
			}

			function get_account($user_id){
				$this->db->where('user_id',$user_id);
				$query=$this->db->get('sh1p_user');
					return $query->result();
			}

			function update_account(){
				// $this->db->where('user_id', $this->session->userdata['user_id']);
				// $this->db->update('sh1p_user', $data);
				$data=array();
			    $data=$this->input->post(); //get all post value to data array
			    $user_id=$this->session->userdata['user_id'];
			    unset($data['user_id']); // unset unnecessary values 
			    $this->db->where('user_id', $user_id)->update('sh1p_user' ,$data);
			    return true;
			}

		

	}



?>