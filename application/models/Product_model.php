<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();  
              
    }

    public function get_product_data($distance){
        //query database for user data (*management)
        sort($distance);
          
        foreach ($distance as $row){
            $this->db->select('*');
            $this->db->from('product_tb');
            $this->db->where('(market_name = "'.$row[1].'" or market_name = "'.$row[1].'"  )');
            $this->db->order_by('likes','ASC');
            $query = $this->db->get();
            $query1[] = $query->result();
        

        }
        //https://stackoverflow.com/questions/6785355/convert-multidimensional-array-into-single-array
        $arraySingle = call_user_func_array('array_merge', $query1);


        return $arraySingle;
        }
    public function get_product_data_filter($type){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('product_type',$type);
        $this->db->order_by('likes','DESC');
        $query = $this->db->get();
        return $query->result();
        }
    public function get_recipe_data($name){
        $this->db->select('*');
        $this->db->from('recipe_tb');
        $this->db->where('recipe_name',$name);
        $query = $this->db->get();
        return $query->result();
    }
    public function recipe(){
        $this->db->select('*');
        $this->db->from('recipe_tb');
        $query = $this->db->get();
        return $query->result();
    }
    public function ingredient($name){
        $this->db->select('ingredient');
        $this->db->from('recipe_tb');
        $this->db->where('recipe_name',$name);
        $query = $this->db->get();
        foreach ($query->result() as $row){

            $ing = $row;
        }
        $data = explode(" " ,$ing->ingredient );
        return $data;
    }
    public function ingredient_cart($ingredient){

        foreach($ingredient as $row){
            $this->db->select('*');
            $this->db->from('product_tb');
            $this->db->where('product_name', $row);
            $query = $this->db->get();
            $array []= $query->result();
            
        }
            return $array;
    }
    public function getCategory(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('category_tb');
        $this->db->group_by(array('product_type'));
        $query = $this->db->get();
        return $query->result();
        }
    public function category(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('category_tb');
        $query = $this->db->get();
        return $query->result();
        }
        #############################
    public function market_product(){
        $market=$this->session->userdata('market');
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('market_name',$market);
        $query = $this->db->get();
        return $query->result();
        }
    public function market_category(){
        $market=$this->session->userdata('market');
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('market_name',$market);
        $query = $this->db->get();
        return $query->result();
        }
    public function market_orders(){
        $market=$this->session->userdata('market');
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('market_name',$market);
        $query = $this->db->get();
        return $query->result();
        }
    public function likes(){
        $product_id = $this->input->post('product_id');
        $likes = $this->input->post('likes');
        $likes = $likes + 1 ;
        $data_pro = array(
            'likes' => $likes ,
        );
        $this->db->update('product_tb',$data_pro,array('product_id'=>$product_id)); 
        $this->toastr->info('Liked');

        }
    public function recipe_likes(){
        $product_id = $this->input->post('product_id');
        $likes = $this->input->post('likes');
        $likes = $likes + 1 ;
        $data_pro = array(
            'likes' => $likes ,
        );
        $this->db->update('product_tb',$data_pro,array('product_id'=>$product_id)); 
        $this->toastr->info('Liked');

        }
    public function search(){

        $search = $this->input->post('search');
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->like('product_name',$search);
        $this->db->order_by('likes','DESC');
        $query = $this->db->get();
        return $query->result();
        }
    
}
