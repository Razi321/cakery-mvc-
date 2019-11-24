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
           echo"<h5>admins list </h5>";


echo"<table border='1' class='op'>";
echo"<tr>";
echo"<th>admin code</th>";
echo"<th>name</th>";
echo"<th colspan='3'>operations</th>";
echo"</tr>";

foreach ($tab_u as $u){
        	  $admin_code=$u->getAdmin_code();
echo"<tr>";
    echo"<td>".$u->getAdmin_code();"</td>";
echo"<td>".$u->getAdmin_name();"</td>";
echo"<td class='vmore'><a href='index.php?controller=admin&action=read&admin_code=$admin_code'>      view more</a></td>";
echo"<td class='edit'><a href='index.php?controller=admin&action=update&admin_code=$admin_code'>   edit infos</a></td>";
echo"<td class='tdel'><a href='index.php?controller=admin&action=delete&admin_code=$admin_code'>   delete </a></td>";


echo"</tr>";
}
echo"</table>";
echo"<button class='add'>";
  echo"<a href='index.php?controller=admin&action=create'>Add a new admin</a>";
echo"</button>";
      ?>
    </div>
</div>
