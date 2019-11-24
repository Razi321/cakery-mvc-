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

        <form method="POST" action="index.php?controller=admin&action=created">
            <fieldset>
                <legend>Add an admin </legend>
                <p>
                    <label for="admin_code"> admin code </label> :<br>
                    <input type="text" name="admin_code" id="admin_code" maxlength="8" required />
                </p>
                <p>
                    <label for="an"> admin Name</label> :<br>
                    <input type="text" name="an" id="an" required />
                </p>
                <label for="ae">admin email</label> :<br>
                <input type="email" name="ae" id="ae" required />
                <p>
                    <label for="apw">admin password</label> :<br>
                    <input type="password" name="apw" id="apw" required />
                    <br>
                    <input type="submit" value="confirm" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=admin&action=readAll'>clear and back </a>";
                  echo"</button>";
?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
