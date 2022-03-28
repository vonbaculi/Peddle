<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();        
    }

    public function get_market_data(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('market_tb');
        $this->db->group_by(array('market_name'));
        $query = $this->db->get();
        return $query->result();
        }

    public function get_single_market_data($id){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('market_tb');
        $this->db->where('market_id',$id);
        $query = $this->db->get();
        return $query->result();
        }
    public function Market_Products($product_type,$market_name){
            //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('market_name',$market_name);
        $this->db->where('product_type',$product_type);
        $this->db->order_by('likes','ASC');


        $query = $this->db->get();
        return $query->result();
        }

    function get_all_product(){
        $result=$this->db->get('product_tb');
        return $result;
    }
    function get_category_data($market_name){
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('market_name',$market_name);
        $this->db->group_by(array('market_name','product_type'));

        $query = $this->db->get();
        return $query->result();
        }
    function get_all_order(){
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->join('cart_tb', 'cart_tb.user_id = order_tb.account_id');
        $query = $this->db->get();
        return $query->result();

        }
    function add_ratings($num){
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->where('ratings',$num++);
        $query = $this->db->get();
        return $query->result();
        
        }
    public function rating($rating,$id){
        $rating = $rating + 1 ;
        $data = array(
            'rating' => $rating ,
        );
        $this->db->update('market_tb',$data,array('market_id'=>$id)); 
        }
    }