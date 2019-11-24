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
        <h3> chef details</h3>
        <?php
	$code=$u->getCode();
echo"<p><span class='x'> code: </span> ".$u->getCode();"<p/>";
echo"<p> <span class='x'>name: </span> ".$u->getChefname();"<p/>";
echo"<p> <span class='x'>last name: </span> ".$u->getCheflastname();"<p/>";
echo"<p><span class='x'>Salary: </span> ".$u->getSalary();"<p/>";
echo"<p> <span class='x'>experince: </span> ".$u->getExpyear();"<p/>";

                echo"<br/>";
                  echo"<button class='update'>";
                 echo '<a href="index.php?controller=chef&action=update&code='.$code.'"> edit </a>';
                  echo"</button>";

                  echo"<button class='delete'>";
                 echo '<a href="index.php?controller=chef&action=delete&code='.$code.'"> delete </a> ';
                  echo"</button>";

                 echo"<br/>";
                  echo"<button class='normal'>";
                 echo"<a href='index.php?controller=chef&action=readAll'>back to chef management</a>";
                  echo"</button>";


                 ?>
    </div>
</div>
