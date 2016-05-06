<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	function __construct(){
		parent::__construct();
			if(!$this->session->userdata('username'))
			{
				redirect('Admin/login');
			}
			$this->load->model('Model_backend');
	}

	public function dashboard(){
		$this->load->model('Model_backend');
		$data['title']='Admin Dashboard - Shipping Instruction';
		$data['row_user']=$this->Model_backend->getTotalRowAllUser();
		$data['row_req']=$this->Model_backend->getTotalRowRequest();
		$data['data_users']=$this->Model_backend->view_all_users();
		$this->load->view('Backend/head',$data);
		$this->load->view('Backend/dashboard',$data);
	}

	
	public function userlist(){
		$this->load->model('Model_backend');
		$data['data_request']=$this->Model_backend->view_all_users();
		$data['title']='User List - Shipping Instruction';
		$this->load->view('Backend/head',$data);
		$this->load->view('Backend/user-list',$data);
	}

	public function index(){
		$this->load->model('Model_backend');
		$data['data_request']=$this->Model_backend->view_all_request();
		$data['title']='Request List - Shipping Instruction';
		$this->load->view('Backend/head',$data);
		$this->load->view('Backend/requestlist',$data);
	}

	public function details($request_id){
		$this->load->model('Model_backend');
		
		$data['data_request']=$this->Model_backend->get_details($request_id);
		$data['title']='Request List - Shipping Instruction';
		// $this->load->view('Backend/footer',$d);
		$this->load->view('Backend/requestdetail',$data);
	}

	public function portlist(){
		
		
		$data['title']='Port List - Shipping Instruction';
		$this->load->view('Backend/head',$data);
		$this->load->view('Backend/portlist',$data);
	}

	function review($request_id){
		$this->load->model('Model_request');
		$this->Model_request->put_review($request_id);
		redirect('requestlist');

	}

	function approve($request_id){
		$this->load->model('Model_request');
		$this->Model_request->put_approve($request_id);

		$this->load->model('Model_approving');
		
		$data = array(
				'approved_id'=>mt_rand(),
				'request_id'=>$request_id,
				'approved_date'=>date('d/m/Y'),
				'operator_id'=>"898989",
				'si_number'=>$request_id."/PDN.4.3/".date('m')."/".date('Y'),
				'docpath'=>"si_instruction/".date('Y')."/"
				);
		$this->Model_approving->insert_data_approve($data);

		redirect('requestlist');

	}

	function send_document(){

	}

	function reject($request_id){
		$this->load->model('Model_request');
		$this->Model_request->put_reject($request_id);
		redirect('requestlist');

	}

	function send_pdf($request_id) {//Proses Create PDF and Send download link status;
		$this->load->model('Model_backend');
		$this->load->model('Model_approving');
		
		$data['data_request']=$this->Model_backend->get_details($request_id);
		$data['data_code']=$this->Model_approving->get_details_approve($request_id);
		$data['title']='Request List - Shipping Instruction';

		$this->load->model('Model_approving');
		
		$file_name="SI_".$request_id;
				 
        ob_start();
        
		$this->load->view('user_view/pdf/headpdf',$data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf403/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        //$pdf->SetDisplayMode('fullpage');
        $pdf->WriteHTML($html, isset($_GET['vuehtml']));
        $pdf->Output('si_doc_ok/SI_'.$request_id.'.pdf', 'F');

        $this->Model_approving->send_download_link($request_id);

        redirect('requestlist');
    }
	
	function test_pdf(){
		$this->load->view('user_view/pdf/headpdf');

	}
	
		
}
	