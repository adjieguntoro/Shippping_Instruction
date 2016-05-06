<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login_page()
	{	
			$d['tittle']='User Login - Shipping Instruction - Kemendag RI';
			
			// $d['username']=$this->session->userdata('username');
			$this->load->view('user_view/user_login',$d);
	}
	public function masuk()
	{
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));

		$user_check=$this->Model_account_system->user_check_user($username, $password);
		if($user_check->num_rows()==1) {
			foreach ($user_check->result() as $data) {
				
				$sess_data['user_id']=$data->user_id;
				$sess_data['first_name']=$data->first_name;
				$sess_data['username']=$data->username;
				$sess_data['active_status']=$data->active_status;


				$this->session->set_userdata($sess_data);
			}

			redirect('Login/check_active_account');
			//redirect('Site');
		}
		else {
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dan password tidak tepat!.');
			redirect('Login/login_page');
		}
		//$this->load->view('welcome_message');
	}

	public function check_active_account(){
		if($this->session->userdata('active_status')=='A')
			{
				redirect('Site');
			} else {
				$this->session->sess_destroy();
				$data['tittle']="Sorry!";
				$data['message']="Sorry, your account have not active yet, please check your email to activation your account! <br>";
				$this->load->view('user_view/not_active',$data);
			}
	}


	public function keluar()
	{	
			
			$this->session->sess_destroy();
			redirect('Login/login_page');
	}

	public function daftar() {
		$data['tittle']='Create an account - Shipping Instruction - Kemendag RI';
		$this->load->view('user_view/create_account',$data);
	}


// public function ok(){
// 		$this->load->view('regist_success');
// 	}


	public function edit_account($user_id){
		$data['tittle']='Edit Account - Shipping Instruction - Kemendag RI';
		$data['page']='Edit Account';

			$this->load->model('Model_account');
			
			

			$data['data_account']=$this->Model_account->get_account($user_id);
			$this->load->view('user_view/edit_account',$data);
	}
}
