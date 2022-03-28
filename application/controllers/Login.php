<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('Login_model');  
		$this->load->model('Product_model'); 
		$this->load->model('Shopping_cart_model');  
		$this->load->model('Gen_crud_model');  


		     
	}
	public function index()
	{
		if($this->session->userdata('role')){	
			if($this->session->userdata('role')=='admin'){

				$data["users_data"] = $this->Gen_crud_model->get_all_users_data();
				//;load wiew for user management 
				$this->load->view('pages/admin/admin',$data);
			
			}
			elseif($this->session->userdata('role')=='rider'){
				$data['rider_order'] = $this->Shopping_cart_model->rider_order();
				//;load wiew for user management
				$this->load->view('pages/rider/rider',$data);
			
			}
			elseif($this->session->userdata('role')=='partner'){
				$data["product_data"] = $this->Product_model->market_product();
				$this->load->view('pages/partner/product_management_view',$data);
			
			}
			else	
			{
				$this->session->set_userdata('username',FALSE);
				$this->session->sess_destroy();
				if (ini_get('session.use_cookies')){
					$params=session_get_cookie_params();
					setcookie(session_name(),'',time()-4200,
					$params['path'], $params['domain'],
					$params['secure'], $params['httponly']
				);
				}
				redirect('Home','refresh');
			}
		}
		else{
			$this->load->view('pages/login');
		}
	}
	public function validatelogin(){
		//call the function check user in the model..
		$data = $this->Login_model->checkuser();
	}
	public function getUserData(){
		//call model to give the user info
		$data = $this->Login_model->getAllUserData();
		print_r($data);
	}
	public function sign_up(){
		//call model to add user to the database
		//call model to add user to the database
		$this->Login_model->do_upload_user();
		$data["product_data"] = $this->Product_model->get_product_data();
		$this->load->view('pages/landing_page_view',$data);
	}
	
}
