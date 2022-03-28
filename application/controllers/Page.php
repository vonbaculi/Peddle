<?php

class Page extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Product_model');
        $this->load->model('Product_model');
        $this->load->model('Gen_crud_model');          
    }

    public function Contact()
	{
        
        $data["market_data"] = $this->Gen_crud_model->get_market_data();
        $this->load->view('pages/contact',$data);
    }
    public function recipe()
	{
        $this->load->model('Product_model');
        $this->load->model('Gen_crud_model');       
       
        $data["cat_data"] = $this->Product_model->getCategory();
        $data["recipe"] = $this->Product_model->recipe();
		$this->load->view('pages/recipe',$data);
    }
    public function Cart()
	{
		$this->load->view('pages/cart');
    }
    public function Blog()
	{
		$this->load->view('pages/blog');
    }
    public function Checkout()
	{
        $this->load->library('toastr');
        $this->load->view('pages/checkout');
    }
    public function About()
	{
        $this->load->view('pages/about');
    }
    public function upload_form()
	{
        $this->load->view('pages/upload_form');
    }
    public function recipe1()
	{
       
        $data["cat_data"] = $this->Product_model->getCategory();
        $data["recipe"] = $this->Gen_crud_model->recipe();
        $this->load->view('pages/recipe');
    }
    public function invoice()
	{
        redirect('shopping_cart/check');
    }
    public function terms()
	{
        $this->load->view('pages/terms');
    }
    public function test()
	{
        $data["market_data"] = $this->Gen_crud_model->get_market_data();
        $this->load->view('pages/test',$data);
    }
} 