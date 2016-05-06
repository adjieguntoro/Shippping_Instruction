<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	function __construct(){
		parent::__construct();
			// if(!$this->session->userdata('username'))
			// {
			// 	redirect('home');
			// }
	}


	public function index()
	{	
			// $d['tittle']='Login dengan Codeigniter';
			// $d['judul']='Login logout dengan mysql';
			// $d['username']=$this->session->userdata('username');
			$this->load->view('home');
	}

	public function masuk()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$cek=$this->model_login->cek($username, $password);
		if($cek->num_rows()==1) {
			foreach ($cek->result as $data) {
				$sess_data['user_id']=$data->user_id;
				$sess_data['username']=$data->username;
				$this->session->set_userdata($sess_data);
			}

			redirect('welcome_message');
		}
		else {
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dab password tidak tepat!.');
			redirect('home');
		}
		//$this->load->view('welcome_message');
	}

	public function daftar() {
		$this->load->view('includes/daftar');
	}

	public function proses_daftar()
	{	
			$this->load->model('Model_daftar');
			$d['tittle']='Login dengan Codeigniter';
			// $d['judul']='Login logout dengan mysql';
			// $d['username']=$this->session->userdata('username');
			//$this->load->view('includes/head');
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				// 'Student_Address' => $this->input->post('daddress')
				);
				//Transfering data to Model
				$this->Model_daftar->form_insert($data);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				// $this->load->view('insert_view', $data);
			$this->load->view('home');
			// $this->load->view('includes/footer');
	}
	
}
