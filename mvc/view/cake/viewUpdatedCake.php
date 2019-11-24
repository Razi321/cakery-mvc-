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
        <p>cake upadated</p>
        <?php
$cakeid = $u->getCakeid(); 
echo"<button class='normal'>";
echo "<a href='index.php?controller=cake&action=read&cakeid=$cakeid'> see  new infos </a> </p>";
echo"</button>";
echo"<button class='normal'>";
echo"<a href='index.php?controller=cake&action=readAll'>back to cake management</a>";
echo"</button>";
?>
    </div>
</div>
