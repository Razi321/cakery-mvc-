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
	$admin_code=$u->getAdmin_code();
echo"<p> <span class='x'>admin code: </span> ".$u->getAdmin_code();"<p/>";
echo"<p> <span class='x'>admin name:  </span>".$u->getAdmin_name();"<p/>";
echo"<p> <span class='x'>admin email:</span>  ".$u->getAdmin_email();"<p/>";


                echo"<br/>";
                  echo"<button class='update'>";
                 echo '<a href="index.php?controller=admin&action=update&admin_code='.$admin_code.'"> edit </a>';
                  echo"</button>";

                  echo"<button class='delete'>";
                 echo '<a href="index.php?controller=admin&action=delete&admin_code='.$admin_code.'"> delete </a> ';
                  echo"</button>";

                 echo"<br/>";
                  echo"<button class='normal'>";
                 echo"<a href='index.php?controller=admin&action=readAll'>back to admin management</a>";
                                     echo"</button>";


                 ?>
    </div>
</div>
