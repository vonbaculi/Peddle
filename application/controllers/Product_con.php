<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_con extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Product_model');     
        $this->load->model('Gen_crud_model');     

    }
#view products from data base
    public function Shop(){
        $data["nearest"] = $this->get_market_distance();
        $data["product_data"] = $this->Product_model->get_product_data( $data["nearest"]);
        $data["cat_data"] = $this->Product_model->getCategory();
        $this->load->view('pages/shop',$data);       
    }
    public function Shop_filter($type){
        $data["product_data"] = $this->Product_model->get_product_data_filter($type);
        if (count($data["product_data"]) ==0 ){
            $this->toastr->error('No Results have been found please try again');
            redirect('product_con/Shop','refresh');
        }
        else{
            $data["product_data"] = $this->Product_model->get_product_data_filter($type);
            $data["cat_data"] = $this->Product_model->getCategory();
            $this->load->view('pages/shop',$data);
            }        
    }
    public function recipe()
	{
        $this->load->model('Product_model');
        $this->load->model('Gen_crud_model');       
       
        $data["cat_data"] = $this->Product_model->getCategory();
        $data["recipe"] = $this->Product_model->recipe();
		$this->load->view('pages/recipe',$data);
    }
    public function single_recipe($name){
        $data["single_recipe"] = $this->Product_model->get_recipe_data($name);
        $data["recipe"] = $this->Product_model->recipe();
        $data["ingredient"] = $this->Product_model->ingredient($name);
        $this->load->view('pages/single_recipe',$data);
        }	
    public function likes($likes,$product_id){
        $this->Product_model->likes($likes,$product_id);
        $data["product_data"] = $this->Product_model->get_product_data();
        $data["cat_data"] = $this->Product_model->getCategory();
        $this->load->view('pages/shop',$data);
    }
    public function search(){
        $data["product_data"] = $this->Product_model->search();
        if (count($data["product_data"]) ==0 ){
            $this->toastr->error('No Results have been found please try again');
            redirect('product_con/Shop','refresh');
        }
        else{
        $data["product_data"] = $this->Product_model->search();
        $data["cat_data"] = $this->Product_model->getCategory();
        redirect('product_con/Shop','refresh');
    }
        }
    public function add_cart($name){
        $data["ingredient"] = $this->Product_model->ingredient($name);
        $data["ingredient_cart"] = $this->Product_model->ingredient_cart($data["ingredient"]);
        foreach( $data["ingredient_cart"] as $row) {
            if (empty($row) == true){
                $err[] = $row;
            }
            else{
                $wow[] = $row;
            }
        }
        foreach( $wow as $row) {
            $data = array(
            'product_id' => $row[0]->product_id, 
            'product_name' => $row[0]->product_name, 
            'product_price' => $row[0]->product_price, 
            'quantity' => 1, 
            'market' => $row[0]->market_name, 
            'user_id' => $this->session->userdata('account_id'),
            'total' => $this->cart->total(), 
            'per' => $row[0]->per, 
            );
            $this->cart->insert($data);
        }
     
        $this->toastr->info('Ingredients added to cart');
        redirect('Page/cart','refresh');
        
   
    }
    public function get_market_distance(){
       $market_data = $this->Gen_crud_model->market_location();
        foreach ($market_data as $row){

            //$loc []= [ $row->market_name [] = [$row->longg,$row->longg] ];
            $theta = $this->session->userdata('long') - $row->longg;
            $dist = sin(deg2rad($this->session->userdata('lat'))) * sin(deg2rad($row->lat)) +  cos(deg2rad($this->session->userdata('lat'))) * cos(deg2rad($row->lat)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $km = $dist * 60 * 1.1515 * 1.609344;
            $loc [] = [$km ,$row->market_name ] ;    
        
        }
        
            return $loc;

    }
}
