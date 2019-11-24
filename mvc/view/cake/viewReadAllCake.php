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
        echo"<h5>cakes list </h5>";

echo"<table class='op' border='1'>";
echo"<tr>";
echo"<th>cake id </th>";
echo"<th>cake name </th>";
echo"<th colspan='3'>operations</th>";
echo"</tr>";

foreach ($tab_u as $u){
        	  $cakeid=$u->getCakeid();
echo"<tr>";
echo"<td>".$u->getCakeid();"</td>";
echo"<td>".$u->getcakename();"</td>";
echo"<td class='vmore'><a href='index.php?controller=cake&action=read&cakeid=$cakeid'>      view more</a></td>";
echo"<td class='edit'><a href='index.php?controller=cake&action=update&cakeid=$cakeid'>   edit infos</a></td>";
echo"<td  class='tdel'><a href='index.php?controller=cake&action=delete&cakeid=$cakeid'>   delete </a></td>";


echo"</tr>";
}
echo"</table>";
  echo"<button class='add'>";
  echo"<a href='index.php?controller=cake&action=create'>Add a new cake</a>";
  echo"</button>";

      ?>
    </div>
</div>
