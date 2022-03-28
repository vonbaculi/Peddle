<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller{
     
    public function __construct(){
        parent::__construct();
        $this->load->model('Shopping_cart_model');
        $this->load->model('Gen_crud_model');
		$this->load->model('Product_model');       
		$this->load->model('Shopping_cart_model'); 
        
    }
 
    public function index(){
        $data['data']=$this->Shopping_cart_model->get_all_product();
        $this->load->view('pages/cart',$data);
    }

    public function add_to_cart(){ 
        $data = array(
            'product_id' => $this->input->post('product_id'), 
            'product_name' => $this->input->post('product_name'), 
            'product_price' => $this->input->post('product_price'), 
            'quantity' => $this->input->post('quantity'), 
            'market' => $this->input->post('market_name'), 
            'user_id' => $this->session->userdata('account_id'),
            'total' => $this->cart->total(), 
            'per' => $this->input->post('per'), 


        );
        $this->cart->insert($data);
         $this->show_cart();
    }
 
    public function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['product_id'].'</td>
                    <td>'.$items['product_name'].'</td>
                    <td>'.number_format($items['product_price']).'</td>
                    <td>'.$items['quantity'].'</td>
                    <td>'.$items['market'].'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class=" submit px-3 btn btn-outline-danger toastsDefaultDanger romove_cart ">Remove Item</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'₱ '.number_format($this->cart->total()).'</th>

            </tr>
            
        ';
        if($no == 0)
        {
         $output = '    
                    <td> <h1 class="mb-0 bread"></h1> </td>
                    <td> <h1 class="mb-0 bread"></h1> </td>
                    <td> <h1 class="mb-0 bread">Cart</h1> </td>
                    <td> <h1 class="mb-0 bread">is </h1> </td>
                    <td> <h1 class="mb-0 bread">Empty</h1> </td>'
                    
                    ;
        }

        return $output;
    }
 
    public function load_cart(){ 
        echo $this->show_cart();
    }
 
    public function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'quantity' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
    public function checkout_cart(){ 
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'user_id' => $this->session->userdata('account_id'),
                'total' => $this->cart->total(), 
            );
            $this->cart->update($data);

        }
        $this->db->insert_batch('cart_tb',$this->cart->contents());
       

}
   
public function check()
	{
        $data["cart_data"] =$this->Shopping_cart_model->get_cart();
        $data["invoice_data"] =$this->Shopping_cart_model->get_invoice();
		$this->load->view('pages/check',$data);
    }

    public function billing(){
    //call model to add user to the database
    $email = $this->input->post('email');
    $message = $this->input->post('message');
    if ($email == $this->session->userdata('email')){
        
        $this->checkout_cart();
        $this->Gen_crud_model->billing2();
        $this->Gen_crud_model->send_all();
        redirect ('shopping_cart/invoice');
    }
    else{
        $this->toastr->error('Email is not equal to your registered Email');
        redirect('Page/checkout');
    }
        //load wiew for user management
    }
    public function invoice(){
        
        $data["cart_data"] =$this->Shopping_cart_model->get_cart();
        $data["invoice_data"] =$this->Shopping_cart_model->get_invoice();
        $this->load->view('pages/invoice',$data);
    }
    public function cancel($date){

        $this->cart->destroy();
        $this->load->model('Product_model'); 
        $this->Gen_crud_model->delete_order($date);
        $this->toastr->info('Order Canceled');
        redirect('Home','refresh');
    }
    public function destroy_cart(){

        $this->cart->destroy();
        $this->toastr->error('Your cart is now empty');
		$this->load->view('pages/cart');
    }
    public function likes(){
        $product_id = $this->input->post('product_id');
        $likes = $this->input->post('likes');
        $likes = $likes + 1 ;
        $data_pro = array(
            'likes' => $likes ,
        );
        $this->db->update('product_tb',$data_pro,array('product_id'=>$product_id)); 
        }
}