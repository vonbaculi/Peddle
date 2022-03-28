<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		$this->load->model('Product_model');       
    }
#view products from data base
    public function apply_rider(){
    $this->load->view('pages/apply_rider');
    }

    public function rider_request(){
        //query database to insert new user 
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/user_files/';
        $config['allowed_types']        = 'png|jpeg|jpg';
        $config['max_size']             = 10000;
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                var_dump( $this->upload->display_errors());
                //$this->load->view('pages/admin/product_management_view', $error);
        }
        else
        {                
                $data = array('upload_data' => $this->upload->data());
                $file_name = $this->upload->data('file_name');
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $email = $this->input->post('email');
                $number = $this->input->post('number');
                $vehicle = $this->input->post('vehicle');
                $near_market = $this->input->post('near_market');
                $role = $this->input->post('role');

        //create array from the obtained data 
        $data_acc = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'number' => $number,
            'vehicle' => $vehicle,
            'near_market' => $near_market,
            'role' => $role,
            'license' => $file_name,


        );
        //insert to the database 
        $this->db->insert('rider_app_tb',$data_acc); 
        $this->load->view('pages/rider_success');   
        }
        } 
    
###########################################################################################################
    public function apply_market(){
        $this->load->view('pages/apply_market');
        }	

    public function market_request(){
        //query database to insert new user 
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/user_files/';
        $config['allowed_types']        = 'png|jpeg|jpg';
        $config['max_size']             = 10000;
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                var_dump( $this->upload->display_errors());
                //$this->load->view('pages/admin/product_management_view', $error);
        }
        else
        {                
                $data = array('upload_data' => $this->upload->data());
                $file_name = $this->upload->data('file_name');
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $address = $this->input->post('address');
                $contact_number = $this->input->post('contact_number');
                $role = $this->input->post('role');
                $market = $this->input->post('market');
        //create array from the obtained data 
        $data_acc = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'role' => $role,
            'market' => $market,
            'address' => $address,
            'contact_number' => $contact_number,
            'acc_img' => $file_name,

            

        );
        //insert to the database 
        $this->db->insert('account_tb',$data_acc);    
        $this->load->view('pages/market_success');
        }
        } 
}
