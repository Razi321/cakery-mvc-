<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
  include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 


?>
    <div class="ar">
        <p>your account infos has been changed succesfuly</p>
        <?php
$cin = $u->getCin(); 
echo "<p> see your new infos  </p>" ;
echo"<br>";
echo"<button class='normal'>";
echo"<a href='index.php?controller=client&action=myinfo&cin=$cin'> see your new infos</a>";
echo"</button>";

?>
    </div>
</div>
