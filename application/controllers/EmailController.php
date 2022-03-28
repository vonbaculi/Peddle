<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('Shopping_cart_model'); 
        $this->load->model('Gen_crud_model'); 

        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('email/contact');
    }

    function send() {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'peddle.ph@gmail.com'; // not my actual email obviously
        $config['smtp_pass'] = '@peddle321';
        $config['smtp_crypto'] = 'tls';
        $config['smtp_port'] = 587;
        $config['mailpath'] = 'smtp.gmail.com';
       

        $this->email->initialize($config);
        $from = 'peddle.ph@gmail.com';
        $to = $this->input->post('email');
        $subject = 'Order Confirmed';
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ( ! $this->email->send()) {
            show_error($this->email->print_debugger()); 
        } else {
      
            $data['delivery'] = $this->Shopping_cart_model->delivery();
            //;load wiew for user management
            $this->load->view('pages/rider/delivery',$data);
        }
    }
    function send_user() {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'peddle.ph@gmail.com'; // not my actual email obviously
        $config['smtp_pass'] = '@peddle321';
        $config['smtp_crypto'] = 'tls';
        $config['smtp_port'] = 587;
        $config['mailpath'] = 'smtp.gmail.com';
       

        $this->email->initialize($config);
        $from = 'peddle.ph@gmail.com';
        $to = $this->input->post('email');
        $subject = 'Message From The Admin';
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ( ! $this->email->send()) {
            $this->toastr->info(show_error($this->email->print_debugger()));
        } else {
      
            $data['delivery'] = $this->Shopping_cart_model->delivery();
            //;load wiew for user management
            $this->toastr->info('Message sent!');
            redirect('admin/dashboard/user_management','refresh');
        }
    }
    function send_rider() {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'peddle.ph@gmail.com'; // not my actual email obviously
        $config['smtp_pass'] = '@peddle321';
        $config['smtp_crypto'] = 'tls';
        $config['smtp_port'] = 587;
        $config['mailpath'] = 'smtp.gmail.com';
       

        $this->email->initialize($config);
        $from = 'peddle.ph@gmail.com';
        $to = $this->input->post('email');
        $subject = 'Message From The Admin';
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ( ! $this->email->send()) {
            $this->toastr->info(show_error($this->email->print_debugger()));
        } else {
      
            $data['delivery'] = $this->Shopping_cart_model->delivery();
            //;load wiew for user management
            $this->toastr->info('Message sent!');
            redirect('admin/dashboard/rider_management','refresh');
        }
    }
    function send_partner() {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'peddle.ph@gmail.com'; // not my actual email obviously
        $config['smtp_pass'] = '@peddle321';
        $config['smtp_crypto'] = 'tls';
        $config['smtp_port'] = 587;
        $config['mailpath'] = 'smtp.gmail.com';
       

        $this->email->initialize($config);
        $from = 'peddle.ph@gmail.com';
        $to = $this->input->post('email');
        $subject = 'Message From The Admin';
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ( ! $this->email->send()) {
            $this->toastr->info(show_error($this->email->print_debugger()));
        } else {
      
            $data['delivery'] = $this->Shopping_cart_model->delivery();
            //;load wiew for user management
            $this->toastr->info('Message sent!');
            redirect('admin/dashboard/partner_management','refresh');
        }
    }
    function pending_acc() {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'peddle.ph@gmail.com'; // not my actual email obviously
        $config['smtp_pass'] = '@peddle321';
        $config['smtp_crypto'] = 'tls';
        $config['smtp_port'] = 587;
        $config['mailpath'] = 'smtp.gmail.com';
        $config['mailtype'] = 'html';
       

        $this->email->initialize($config);
        $from = 'peddle.ph@gmail.com';
        $name = $this->input->post('name');
        $to = $this->input->post('email');
        $subject = 'Account Approved';
        $message = 'Hi!  '.$name.'  , Thank you for choosing us :)  - Team Peddle ' ;

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->input->post('status') == 'Approved') {
            if ( ! $this->email->send()) {
                $this->toastr->info(show_error($this->email->print_debugger()));
            } else {
                $this->Gen_crud_model->status();
    
                $data['delivery'] = $this->Shopping_cart_model->delivery();
                //;load wiew for user management
                $this->toastr->info('Message sent!');
                redirect('admin/dashboard/pending_acc','refresh');
            }
        }
        else {
            $this->Gen_crud_model->status();
            $this->toastr->info('Status Updates');
            redirect('admin/dashboard/pending_acc','refresh');
        }
        
    }
}   