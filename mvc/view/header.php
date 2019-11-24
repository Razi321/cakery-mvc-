<header>
    <span id="brand">The Cakery</span>

    <nav>
        <ul>
            <li><a href='index.php'>home</a></li>
            <li><a href='index.php?controller=staticpages&action=aboutus'>about us</a></li>
            <li><a href='index.php?controller=staticpages&action=cakes'>our cakes</a></li>
            <?php
session_start();
if(!isset($_SESSION['cin'])&& !isset($_SESSION['code'])){
echo"  <li><a href='index.php?controller=client&action=create'>signup</a></li>";
echo "<li><a href='index.php?controller=client&action=connect'>login</a></li>";
}    
            if(isset($_SESSION['cin'])){
echo"<li><a href='index.php?controller=client&action=loggedout'> log-out</a></li>";
                    echo" <li>".$_SESSION['name']."</li>";
  }  
            if(isset($_SESSION['code'])){
echo"<li><a href='index.php?controller=admin&action=loggedout'>log out </a></li>";
                    echo" <li>".$_SESSION['name']."(admin)</li>";
}  
?>
        </ul>
    </nav>
</header>
