<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market_con extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Market_model'); 
        $this->load->model('Product_model');       
      
    }
#view products from data base
    public function Market(){
    $data["market_data"] = $this->Market_model->get_market_data();
    $this->load->view('pages/market',$data);
    }	



    public function Single_Market($id,$market_name){
        $data["single_market"] = $this->Market_model->get_single_market_data($id);
        $data["category_data"] = $this->Market_model->get_category_data($market_name);
        $data["distance"] = $this->vincentyGreatCircleDistance($id,$market_name);
        $this->load->view('pages/single_market',$data);
        }	



    public function Market_Products($product_type,$market_name){

        $data["Market_Products"] = $this->Market_model->Market_Products($product_type,$market_name);
        $data["cat_data"] = $this->Product_model->getCategory();

        $this->load->view('pages/single_shop',$data);
        }	
    public function Market_Products_filter($type){
        $data["cat_data"] = $this->Product_model->getCategory();
        $data["Market_Products"] = $this->Market_model->Market_Products($product_type,$market_name);

        $this->load->view('pages/single_shop',$data);
        
    }

        
    public function rating($rating,$id,$market_name){
        $this->Market_model->rating($rating,$id);
        $data["single_market"] = $this->Market_model->get_single_market_data($id);
        $data["category_data"] = $this->Market_model->get_category_data($market_name);
        $data["distance"] = $this->vincentyGreatCircleDistance($id,$market_name);

        $this->load->view('pages/single_market',$data);
    }
    public  function vincentyGreatCircleDistance($id,$market_name)
    {
    // convert from degrees to radians
    $this->db->select('*');
    $this->db->from('market_tb');
    $this->db->where('market_id',$id);
    $this->db->where('market_name',$market_name);
    $query = $this->db->get();
    $result= $query->result();
   

    $theta = $this->session->userdata('long') - $result[0]->longg;
    $dist = sin(deg2rad($this->session->userdata('lat'))) * sin(deg2rad($result[0]->lat)) +  cos(deg2rad($this->session->userdata('lat'))) * cos(deg2rad($result[0]->lat)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper('K');
  
    if ($unit == "K") {
        return ($miles * 1.609344);
        
    } else if ($unit == "N") {
        return ($miles * 0.8684);
    } else {
        return $miles;
    }
    }

    public function get_market_distance(){
        foreach ($market_data as $row){

            //$loc []= [ $row->market_name [] = [$row->longg,$row->longg] ];
            $theta = $this->session->userdata('long') - $row->longg;
            $dist = sin(deg2rad($this->session->userdata('lat'))) * sin(deg2rad($row->lat)) +  cos(deg2rad($this->session->userdata('lat'))) * cos(deg2rad($row->lat)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $km = $dist * 60 * 1.1515 * 1.609344;
            $loc [] = [$km ,$row->market_name ] ;    
        
        }
        
            return min($loc);
    }
    
    
    
}
