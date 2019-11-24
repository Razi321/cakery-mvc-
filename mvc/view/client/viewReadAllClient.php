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

echo"<h5>clients list </h5>";

echo"<table border='1' clas='op'>";
echo"<tr>";
echo"<th>cin</th>";
echo"<th>client name</th>";
echo"<th colspan='2'>operations</th>";
echo"</tr>";

foreach ($tab_u as $u){
        	  $cin=$u->getCin();
echo"<tr>";
    echo"<td>".$u->getCin();"</td>";
echo"<td>".$u->getClientname();"</td>";
echo"<td class='vmore'><a href='index.php?controller=client&action=read&cin=$cin'>      view more</a></td>";
echo"<td class='tdel'><a href='index.php?controller=client&action=delete&cin=$cin'>  delete </a></td>";


echo"</tr>";
}
echo"</table>";
      ?>
      </div>
  </div>
