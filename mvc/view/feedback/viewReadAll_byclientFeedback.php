<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
 include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
    

?>
    <div class="ar">
        <?php

foreach ($tab_u as $u){
        	  $fb_id=$u->getFb_id();
echo"<p><span class='x'>feedback by:</span>  ".$u->getFb_client();"<p/>";
echo"<p> <span class='x'>subject:</span> ".$u->getSubject();"<p/>";
echo"<p><span class='x'>content </span><span class='content'>:<br><br>".$u->getContent();" </span><p/>";


                 echo"<br/>";
                 echo"<hr/>";
                 echo"<hr/>";

}
                     ?>
    </div>
</div>
