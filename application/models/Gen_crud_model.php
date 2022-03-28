<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gen_crud_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();     
        $this->load->library('upload');
        $this->load->helper('url', 'form');	
        $this->load->library('form_validation');   
    }
    public function get_all_users_data(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        
        $this->db->where('status','Approved');
        $this->db->where('role !=','partner');
        $this->db->where('role !=','rider');


        $this->db->order_by('account_id','desc');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
        
        }
    public function get_all_partner_data(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('status','Approved');
        $this->db->where('role','partner');
        $this->db->order_by('account_id','desc');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
        
        }
    public function get_all_rider_data(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('status','Approved');
        $this->db->where('role','rider');
        $this->db->order_by('account_id','desc');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
        
        }
    public function get_market_data(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('market_tb');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
        
        }
    public function get_rider_app(){
        $this->db->select('*');
        $this->db->from('rider_app_tb');
        //$this->db->where('status','activate');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
       }
    public function get_market_app(){
        $this->db->select('*');
        $this->db->from('market_app_tb');
        //$this->db->where('status !=','Approved');
        //$this->db->where('role','partner');
        //$this->db->order_by('account_id','desc');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
    }
    public function pending_acc(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('status','Pending');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
        
        }
    public function get_notif(){
        //query database for user data (*management)
        $account_id = $this->session->userdata('account_id');
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->where('notifiable_id',$account_id);

        $query = $this->db->get();
        return $query->result();
        }
    public function get_all_admin(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('role','admin');
        $this->db->where('status','Approved');
        $query = $this->db->get();
    
        foreach($query->result() as $row){
            $new= array (
             
                'sender' => $this->session->userdata('firstname') ,
                'role'=> $this->session->userdata('role'),
                'notifiable_id'=> $row->account_id,
                'message'=> $this->input->post('message'),
                'seen'=> 'No',

                );
            $this->db->insert('notification',$new);
        }

        }
    public function get_all_market(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('role','partner');
        $this->db->where('status','Approved');
        $query = $this->db->get();
        foreach($query->result() as $row){
            $new= array (
                'sender' => $this->session->userdata('firstname') ,
                'role'=> $this->session->userdata('role'),
                'notifiable_id'=> $row->account_id,
                'message'=> $this->input->post('message'),
                'seen'=> 'No',

                );
            $this->db->insert('notification',$new);
        }
    }
    public function get_all_rider(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('role','rider');
        $this->db->where('status','Approved');
        $query = $this->db->get();
        foreach($query->result() as $row){
            $new= array (
                'sender' => $this->session->userdata('firstname') ,
                'role'=> $this->session->userdata('role'),
                'notifiable_id'=> $row->account_id,
                'message'=> $this->input->post('message'),
                'seen'=> 'No',

                );
            $this->db->insert('notification',$new);
        }
        }
    public function send_all(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('status','Approved');
        $query = $this->db->get();
        foreach($query->result() as $row){
            $new= array (
                'sender' => $this->session->userdata('firstname') ,
                'role'=> $this->session->userdata('role'),
                'notifiable_id'=> $row->account_id,
                'message'=> $this->input->post('message'),
                'seen'=> 'No',

                );
            $this->db->insert('notification',$new);
        }
    }
    public function insert_new_product(){
            $this->load->library('upload');     
            $config['upload_path']          = './assets/vegefoods/images/';
            $config['allowed_types']        = 'png|jpeg|jpg|pdf';
            $config['max_size']             = 3000;
    

            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('userfile'))
            {
                    //$error = array('error' => $this->upload->display_errors());
                    $this->toastr->error($this->upload->display_errors());
                    //$this->load->view('pages/admin/product_management_view', $error);
            }
            else
            {                
                    $data = array('upload_data' => $this->upload->data());
                        $file_name = $this->upload->data('file_name');
                        $product_name = $this->input->post('product_name');
                        $product_price = $this->input->post('product_price');
                        $product_type = $this->input->post('product_type');
                        $market = $this->input->post('market');
                        $per = $this->input->post('per');
                        $product_status = $this->input->post('product_status');
                        //create array from the obtained data 
                    
                        $data_pro = array(
                            'product_name' => $product_name,
                            'product_price' => $product_price,
                            'product_type' => $product_type,
                            'market_name' => $market,
                            'product_img' => $file_name,
                            'per' => $per,
                            'product_status' => $product_status,
                        );
                        //insert to the database 
                        $this->db->insert('product_tb',$data_pro); 
                        }
        } 

    public function insert_new_user(){
        //query database to insert new user 
        
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/user_files/';
        $config['allowed_types']        = 'png|jpeg|jpg|pdf';
        $config['max_size']             = 30000;
    

        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                $this->toastr->error($this->upload->display_errors());
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
                $address = $this->input->post('address');
                $contact_number = $this->input->post('contact_number');
                $email = $this->input->post('email');
                $role = $this->input->post('role');


        //create array from the obtained data 
        $data_acc = array(
            'username' => $username,
            'password' => $password,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'role' => $role,
            'address' => $address,
            'contact_number' => $contact_number,
            'email' => $email,
            'acc_img' => $file_name,




        );
        //insert to the database 
        $this->db->insert('account_tb',$data_acc);    
        $this->toastr->info('New User Added');

        }
        } 
        public function insert_new_partner(){
            //query database to insert new user 
            $this->load->library('upload');     
            $config['upload_path']          = './assets/vegefoods/user_files/';
            $config['allowed_types']        = 'png|jpeg|jpg|pdf';
            $config['max_size']             = 10000;
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('userfile'))
            {
                    //$error = array('error' => $this->upload->display_errors());
                    $this->toastr->error($this->upload->display_errors());
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
                    $address = $this->input->post('address');
                    $contact_number = $this->input->post('contact_number');
                    $role = $this->input->post('role');
                    $market = $this->input->post('market');
                    $email = $this->input->post('email');
            //create array from the obtained data 
            $data_acc = array(
                'username' => $username,
                'password' => $password,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'role' => $role,
                'market' => $market,
                'address' => $address,
                'contact_number' => $contact_number,
                'acc_img' => $file_name,
                'email' => $email,

            );
            //insert to the database 
            $this->db->insert('account_tb',$data_acc);    
            }
            } 
    public function insert_new_rider(){
        //query database to insert new user 
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/user_files/';
        $config['allowed_types']        = 'png|jpeg|jpg|pdf';
        $config['max_size']             = 10000;
    

        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                $this->toastr->error($this->upload->display_errors());
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
                $address = $this->input->post('address');
                $contact_number = $this->input->post('contact_number');
                $role = $this->input->post('role');
                $status = $this->input->post('status');
                $email = $this->input->post('email');
        //create array from the obtained data 
        $data_acc = array(
            'username' => $username,
            'password' => $password,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'acc_img' => $file_name,
            'role' => $role,
            'status' => $status,
            'contact_number' => $contact_number,
            'address' => $address,
            'email' => $email,

        );
        //insert to the database 
        $this->db->insert('account_tb',$data_acc);    
        }
        } 
    public function deleteuser($id){
        //query to delete user
        $this->db->delete('account_tb',array('account_id'=>$id));
        }
    public function delete_application($id){
        //query to delete user
        $this->db->delete('rider_app_tb',array('app_id'=>$id));
        }
    public function delete_product($id){
        //query to delete user
        $this->db->delete('product_tb',array('product_id'=>$id));
        }
    public function delete_app($id){
        $this->db->delete('market_app_tb',array('app_id'=>$id));

    }
    public function pro_update(){
        //query database for user data (*management);
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/images/';
        $config['allowed_types']        = 'png|jpeg|jpg|pdf';
        $config['max_size']             = 10000;
 

        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                $this->toastr->error($this->upload->display_errors());
                //$this->load->view('pages/admin/product_management_view', $error);
        }
        else
        {                
                $data = array('upload_data' => $this->upload->data());
                    $file_name = $this->upload->data('file_name');
                    $product_name = $this->input->post('product_name');
                    $product_id = $this->input->post('product_id');
                    $product_price = $this->input->post('product_price');
                    $product_type = $this->input->post('product_type');
                    $product_type = $this->input->post('product_type');
                    $market = $this->input->post('market');
                    $per = $this->input->post('per');

                    $product_img = $file_name;

                    //create array from the obtained data 
                 
                    $data_pro = array(
                        'product_name' => $product_name,
                        'product_price' => $product_price,
                        'product_type' => $product_type,
                        'product_img' => $product_img,
                        'market_name' => $market,
                        'per' => $per,

                    );
                    //insert to the database 
                    $this->db->update('product_tb',$data_pro,array('product_id'=>$product_id));
                    $this->toastr->info('Status Updated');

                }
    } 
    public function status(){
        $account_id = $this->input->post('account_id');
        $status = $this->input->post('status');
        $data = array(
            'status' => $status,
        );
        $this->db->update('account_tb',$data,array('account_id'=>$account_id)); 
    }

    public function pro_status(){
        $product_id = $this->input->post('product_id');
        $status = $this->input->post('status');
        $data = array(
            'product_status' => $status,
        );
        $this->db->update('product_tb',$data,array('product_id'=>$product_id)); 
    }
    public function order_status(){
        $order_id = $this->input->post('order_id');
        $status = $this->input->post('status');
        $data = array(
            'status' => $status,
            'status_val' => 'Waiting',
        );
        $this->db->update('order_tb',$data,array('order_id'=>$order_id)); 
    }
    public function delete_order($date){
        $date2 = str_replace('%20',' ', $date);
        $this->db->delete('order_tb',array('date'=>$date2));
    }
    public function accept(){
        $order_id = $this->input->post('order_id');
        $status = $this->input->post('status');
        $acc = $this->session->userdata('account_id');
        $payment_status = $this->input->post('payment_status');
        $data = array(
            'status_val' => $status,
            'payment_status' => 'Unpaid',
            'rider_id' =>  $acc,
        );
        $this->db->update('order_tb',$data,array('order_id'=>$order_id)); 
    }
    public function cancel($order_id){
        $data = array(
            'status_val' => 'Waiting',
            'rider_id' => 'Null' ,
        );
        $this->db->update('order_tb',$data,array('order_id'=>$order_id)); 
    }
    
    public function payment_status(){
        $order_id = $this->input->post('order_id');
        $payment_status = $this->input->post('payment_status');
        $data = array(
            'payment_status' => $payment_status,
        );
        $this->db->update('order_tb',$data,array('order_id'=>$order_id)); 
    }

    public function update(){
        //query database for user data (*management);
       $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/user_files/';
        $config['allowed_types']        = 'png|jpeg|jpg|pdf';
        $config['max_size']             = 30000;
 

        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                
                $this->toastr->error($this->upload->display_errors());
                //$this->load->view('pages/admin/product_management_view', $error);
        }
        else
        {        
            $data = array('upload_data' => $this->upload->data());
            $file_name = $this->upload->data('file_name');        
            $account_id = $this->input->post('account_id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $role = $this->input->post('role');
            $address = $this->input->post('address');
            $contact_number = $this->input->post('contact_number');
            $email = $this->input->post('email');
            $status = $this->input->post('status');

    
    
    
            $data = array(
                'username' => $username,
                'password' => $password,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'role' => $role,
                'status' => $status,
                'acc_img' => $file_name,
                'address' => $address,
                'contact_number' => $contact_number,
                'email' => $email,

            );
            //$this->db->set($data);
            //$this->db->update('account_tb');
            //$this->db->where('account_id',$account_id);
    
            $this->db->update('account_tb',$data,array('account_id'=>$account_id)); 
            $this->toastr->info('Account Updated');
    } 
        
    }
    public function getUserData(){
        //query database for user data (*management)
        $this->db->select('*');
        $this->db->from('account_tb');
        $this->db->where('account_id',$id);
        return $query->result();
        }


    public function billing(){
        //query database to insert new user 
        
        //first get all the value of the input form views
        $account_id=$this->session->userdata('account_id');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $street_address = $this->input->post('street_address');
        $apartment = $this->input->post('apartment');
        $city = $this->input->post('city');
        $zip = $this->input->post('zip');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $payment_method = $this->input->post('payment_method');
        $status = 'Pending';
        //create array from the obtained data 
        $billing = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'street_address' => $street_address,
            'apartment' => $apartment,
            'city' => $city,
            'zip' => $zip,
            'phone' => $phone,
            'email' => $email,
            'payment_method' => $payment_method,
            'account_id' => $account_id,
            'status' => $status,
            'total_order' => $this->cart->total(),
        );
        //insert to the database 
        $this->db->insert('order_tb',$billing);  

        }
    public function billing2(){
        //query database to insert new user 
        $this->db->select('*');
        $this->db->from('cart_tb ');
        $this->db->where('user_id',$this->session->userdata('account_id'));
        $this->db->where('total',$this->cart->total());
        $this->db->group_by(array('product_name','product_price','market'));
        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            $account_id = $row->user_id;   
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $street_address = $this->input->post('street_address');
            $apartment = $this->input->post('apartment');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $payment_method = $this->input->post('payment_method');
            $status =  $this->input->post('status');;
            //create array from the obtained data 
            $billing = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'street_address' => $street_address,
                'apartment' => $apartment,
                'city' => $city,
                'zip' => $zip,
                'phone' => $phone,
                'email' => $email,
                'payment_method' => $payment_method,
                'account_id' => $account_id,
                'status' => $status,
                'total_order' => $this->cart->total(),
                'product_price' =>  $row->product_price,
                'product_name' =>  $row->product_name,
                'market_name' =>  $row->market,
                'quantity' =>  $row->quantity,

            );
            //insert to the database 
            $this->db->insert('order_tb',$billing);  
        }

            
    
        //first get all the value of the input form views
       

        }
    public function new_category(){
        //query database to insert new user 
        
        //first get all the value of the input form views
        $username = $this->input->post('product_type');


        //create array from the obtained data 
        $data = array(
            'product_type' => $product_type,
        );      
        //insert to the database 
        $this->db->insert('category_tb',$data);    
        }
    public function delete_category($id){

        $this->db->delete('category_tb',array('category'=>$id));
   
        }
    public function view_acc($id){
        //call model 
        $this->db->select('*');
        $this->db->from('account_tb');
        
        $this->db->where('account_id',$id);


        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
        }
    public function view_history($id){


       
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->join('cart_tb', 'cart_tb.user_id = order_tb.account_id');
        $this->db->join('product_tb', 'product_tb.product_id = cart_tb.product_id');
         $this->db->where('user_id',$id);

         $query = $this->db->get();
         return $query->result();
    }
    public function pending_order($id,$date){



        $date2 = str_replace('%20',' ', $date);

        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->where('account_id',$id);
        $this->db->where('order_tb.date',$date2 );
        $this->db->group_by(array('total_order','order_tb.market_name','account_id','order_tb.product_name'));

        $query = $this->db->get();
        return $query->result();
    }


###########################################################################################################################
public function add_market(){
    //query database to insert new user 
    
    $this->load->library('upload');     
    $config['upload_path']          = './assets/vegefoods/images/';
    $config['allowed_types']        = 'png|jpeg|jpg|pdf';
    $config['max_size']             = 20000;


    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('userfile'))
    {
            //$error = array('error' => $this->upload->display_errors());
            $this->toastr->error($this->upload->display_errors());
            //$this->load->view('pages/admin/product_management_view', $error);
    }
    else
    {                


            $data = array('upload_data' => $this->upload->data());
            $file_name = $this->upload->data('file_name');
            $market_name = $this->input->post('market_name');
            $City = $this->input->post('City');
            $Barangay = $this->input->post('Barangay');
            $Street = $this->input->post('Street');
            $contact_number = $this->input->post('contact_number');
            $description = $this->input->post('description');



    //create array from the obtained data 
    $data_acc = array(
        'market_name' => $market_name,
        'City' => $City,
        'Barangay' => $Barangay,
        'Street' => $Street,
        'description' => $description,
        'contact_number' => $contact_number,
        'market_img' => $file_name,



    );
    //insert to the database 
    $this->db->insert('market_tb',$data_acc);    
    }
    } 
    public function market_update(){
        //query database to insert new user 
        
        $this->load->library('upload');     
        $config['upload_path']          = './assets/vegefoods/images/';
        $config['allowed_types']        = 'png|jpeg|jpg|pdf';
        $config['max_size']             = 10000;
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                //$error = array('error' => $this->upload->display_errors());
                $this->toastr->error($this->upload->display_errors());
                //$this->load->view('pages/admin/product_management_view', $error);
        }
        else
        {                
                $data = array('upload_data' => $this->upload->data());
                $file_name = $this->upload->data('file_name');
                $market_name = $this->input->post('market_name');
                $City = $this->input->post('City');
                $Barangay = $this->input->post('Barangay');
                $Street = $this->input->post('Street');
                $contact_number = $this->input->post('contact_number');
                $description = $this->input->post('description');
                $market_id = $this->input->post('market_id');
    
    
        //create array from the obtained data 
        $data_acc = array(
            'market_name' => $market_name,
            'City' => $City,
            'Barangay' => $Barangay,
            'Street' => $Street,
            'description' => $description,
            'contact_number' => $contact_number,
            'market_img' => $file_name,

    
    
    
        );
        //insert to the database 
        $this->db->update('market_tb',$data_acc,array('market_id'=>$market_id)); 
        $this->toastr->info('Market Updated');

    }
        }
     public function contact(){
        $message = $this->input->post('message');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $account_id = $this->session->userdata('account_id');
        $data = array(
            'message' => $message,
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'account_id' => $account_id,
        );
        $this->db->insert('contact_tb',$data);    
    } 
    public function reviews(){
        $this->db->select('*');
        $this->db->from('contact_tb');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
    } 
    public function reviews_view($id){
        $this->db->select('*');
        $this->db->from('contact_tb');
        $this->db->where('account_id',$id);
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();
    } 
    
    public function rider_history($id){
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->join('cart_tb', 'cart_tb.user_id = order_tb.account_id');
        $this->db->join('product_tb', 'product_tb.product_id = cart_tb.product_id');
        $this->db->where('rider_id',$id);
        $this->db->where('status','ship');
        $this->db->where('payment_status','Paid');
        $this->db->group_by(array('status','order_id','total','order_tb.market_name','account_id','product_tb.product_name'));

         $query = $this->db->get();
         return $query->result();
    
}
    public function market_location(){
        $this->db->select('lat, longg ,market_name');
        $this->db->from('market_tb');
        //$this->db->where('status','deactivate');
        $query = $this->db->get();
        return $query->result();

}
    
   
}