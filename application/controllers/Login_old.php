<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$d['tittle']='Login dengan Codeigniter';
		$d['judul']='Login logout dengan mysql';
		$this->load->view('home',$d);
	}

	function masuk() {
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$cek=$this->model_login->cek($username, $password);
		if($cek->num_rows()==1) {
			foreach ($cek->result as $data) {
				$sess_data['user_id']=$data->user_id;
				$sess_data['username']=$data->username;
				$this->session->set_userdata($sess_data);
			}

			redirect('home');
		}
		else {
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dab password tidak tepat!.');
			redirect('login');
		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect ('login');
	}
}
