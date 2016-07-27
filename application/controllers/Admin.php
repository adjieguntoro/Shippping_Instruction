<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	

	public function login(){
		//$data[title]="Admin";
		$this->load->model('Model_backend');
		$this->load->view('Backend/login');
		}

	function act_login(){
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));

		$user_check=$this->Model_account_system->user_check($username, $password);
		if($user_check->num_rows()==1) {
			foreach ($user_check->result() as $data) {
				
				$sess_data['admin_id']=$data->admin_id;
				// $sess_data['first_name']=$data->first_name;
				$sess_data['username']=$data->username;
				// $sess_data['level']=$data->level;


				$this->session->set_userdata($sess_data);
			}

			redirect('Backend');
			//redirect('Site');
		}
		else {
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dan password tidak tepat!.');
			redirect('Admin/login');
		}
	}

	function check_level(){
		if($this->session->userdata('level')=='1')
			{
				redirect('Backend');
			} else {
				$this->session->sess_destroy();
				$data['tittle']="Sorry!";
				$data['message']="Sorry, you are not admin! <br>";
				$this->load->view('Backend/login',$data);
			}
	}

	public function logout()
	{	
			
			$this->session->sess_destroy();
			redirect('Admin/login');
	}

		
}
