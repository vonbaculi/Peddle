<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('Login_model');  
		$this->load->model('Gen_crud_model');
		$this->load->model('Product_model');       
		$this->load->model('Shopping_cart_model');
		$this->load->model('market_model'); 
    }
	public function index()
	{
		$data["product_data"] = $this->Product_model->market_product();
		$this->load->view('pages/partner/product_management_view',$data);
	
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
		$data["product_data"] = $this->Product_model->market_product();
		$this->load->view('pages/partner/product_management_view',$data);
	}
	//for viewing partner views
	public function product_management(){
		//call model to fetch all users data
		$data["product_data"] = $this->Product_model->market_product();
		//;load wiew for user management 	
		$this->load->view('pages/partner/product_management_view',$data);
	}
	public function category_management(){
		//call model to fetch all users data
		$data['catdata'] = $this->Shopping_cart_model->market_category();
		//;load wiew for user management
		$this->load->view('pages/partner/category_management_view',$data);
	}
	public function order_details(){
		//call model to fetch all users data
		$data['order'] = $this->Shopping_cart_model->market_orders();
		//;load wiew for user management
		$this->load->view('pages/partner/order_details',$data);
	}
	public function notification(){
		$data["notif"] = $this->Gen_crud_model->get_notif();
		$this->load->view('pages/partner/notification',$data);
		}
	//functions for partners		
	
	public function order_status(){
		//call model 
		$this->Gen_crud_model->order_status();
		//load add user view
		$data['order'] = $this->Shopping_cart_model->market_orders();
		$this->toastr->info('Status Updated');
		redirect('partner/dashboard/order_details','refresh');
	}
	public function delivery(){
		//call model 
		$this->Gen_crud_model->delivery();
		//load add user view
		$data['order'] = $this->Shopping_cart_model->market_orders();
		//;load wiew for user management
		$this->load->view('pages/partner/order_details',$data);
	}
	public function add_category(){
		//call model 
		$this->Gen_crud_model->new_category();

		$this->toastr->info('New Category Added');
		redirect('partner/dashboard/category_management','refresh');
	}
	public function delete_category($id){
		//call model 
		$this->Gen_crud_model->delete_category($id);

		$this->toastr->info('Category Deleted');
		redirect('partner/dashboard/category_management','refresh');
	}
	//Product view or market functions
	public function add_product(){
		//call model to add user to the database
		//call model to add user to the database
		$this->Gen_crud_model->insert_new_product();
		//load add user view
		redirect('partner/dashboard/product_management','refresh');
	
	}
	public function delete_product($id){
		//call model 
		$this->Gen_crud_model->delete_product($id);
		//load add user view
		$this->toastr->error('Product Deleted');
		redirect('partner/dashboard/product_management','refresh');
	}
	function pro_update(){
		//call model 
		$this->Gen_crud_model->pro_update();
		//load add user view
		$this->toastr->error('Product Updated');
		redirect('partner/dashboard/product_management','refresh');
	}
	public function billing(){
		//call model to add user to the database
		$this->Gen_crud_model->billing();

		//load wiew for user management
	}
	public function pro_status(){
		$this->Gen_crud_model->pro_status();
		//load add user view
		$this->toastr->info('Status Updated');
		redirect('partner/dashboard/product_management','refresh');
}
	public function message(){
		$role = $this->input->post('role');
		if ($role == 'Admin'){
			$this->Gen_crud_model->get_all_admin();
			$this->toastr->success('Message Sent');
			redirect('partner/dashboard/notification','refresh');
		}
		elseif ($role == 'Rider'){
			$this->Gen_crud_model->get_all_rider();
			$this->toastr->success('Message Sent');
			redirect('partner/dashboard/notification','refresh');
		}
		else{
			$this->Gen_crud_model->get_all_rider();
			$this->Gen_crud_model->get_all_market();
			$this->toastr->success('Message Sent');
			redirect('partner/dashboard/notification','refresh');
		}
		}
	public function view_order($id,$date){
		//call model to fetch all users data

		$data['view_data'] = $this->Gen_crud_model->view_acc($id);
		$data['pending_order'] = $this->Gen_crud_model->pending_order($id,$date);
	
		//;load wiew for user management
		$this->load->view('pages/partner/view_order',$data);
	}
}

 