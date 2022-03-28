<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('Product_model');     
		$data["nearest"] = $this->get_market_distance();
  
		$data["product_data"] = $this->Product_model->get_product_data($data["nearest"]);
		$this->load->view('pages/landing_page_view',$data);
	}
	public function get_market_distance(){
		$this->load->model('Gen_crud_model');  
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
