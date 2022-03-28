<?php 
$date = '2020-04-23%2014:29:37';
$date2 = str_replace('%20',' ', $date);


  $this->db->select('*') ;
  $this->db->from('order_tb');
  $this->db->join('cart_tb', 'cart_tb.user_id = order_tb.account_id');
  $this->db->join('product_tb', 'product_tb.product_id = cart_tb.product_id');
$this->db->where('DATE_ADD(cart_tb.date,INTERVAL 30 MINUTE) >',$date2);
  $this->db->group_by(array('order_id','total','market_name','account_id','product_tb.product_name'));
  $query = $this->db->get();
  $dp =  $query->result();
  var_dump ($dp);
?>
