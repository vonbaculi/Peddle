<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('Login_model');  
		$this->load->model('Gen_crud_model');
		$this->load->model('Product_model');       
		$this->load->model('Shopping_cart_model'); 
    }
	public function index()
	{
		
		$data['rider_order'] = $this->Shopping_cart_model->rider_order();
		//;load wiew for user management
		$this->load->view('pages/rider/rider',$data);
	
	}
	public function logout(){
		$this->session->set_userdata('username',FALSE);
		$this->session->sess_destroy();
		$this->cart->destroy(); 

		if (ini_get('session.use_cookies')){
			$params=session_get_cookie_params();
			setcookie(session_name(),'',time()-4200,
			$params['path'], $params['domain'],
			$params['secure'], $params['httponly']
		);
		}
		$data["product_data"] = $this->Product_model->get_product_data();
		$this->load->view('pages/landing_page_view',$data);
	}
	//for viewing rider views
	public function delivery(){
		//call model to fetch all users data
		$data['delivery'] = $this->Shopping_cart_model->delivery();
		//;load wiew for user management
		$this->load->view('pages/rider/delivery',$data);
	}
	public function category_management(){
		//call model to fetch all users data
		$data['catdata'] = $this->Shopping_cart_model->get_all_category();
		//;load wiew for user management
		$this->load->view('pages/rider/category_management_view',$data);
	}
	public function order_details(){
		//call model to fetch all users data

		$data['rider_order'] = $this->Shopping_cart_model->rider_order();
		//;load wiew for user management
		$this->load->view('pages/rider/rider',$data);
	}
	public function view_order($id,$date){
		//call model to fetch all users data

		$data['view_data'] = $this->Gen_crud_model->view_acc($id);
		$data['pending_order'] = $this->Gen_crud_model->pending_order($id,$date);
	
		//;load wiew for user management
		$this->load->view('pages/rider/view_order',$data);
	}

	public function rider_history(){
		$id = $this->session->userdata('account_id');
		$data["rider_data"] = $this->Gen_crud_model->view_acc($id);
		$data["rider_history"] = $this->Gen_crud_model->rider_history($id);

		//;load wiew for user management 
		$this->load->view('pages/rider/rider_history',$data);
	}
	public function maps(){
		$data["market_data"] = $this->Gen_crud_model->get_market_data();


		//;load wiew for user management 
		$this->load->view('pages/rider/maps',$data);
	}
	public function notification(){
		$data["notif"] = $this->Gen_crud_model->get_notif();
		$this->load->view('pages/rider/notification',$data);
		}
	//functions for riders		
	
 
	
	public function accept(){
		//call model 
		$this->Gen_crud_model->accept();
		//load add user view
		$data['rider_order'] = $this->Shopping_cart_model->rider_order();
		//;load wiew for user management
		$this->load->view('pages/rider/rider',$data);
	}
	public function cancel($order_id){
		//call model 
		$this->Gen_crud_model->cancel($order_id);
		//load add user view
		$data['delivery'] = $this->Shopping_cart_model->delivery();
		//;load wiew for user management
		$this->load->view('pages/rider/delivery',$data);
	}
	//Product view or market functions
	public function add_product(){
		//call model to add user to the database
		//call model to add user to the database
		$this->Gen_crud_model->insert_new_product();
		//load add user view
		$data["product_data"] = $this->Product_model->get_product_data();
		//load wiew for user management
		$this->load->view('pages/rider/product_management_view',$data);
	}
	public function delete_product($id){
		//call model 
		$this->Gen_crud_model->delete_product($id);
		//load add user view
		$data['product_data'] = $this->Product_model->get_product_data();
		//load wiew for user management
		$this->load->view('pages/rider/product_management_view',$data);
	}
	function payment_status(){
		//call model 
		$this->Gen_crud_model->payment_status();
		//load add user view
		$data['delivery'] = $this->Shopping_cart_model->delivery();
		//;load wiew for user management
		$this->load->view('pages/rider/delivery',$data);
	}
	public function billing(){
		//call model to add user to the database
		$this->Gen_crud_model->billing();

		//load wiew for user management
	}
	public function message(){
		$role = $this->input->post('role');
		if ($role == 'Admin'){
			$this->Gen_crud_model->get_all_admin();
			$this->toastr->success('Message Sent');
			redirect('rider/dashboard/notification','refresh');
		}
		elseif ($role == 'Partner'){
			$this->Gen_crud_model->get_all_rider();
			$this->toastr->success('Message Sent');
			redirect('rider/dashboard/notification','refresh');
		}
		else{
			$this->Gen_crud_model->get_all_rider();
			$this->Gen_crud_model->get_all_market();
			$this->toastr->success('Message Sent');
			redirect('rider/dashboard/notification','refresh');
		}
		}
}

 