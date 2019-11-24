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
	$fb_id=$u->getFb_id();
echo"<p> <span class='x'>feedback by:</span>  ".$u->getFb_client();"<p/>";
echo"<p> <span class='x'>subject: </span> ".$u->getSubject();"<p/>";
echo"<p><span class='x'>content </span><span class='content'>:<br><br>".$u->getContent();" </span><p/>";


                echo"</br>";
                echo"<button class='delete'>";
                echo '<a href="index.php?controller=feedback&action=delete&fb_id='.$fb_id.'"> delete </a> ';
                 echo"</button>";
                echo"</br>";
                  echo"<button class='normal'>";
                echo"<a href='index.php?controller=feedback&action=readAll_byadmin'>back to all feed-backs</a>";
                  echo"</button>";


                 ?>
     </div>
 </div>
