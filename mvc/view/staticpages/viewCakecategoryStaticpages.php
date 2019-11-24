<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<?php
  include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
 

?>
<section class="img">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="https://images.unsplash.com/photo-1469533778471-92a68acc3633?ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" height="38%" width="38%">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="https://images.unsplash.com/photo-1545696563-af8f6ec2295a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=332&q=80" height="38%" width="38%">
    <br>
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="https://images.unsplash.com/photo-1551879402-a217120095be?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" height="38%" width="38%">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="https://images.unsplash.com/photo-1505976378723-9726b54e9bb9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" height="38%" width="38%">
    <br>
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="https://images.unsplash.com/photo-1501437638401-4addcfd56d3d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=333&q=80" height="38%" width="38%">
    <img class="im" onmouseover="bigger(this)" onmouseout="normal(this)" src="https://images.unsplash.com/photo-1541780171255-b162a3a147e3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" height="38%" width="38%">
    <br>
    <div class="added">
        <?php 
        echo"<button class='add'><a href='index.php?controller=orders&action=create'>pass an order</a></button>"; ?>
    </div>
</section>
