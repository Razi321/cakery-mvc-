<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }$_SESSION["code"]=$cnx-> getAdmin_code();
$_SESSION["name"]=$cnx-> getAdmin_name();

?>
<div class="ax">
    <?php
echo"<div class='ay'>";
echo"<h1>Admin main panel</h1>";
echo"<button class='main'><a href='index.php?controller=cake&action=readAll'>cakes management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=chef&action=readAll'>chefs management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=client&action=readAll'>clients management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=admin&action=readAll'>admins management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=orders&action=readAll'>orders management</a></button>";
echo"</br>";
echo"<button class='main'><a href='index.php?controller=feedback&action=readAll_byadmin'>feedbacks management</a></button>";
echo"</br>";
echo"</div>";
?>

</div>
