<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['code'])){
header('Location: index.php?controller=admin&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}adminnavbar.php"); 


?>
    <div class="ar">
        <?php
	$order_id=$u->getOrder_id();
echo"<p><span class='x'> order code: </span> ".$u->getOrder_id();"<p/>";
echo"<p> <span class='x'>order passed by: </span> ".$u->getOrder_client();"<p/>";
echo"<p> <span class='x'>order concern: </span> ".$u->getOrder_cake();"<p/>";
echo"<p> <span class='x'>date to deliver:</span> ".$u->getOrder_date();"<p/>";
echo"<p> <span class='x'>adress to deliver to:</span>  ".$u->getOrder_adress();"<p/>";

                echo"</br>";
echo"<button class='delete'>";
 echo"<a href='index.php?controller=orders&action=delete&order_id=$order_id'>   delete </a>";
  echo"</button>";
    echo"<br/>";
echo"<button class='normal' >";
 echo"<a href='index.php?controller=orders&action=readAll'>back to orders management</a>";
  echo"</button>";
 ?>
    </div>
</div>
