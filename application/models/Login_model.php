<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();        
    }

    public function checkuser(){
        //get input with post
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->db->select('*');
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $this->db->where('status','Approved');        
        $query = $this->db->get('account_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
            $ip = $_SERVER['REMOTE_ADDR'] ;
            $loc = unserialize((file_get_contents('http://ip-api.com/php/'.$ip)));
            $lng = $loc['lon'];
            $lat = $loc['lat'];

                $data = array(
                    'lat' => $lat,
                    'lng' => $lng,
                );
                $this->db->update('account_tb',$data,array('account_id'=>$query->result()[0]->account_id)); 
            
    



            //get user session data and set
            foreach($query->result() as $row){
                $user_info= array (
                    'firstname' => $row->firstname,
                    'username' => $row->username,
                    'password' => $row->password,
                    'account_id'=> $row->account_id,
                    'role' => $row->role,
                    'market' => $row->market,
                    'acc_img' => $row->acc_img,
                    'email' => $row->email,
                    'long' =>$lng ,
                    'lat' =>  $lat,
                    );
            }
            //set session variable
            $this->session->set_userdata($user_info);
            
            //redirect
            if($user_info['role']=="admin"){
                redirect('admin/dashboard');
            }
            if($user_info['role']=="partner"){
                redirect('partner/dashboard');
            }
            if($user_info['role']=="rider"){
                redirect('rider/dashboard');
            }
            elseif($user_info['role']=="user"){
                redirect('Home');
            }   
            
        }
        else{
            //set session flash data for error credentials
            $this->session->set_flashdata('info','Error in username or password!');
            redirect('login');
        }
    }

    public function getUserData(){
        //query here
        $query = $this->db->query('SELECT * FROM account_tb');
        return $query->result();
    }




    public function do_upload_user(){
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/user_files/';
        $config['allowed_types']        = 'png|jpeg|jpg|pdf';
        $config['max_size']             = 20000;
    

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
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $status = $this->input->post('status');
                $role = $this->input->post('role');
                $email = $this->input->post('email');
                $contact_number = $this->input->post('contact_number');



        //create array from the obtained data 
        $data_acc = array(
            'username' => $username,
            'password' => $password,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'role' => $role,
            'status' => $status,
            'credentials' => $file_name,
            'email' => $email,
            'contact_number' => $contact_number,
        );
        //insert to the database 
        $this->db->insert('account_tb',$data_acc);    
        }
        } 

}
