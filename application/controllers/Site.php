<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	function __construct(){
		parent::__construct();
			if(!$this->session->userdata('username'))
			{
				redirect('Login/login_page');
			}
	}


	// public function login_page()
	// {	
	// 		$d['tittle']='User Login - Shipping Instruction - Kemendag RI';
			
	// 		// $d['username']=$this->session->userdata('username');
	// 		$this->load->view('user_view/user_login',$d);
	// }


	// public function index()
	// {	
	// 		$d['tittle']='User Login - Shipping Instruction - Kemendag RI';
			
	// 		// $d['username']=$this->session->userdata('username');
	// 		$this->load->view('user_view/user_login',$d);
	// }
	public function index() {
			$data['tittle']='Dashboard - Shipping Instruction - Kemendag RI';
			$data['page']='Shipping History';
			$data['user_id']=$this->session->userdata('user_id');
			$this->load->model('Model_request');
			$data['username']=$this->session->userdata('username');
			
			$data['first_name']=$this->session->userdata('first_name');
			$data['data_request']=$this->Model_request->view_request2();
			
			$this->load->view('user_view/dashboard',$data);
	}

		public function details($request_id) {
			$data['tittle']='Dashboard - Shipping Instruction - Kemendag RI';

			$this->load->model('Model_request');
			
			// $d['username']=$this->session->userdata('username');
			$data['data_request']=$this->Model_request->get_details($request_id);
			// $data['data_approved']=$this->Model_approving->get_details_approve($request_id);
			$this->load->view('user_view/details',$data);
	}

	public function req_form(){
			$data['tittle']='Request Form - Shipping Instruction - Kemendag RI';
			$data['page']='New Request';
			
			// $d['username']=$this->session->userdata('username');
			$d['user_id']=$this->session->userdata('user_id');
			$this->load->view('user_view/req_form',$data);

	}

	public function send_request(){
			// $d['username']=$this->session->userdata('username');
			$d['tittle']='Request Form - Shipping Instruction - Kemendag RI';
			$userid=$this->session->userdata('user_id');

			$this->load->model('Model_request');
			$data_request = array(
				'request_id'=> rand(100, 999),
				'user_id' =>$this->session->userdata('user_id'),
				'shipper' => $this->input->post('shipper'),
				'cosignee' => $this->input->post('cosignee'),
				'notify_party' => $this->input->post('notify_party'),
				'description_of_cargo' => $this->input->post('description_of_cargo'),
				'gross_weight' => $this->input->post('gross_weight'),
				'port_of_loading' => $this->input->post('port_of_loading'),
				'port_of_discharging' => $this->input->post('port_of_discharging'),
				'vessel_name' => $this->input->post('vessel_name'),
				'etd' => $this->input->post('etd'),
				'term' => $this->input->post('term'),
				'remark_special' => $this->input->post('remark_special')

				// 'Student_Address' => $this->input->post('daddress')
				);
				//Transfering data to Model
				$this->Model_request->form_insert($data_request);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				// $this->load->view('insert_view', $data);
			
			$this->load->view('user_view/success',$data);
	}

	public function setting(){
			$data['tittle']='Setting - Shipping Instruction - Kemendag RI';
			$data['page']='Account Setting';
			$data['user_id']=$this->session->userdata('user_id');
			$user_id=$this->session->userdata('user_id');
			$this->load->model('Model_account');
			
			

			$data['data_account']=$this->Model_account->get_account($user_id);
			$this->load->view('user_view/setting',$data);
	}

	// public function editaccount($request_id){
	// 		$data['tittle']='Setting - Shipping Instruction - Kemendag RI';
	// 		$this->load->model('Model_request');
	// 		$data['page']='Account Setting'; 
			
	// 		// $d['username']=$this->session->userdata('username');
	// 		$data['data_request']=$this->Model_request->get_details($request_id);
			
	// 		// $d['username']=$this->session->userdata('username');
	// 		$this->load->view('user_view/edit_account',$data);
	// }

	




	public function test(){
		$data['tittle']='Success - Shipping Instruction - Kemendag RI';
		$data['message'] = 'Your request Inserted Successfully and We will review!';
		$this->load->view('user_view/ok',$data);
	}


	

	

	
	
}
