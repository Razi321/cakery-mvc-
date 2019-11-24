<?php

require_once ("Model.php"); 

class ModelClient extends Model{

  private $cin;
  private $clientname;
  private $clientemail;
  private $clientpw;
  private $tel;
  private $adress;

  protected static $table = 'client';
  protected static $primary = 'cin';
    protected static $login = 'clientemail';
  //protected static $password = 'clientpw';



   
  public function __construct($cin = NULL, $clientname = NULL, $clientemail= NULL,  $clientpw = NULL, $tel= NULL, $adress = NULL) {
    if (!is_null($cin) && !is_null($clientname) && !is_null($clientemail) && !is_null($clientpw) && !is_null($tel) && !is_null($adress)) {
      $this->cin = $cin;
      $this->clientname = $clientname;
      $this->clientpw= $clientpw;
      $this->clientemail = $clientemail;
      $this->tel = $tel;
      $this->adress = $adress;

     }
  } 
 public function getCin() {
       return $this->cin;  
  }
 public function getClientname() {
       return $this->clientname;  
  }
 public function getClientemail() {
       return $this->clientemail;   
  } 
    public function getClientpw() {
       return $this->clientpw;  
  }
     public function getTel() {
       return $this->tel;  
  }
     public function getAdress() {
       return $this->adress;  
  }
}
?>
