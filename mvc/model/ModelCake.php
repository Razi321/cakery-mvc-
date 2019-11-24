<?php

require_once ("Model.php"); 

class ModelCake extends Model{

  private $cakeid;
  private $cakename;
  private $price;
  private $format;
  private $perso;
  protected static $table = 'cake';
  protected static $primary = 'cakeid';
   
  public function __construct($cakeid = NULL, $cakename = NULL, $price= NULL,  $format = NULL, $perso= NULL) {
    if (!is_null($cakeid) && !is_null($cakename) && !is_null($price) && !is_null($format) && !is_null($perso)) {
      $this->cakeid = $cakeid;
      $this->cakename = $cakename;
      $this->price= $price;
      $this->format= $format;
      $this->perso = $perso;
     }
  } 
 public function getCakeid() {
       return $this->cakeid;  
  }
 public function getCakename() {
       return $this->cakename;  
  }
 public function getPrice() {
       return $this->price;  
  }
  public function getFormat() {
       return $this->format;  
  }
public function getPerso() {
       return $this->perso;  
  }
}
?>
