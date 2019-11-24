<?php

require_once ("Model.php"); 

class ModelOrders extends Model{

  private $order_id;
  private $order_client;
  private $order_cake;
private $order_amount;
  private $order_date;
  private $order_adress;
  protected static $table = 'orders';
  protected static $primary = 'order_id';
   
  public function __construct($order_id = NULL, $order_client = NULL, $order_cake= NULL,$order_amount= NULL,  $order_date = NULL, $order_adress= NULL) {
    if (!is_null($order_id) && !is_null($order_client) && !is_null($order_cake)&& !is_null($order_amount) && !is_null($order_date) && !is_null($order_adress)) {
      $this->order_id = $order_id;
      $this->order_client = $order_client;
      $this->order_cake= $order_cake;
      $this->order_amount= $order_amount;
      $this->order_date = $order_date;
      $this->order_adress = $order_adress;
     }
  } 
 public function getOrder_id() {
       return $this->order_id;  
  }
public function getOrder_client() {
       return $this->order_client;  
  }
 public function getOrder_cake() {
       return $this->order_cake;  
  }
public function getOrder_amount() {
       return $this->order_amount;  
  }
 public function getOrder_date() {
       return $this->order_date;  
  }
public function getOrder_adress() {
       return $this->order_adress;  
  }
}
?>
