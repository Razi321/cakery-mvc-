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
        <h3>cake details</h3>
        <?php
	$cakeid=$u->getCakeid();
echo"<p><span class='x'>cake id:</span>".$u->getCakeid();"</p>";
echo"<p> <span class='x'>cake name: </span> ".$u->getCakename();"</p>";
echo"<p> <span class='x'>price : </span> ".$u->getPrice();"<p/>";
echo"<p><span class='x'>size:  </span>".$u->getFormat();"<p/>";
echo"<p><span class='x'>personalized: </span> ".$u->getPerso();"<p/>";

                 echo"<br/>";
                  echo"<button class='update'>";
                 echo '<a href="index.php?controller=cake&action=update&cakeid='.$cakeid.'"> update infos </a> ';
                  echo"</button>";
                  echo"<button class='delete'>";
                 echo '<a href="index.php?controller=cake&action=delete&cakeid='.$cakeid.'"> delete </a> ';
                  echo"</button>";
                  echo"<button class='normal'>";
                      echo"<a href='index.php?controller=cake&action=readAll'>back to cake management</a>";
                  echo"</button>";

                 ?>
    </div>
</div>
