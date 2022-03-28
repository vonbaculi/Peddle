<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model{
 
    function total_amo(){
        		$this->load->model('Product_model');       

    }
     
}