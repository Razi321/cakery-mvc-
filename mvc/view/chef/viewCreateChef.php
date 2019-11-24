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
        <form method="POST" action="index.php?controller=chef&action=created">
            <fieldset>
                <legend>Add chef </legend>
                <p>
                    <label for="code"> chef code</label> :
                    <input type="text" name="code" id="code" maxlength="8" required />
                </p>
                <p>
                    <label for="cn"> chef Name</label> :
                    <input type="text" name="cn" id="cn" required />
                </p>
                <label for="cln">chef last name</label> :
                <input type="text" name="cln" id="cln" maxlength="8" required />
                <p>
                    <label for="s">salary</label> :
                    <input type="text" name="s" id="s" required />
                </p>
                <label for="exp">experince years</label> :
                <input type="text" name="exp" id="exp" maxlength="8" required />
                <p>
                    <input type="submit" value="confirm" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=chef&action=readAll'>clear and back </a>";
                  echo"</button>";
?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
