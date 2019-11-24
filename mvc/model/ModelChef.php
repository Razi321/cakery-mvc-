<?php

require_once ("Model.php"); 

class ModelChef extends Model{

  private $code;
  private $chefname;
  private $cheflastname;
  private $salary;
  private $expyear;
  protected static $table = 'chef';
  protected static $primary = 'code';
   
  public function __construct($code = NULL, $chefname = NULL, $cheflastname= NULL,  $salary = NULL, $expyear= NULL) {
    if (!is_null($code) && !is_null($chefname) && !is_null($cheflastname) && !is_null($salary) && !is_null($expyear)) {
      $this->code = $code;
      $this->chefname = $chefname;
      $this->cheflastname= $cheflastname;
      $this->salary = $salary;
      $this->expyear = $expyear;
     }
  } 
 public function getCode() {
       return $this->code;  
  }
 public function getChefname() {
       return $this->chefname;  
  }
 public function getCheflastname() {
       return $this->cheflastname;  
  }
  public function getSalary() {
       return $this->salary;  
  }
public function getExpyear() {
       return $this->expyear;  
  }
}
?>
