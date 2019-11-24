<?php
echo"<div class='navbar'>";
echo"<ul>";
echo"<li><a href='index.php?controller=cake&action=readAll'>cakes management</a></li>";
echo"<li><a href='index.php?controller=chef&action=readAll'>chefs management</a></li>";
echo"<li><a href='index.php?controller=client&action=readAll'>clients management</a></li>";
echo"<li><a href='index.php?controller=admin&action=readAll'>admins management</a></li>";
echo"<li><a href='index.php?controller=orders&action=readAll'>orders management</a></li>";
echo"<li><a href='index.php?controller=feedback&action=readAll_byadmin'>feedbacks management</a></li>";
echo"<li><a href='index.php?controller=admin&action=loggedout'>log out </a></li>";
echo"</ul>";
echo"</div>";

?>
