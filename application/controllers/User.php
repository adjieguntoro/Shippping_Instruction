<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	function __construct(){
		parent::__construct();
			if(!$this->session->userdata('username'))
			{
				redirect('Login/login_page');
			}
	}

	public function proses_daftar()
	{	
			$this->load->model('Model_daftar');
			$d['tittle']='Login dengan Codeigniter';
			// $d['judul']='Login logout dengan mysql';
			// $d['username']=$this->session->userdata('username');
			//$this->load->view('includes/head');
			$data = array(
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'hash' => md5(rand(0, 1000))
				);
				//Transfering data to Model
				$this->Model_daftar->form_insert($data);
				
				//Loading View
				// $this->load->view('insert_view', $data);
			$this->load->view('send_confirmation');
			// $this->load->view('includes/footer');
	}

	

	public function update_account(){
		$this->load->model('Model_account');
		$data = array(
				'user_id'=>$this->session->userdata('user_id'),
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				// 'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
				);
				//Transfering data to Model
				// $this->Model_daftar->form_insert($data);
				$user_id=$this->session->userdata('user_id');
				//$data['data_account']=$this->Model_account->update_account($user_id);
				$this->Model_account->update_account();
				redirect('Site/setting');
	}

	public function edit_account($user_id){
		$data['tittle']='Edit Account - Shipping Instruction - Kemendag RI';
		$data['page']='Edit Account';

			$this->load->model('Model_account');
			
			

			$data['data_account']=$this->Model_account->get_account($user_id);
			$this->load->view('user_view/edit_account',$data);
	}

}
