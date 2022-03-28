<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart_model extends CI_Model{
 
    public function get_all_product(){
        $result=$this->db->get('product_tb');
        return $result;
    }
    public function get_all_category(){
        $this->db->select('*');
        $this->db->from('category_tb');
        $query = $this->db->get();
        return $query->result();
        }
    public function get_all_order(){
        $this->db->select('*');
       // $this->db->from('order_tb');
        $this->db->from('cart_tb');
        //$this->db->join('cart_tb', 'cart_tb.user_id = order_tb.account_id');
        $this->db->join('order_tb', 'order_tb.account_id     = cart_tb.user_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function rider_order(){
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->where('status_val !=', 'Accept');
        $this->db->where('status', 'Ship');

        $this->db->group_by(array('status','order_id','total_order','order_tb.market_name','account_id'));



        $query = $this->db->get();
        return $query->result();
    }
    public function delivery(){
        $this->db->select('*');
        $this->db->from('order_tb');
       
        $this->db->where('rider_id', $this->session->userdata('account_id'));
        $this->db->where('status_val', 'Accept');
        $this->db->where('status', 'Ship');
        $this->db->group_by(array('status','order_id','total_order','order_tb.market_name','account_id'));


        $query = $this->db->get();
        return $query->result();
    }
    public function get_cart(){
        $this->db->select('*');
       // $this->db->from('order_tb');
        $this->db->from('order_tb');
        $this->db->where('account_id',$this->session->userdata('account_id'));
        $this->db->where('total_order',$this->cart->total());
        $this->db->group_by(array('order_tb.product_name','order_tb.quantity','order_tb.product_price','order_tb.market_name','total_order'));

        $query = $this->db->get();
        return $query->result();
    }


    public function get_invoice(){

        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->where('account_id',$this->session->userdata('account_id'));
        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            $order_id = $row->order_id;   
        }

            $this->db->select('*');
            $this->db->from('order_tb');
            $this->db->where('account_id',$this->session->userdata('account_id'));
            $this->db->where('order_id',$order_id);
            $query = $this->db->get();
            return $query->result();
    }
            
            
    ###########DASHBOARD NG MARKET##################
    public function market_category(){
        $this->db->select('*');
        $this->db->from('category_tb');
        $this->db->where('market',$this->session->userdata('market'));
        $query = $this->db->get();
        return $query->result();
        }
    public function market_orders(){
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->where('market_name',$this->session->userdata('market') );

        $query = $this->db->get();
        return $query->result();

        }

}