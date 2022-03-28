<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		$this->load->model('Shopping_cart_model');       
    }

function itexmo(){
    $number = '09496073352';
    $message = 'Your orders are confirmed!';
    $apicode = 'TR-VONBA383727_SITGP';
    $url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);
$this->load->view('pages/rider/delivery',$data);
echo '<script type="text/javascript">alert("Message Sent");</script>';

}
    

//##########################################################################
                                


}