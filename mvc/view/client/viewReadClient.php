<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(!isset($_SESSION['code'])){
header('Location: index.php?controller=admin&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}adminnavbar.php"); 


?>
    <div class="ar">
        <?php
	$cin=$u->getCin();
echo"<p><span class='x'> cin:</span>  ".$u->getCin();"<p/>";
echo"<p> <span class='x'>client name: </span>  ".$u->getClientname();"<p/>";
echo"<p> <span class='x'>email:   </span>".$u->getClientemail();"<p/>";
echo"<p> <span class='x'>phone number: </span>  ".$u->getTel();"<p/>";
echo"<p> <span class='x'>adress: </span> ".$u->getAdress();"<p/>";

                echo"<br/>";
                echo"<button class='normal'>";
                 echo '<a href="index.php?controller=client&action=delete&cin='.$cin.'"> delete </a> ';
                 echo"</button>";
                echo"<button class='normal'>";
                 echo"<a href='index.php?controller=client&action=readAll'>back to clients management</a>";
                 echo"</button>";


                 ?>
    </div>
</div>
