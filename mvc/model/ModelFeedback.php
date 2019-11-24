<?php

require_once ("Model.php"); 

class ModelFeedback extends Model{

  private $fb_id;
  private $fb_client;
  private $subject;
  private $content;
 
  protected static $table = 'feedback';
  protected static $primary = 'fb_id';




   
  public function __construct($fb_id= NULL, $fb_client = NULL, $subject= NULL,  $content= NULL) {
    if ( !is_null($fb_id) && !is_null($fb_client) && !is_null($subject)&& !is_null($content)){
      $this->fb_id = $fb_id;
      $this->fb_client = $fb_client;
      $this->subject = $subject;
      $this->content = $content;

    

     }
  } 
 public function getFb_id() {
       return $this->fb_id;  
  }
    public function getFb_client() {
       return $this->fb_client;  
  }
    public function getSubject() {
       return $this->subject;  
  }
    public function getContent() {
       return $this->content;  
  }
 
}
?>
