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
        <h3>your order has been created</h3>
        <?php
$order_id = $u->getOrder_id(); 
echo"<button class='normal'>";
echo"<a href='index.php?controller=orders&action=read&order_id=$order_id'> view your order detail</a>";
echo"</button>";
echo"<h3>did you made a mistake ?</h3>";
echo"<button class='normal'>";
echo"<a href='index.php?controller=orders&action=update&order_id=$order_id'>edit your order detail</a>";   
echo"</button>";

?>
    </div>
</div>
