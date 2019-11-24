<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }   session_destroy();
?>

<div class="az">
    <div class="ar">
        <p>you have logged out</p>
        <button class='normal'><a href="index.php?controller=client&action=connect"> log-in</a></button>
    </div>
</div>
