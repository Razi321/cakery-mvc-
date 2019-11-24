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
echo"<h5>orders list </h5>";
echo"<table border='1' class='op'>";
echo"<tr>";
echo"<th>order code</th>";
echo"<th>client</th>";
echo"<th colspan='2'>operations</th>";
echo"</tr>";

foreach ($tab_u as $u){
        	  $order_id=$u->getOrder_id();
echo"<tr>";
    echo"<td>".$u->getOrder_id();"</td>";
echo"<td>".$u->getOrder_client();"</td>";
echo"<td class='vmore'><a href='index.php?controller=orders&action=readbyadmin&order_id=$order_id'> view order details</a></td>";
echo"<td class ='tdel'><a href='index.php?controller=orders&action=delete&order_id=$order_id'>   delete </a></td>";

echo"</tr>";
}
echo"</table>";
 
      ?>
    </div>
</div>
