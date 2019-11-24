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
$admin_code = $u->getAdmin_code(); 
echo "<p> succes : admin added</p>" ;
echo"<button class='normal'>";
echo "<a href='index.php?controller=admin&action=read&admin_code=$admin_code'> see  infos </a>";
echo"</button>";
echo"<button class='normal'>";
echo"<a href='index.php?controller=admin&action=readAll'>back to admins management</a>";
echo"</button>";

                 
?>
    </div>
</div>
