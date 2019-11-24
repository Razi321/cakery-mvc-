<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
   echo"<div class='navbar'>";       
echo"<ul>";
echo"<li><a href='index.php?controller=orders&action=create'>pass your order</a></li>";    
echo"<li><a href='index.php?controller=feedback&action=create'>rate our services</a></li>";
echo"<li><a href='index.php?controller=feedback&action=readAll_byclient'>view others clients feedbacks</a></li>";
echo"<li><a href='index.php?controller=client&action=myinfo'>my account infos</a></li>";
echo"<li><a href='index.php?controller=staticpages&action=cakecategory'> view our cakes</a></li>";
 echo"<li><a href='index.php?controller=client&action=loggedout'> log-out</a></li>";   
echo"</ul>";
       echo"<div class='navbar'>";       

?>
    <div class="ar">
        <?php
	$order_id=$u->getOrder_id();
echo"<p> <span class='x'>order code: </span> ".$u->getOrder_id();"<p/>";
echo"<p><span class='x'> order passed by: </span> ".$u->getOrder_client();"<p/>";
echo"<p><span class='x'> order concern:  </span>".$u->getOrder_cake();"<p/>";
echo"<p> <span class='x'>date to deliver: </span> ".$u->getOrder_date();"<p/>";
echo"<p> <span class='x'>adress to deliver to:</span>  ".$u->getOrder_adress();"<p/>";

                echo"<br/>";
echo"<button class='add'><a href='index.php?controller=orders&action=create'>pass another order</a></button>";
                echo"<button class='normal'><a href='index.php?controller=orders&action=update&order_id=$order_id'>  edit your order</a></button>";
                 ?>
    </div>
</div>
