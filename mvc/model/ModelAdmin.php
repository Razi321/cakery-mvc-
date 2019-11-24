<?php

require_once ("Model.php"); 

class ModelAdmin extends Model{

  private $admin_code;
  private $admin_name;
  private $admin_email;
  private $admin_pw;
 
  protected static $table = 'admin';
  protected static $primary = 'admin_code';
    protected static $login = 'admin_email';
  //protected static $password = '';



   
  public function __construct($admin_code= NULL, $admin_name = NULL, $admin_email= NULL,  $admin_pw = NULL) {
    if (!is_null($admin_code) && !is_null($admin_name) && !is_null($admin_email) && !is_null($admin_pw)) {
      $this->admin_code = $admin_code;
      $this->admin_name = $admin_name;
      $this->admin_email = $admin_email;
      $this->admin_pw = $admin_pw;

    

     }
  } 
 public function getAdmin_code() {
       return $this->admin_code;  
  }
    public function getAdmin_name() {
       return $this->admin_name;  
  }
    public function getAdmin_email() {
       return $this->admin_email;  
  }
    public function getAdmin_pw() {
       return $this->admin_pw;  
  }
 
}
?>
