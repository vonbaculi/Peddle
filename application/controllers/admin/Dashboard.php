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
		$data["users_data"] = $this->Gen_crud_model->get_all_users_data();
		$this->load->view('pages/admin/admin',$data);
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
	
		redirect('Home','refresh');
		}
	//for viewing admin views
	public function product_management(){
		//call model to fetch all users data
		$data["product_data"] = $this->Product_model->get_product_data();
		//;load wiew for user management 	
		$this->load->view('pages/admin/product_management_view',$data);
		}

	public function user_management(){
		//call model to fetch all users data
		$data["users_data"] = $this->Gen_crud_model->get_all_users_data();
		//;load wiew for user management 

		$this->load->view('pages/admin/user_management_view',$data);
		}

	public function partner_management(){
		//call model to fetch all users data

		$data["users_data"] = $this->Gen_crud_model->get_all_partner_data();
		//;load wiew for user management 
		$this->load->view('pages/admin/partner_management',$data);
		}
	
	public function rider_management(){
		//call model to fetch all users data

		$data["users_data"] = $this->Gen_crud_model->get_all_rider_data();
		//;load wiew for user management 
		$this->load->view('pages/admin/rider_management',$data);
		}
	
	public function market_management(){
		$data["market_data"] = $this->Gen_crud_model->get_market_data();
		$this->load->view('pages/admin/market_management',$data);
		}
	
	public function category_management(){
		$data['catdata'] = $this->Shopping_cart_model->get_all_category();
		$this->load->view('pages/admin/category_management_view',$data);
		}
	
	public function order_details(){
		$data['order'] = $this->Shopping_cart_model->get_all_order();
		$this->load->view('pages/admin/order_details',$data);
		}
	
	public function rider_app(){
		$data['rider_app'] = $this->Gen_crud_model->get_rider_app();
		$this->load->view('pages/admin/rider_app',$data);
		}
	
	public function market_app(){
		$data["users_data"] = $this->Gen_crud_model->get_market_app();
		$this->load->view('pages/admin/market_app',$data);
		}
	
	public function pending_acc(){
		$data["users_data"] = $this->Gen_crud_model->pending_acc();
		$this->load->view('pages/admin/pending_acc',$data);
		}
	
	public function reviews(){
		$data["reviews"] = $this->Gen_crud_model->reviews();
		$this->load->view('pages/admin/reviews',$data);
		}
	
	public function rider_payments($id){
		$data["rider_data"] = $this->Gen_crud_model->view_acc($id);
		$data["rider_history"] = $this->Gen_crud_model->rider_history($id);
		$this->load->view('pages/admin/payments',$data);
		}
	public function notification(){
		$data["notif"] = $this->Gen_crud_model->get_notif();
		$this->load->view('pages/admin/notification',$data);
		}
###################################################################	
	//adding functions for admins
	public function adduser(){
		//call model to add user to the database
		$this->Gen_crud_model->insert_new_user();
		redirect('admin/dashboard/user_management','refresh');
		}
	
	public function addpartner(){
		$this->Gen_crud_model->insert_new_partner();
		$this->toastr->info('New Partner Added');
		redirect('admin/dashboard/partner_management','refresh');
		}
	
	public function add_rider(){
		$this->Gen_crud_model->insert_new_rider();
		$this->toastr->info('New Rider Added');
		redirect('admin/dashboard/rider_management','refresh');
		}
	
	public function delete_user($id){
		$this->Gen_crud_model->deleteuser($id);
		$this->toastr->error('Account Deleted');
		redirect('admin/dashboard/user_management','refresh');
		}
	public function delete_rider($id){
		$this->Gen_crud_model->deleteuser($id);
		$this->toastr->error('Account Deleted');
		redirect('admin/dashboard/rider_management','refresh');
		}
	public function delete_partner($id){
		$this->Gen_crud_model->deleteuser($id);
		$this->toastr->error('Account Deleted');
		redirect('admin/dashboard/partner_management','refresh');
		}

	//update Fucntions for the admin
	function update(){
		$this->Gen_crud_model->update();
		redirect('admin/dashboard/user_management','refresh');
		}
	
	function update_rider(){
		$this->Gen_crud_model->update();
		$this->toastr->info('Account Updated');
		redirect('admin/dashboard/rider_management','refresh');
		}
	
	function update_partner(){
		$this->Gen_crud_model->update();
		$this->toastr->info('Account Updated');
		redirect('admin/dashboard/partner_management','refresh');
		}
	
	function status(){
		$this->Gen_crud_model->status();
		$this->toastr->info('Staus Updated');
		redirect('admin/dashboard/user_management','refresh');
		}
		
	public function add_product(){
		$this->Gen_crud_model->do_upload();
		redirect('admin/dashboard/product_management','refresh');
		}
	
	public function delete_product($id){
		$this->db->delete('product_tb',array('product_id'=>$id));
		$this->toastr->info('Product Deleted');
		redirect('admin/dashboard/product_management','refresh');
		}
	
	function pro_update(){
		$this->Gen_crud_model->pro_update();
		$data["product_data"] = $this->Product_model->get_product_data();
		$this->toastr->info('Product Updated');
		redirect('admin/dashboard/product_management','refresh');
		}
	
	function pro_status(){
		//call model 
		$this->Gen_crud_model->pro_status();
		$data["product_data"] = $this->Product_model->get_product_data();
		redirect('admin/dashboard/product_management','refresh');
		}
	
	public function billing(){
		//call model to add user to the database
		$this->Gen_crud_model->billing();
		$data["product_data"] = $this->Product_model->get_product_data();
		$this->load->view('pages/landing_page_view',$data);
		}
	
	public function order_status(){
			//call model 
			$this->Gen_crud_model->order_status();
			//load add user view
			$data['order'] = $this->Shopping_cart_model->get_all_order();
			//;load wiew for user management
			$this->load->view('pages/admin/order_details',$data);
		}

	public function add_category(){
		//call model 
		$this->Gen_crud_model->add_category();
		//load add user view
		$data['order'] = $this->Shopping_cart_model->get_all_order();
		//;load wiew for user management
		$this->toastr->info('New Category Added');
		$this->load->view('pages/admin/order_details',$data);
	}
###################################################################

public function add_market(){
	$this->Gen_crud_model->add_market();
	$data["market_data"] = $this->Gen_crud_model->get_market_data();
	$this->toastr->info('New Market Added');
	$this->load->view('pages/admin/market_management',$data);
	}
public function delete_market($id){
	$this->db->delete('market_tb',array('market_id'=>$id));
	$this->toastr->info('Market Deleted');
	redirect('admin/dashboard/market_management','refresh');
	}
public function market_update(){
	$this->Gen_crud_model->market_update();
	redirect('admin/dashboard/market_management','refresh');
}
	

#######################################################################
public function delete_application($id){
	//call model 
	$this->Gen_crud_model->delete_application($id);
	//load add user view
	$data['rider_app'] = $this->Gen_crud_model->get_rider_app();
		//;load wiew for user management
		$this->load->view('pages/admin/rider_app',$data);
	}
public function delete_app($id){
	$this->Gen_crud_model->delete_app($id);
	$this->toastr->error('Application Deleted');
	redirect('admin/dashboard/market_app','refresh');
	}	
public function view_acc($id){
	//call model 
	//load add user viewview_history
	$data['view_data'] = $this->Gen_crud_model->view_acc($id);
	$data['history_data'] = $this->Gen_crud_model->view_history($id);
	$data["reviews"] = $this->Gen_crud_model->reviews_view($id);
		//;load wiew for user management
		$this->load->view('pages/admin/view_acc',$data);
	}
	

public function contact(){

	$this->Gen_crud_model->contact();
	$this->toastr->success('Review Submitted');
    redirect('Page/Contact');

	}
public function message(){
	$role = $this->input->post('role');
	if ($role == 'Partner'){
		$this->Gen_crud_model->get_all_market();
		$this->toastr->success('Message Sent');
		redirect('admin/dashboard/notification','refresh');
	}
	elseif ($role == 'Rider'){
		$this->Gen_crud_model->get_all_rider();
		$this->toastr->success('Message Sent');
		redirect('admin/dashboard/notification','refresh');
	}
	else{
		$this->Gen_crud_model->get_all_rider();
		$this->Gen_crud_model->get_all_market();
		$this->toastr->success('Message Sent');
		redirect('admin/dashboard/notification','refresh');
	}
	}
	
}
	