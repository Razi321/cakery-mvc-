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
$admin_code=$up->getAdmin_code();
?>
        <form method="POST" action="index.php?controller=admin&action=updated&admin_code=<?=$admin_code?>">
            <fieldset>
                <legend>change admin infos</legend>
                <p>
                    <label for="admin_code">admin code</label> :<br>
                    <input type="text" value="<?=$admin_code?>" name="admin_code" id="admin_code" required readonly />
                </p>
                <p>
                    <label for="an">admin name</label> :<br>
                    <input type="text" value="<?=$up->getAdmin_name()?>" name="an" id="an" required />
                </p>
                <p>
                    <label for="ae">email</label> :<br>
                    <input type="email" value="<?=$up->getAdmin_email()?>" name="ae" id="ae" required />
                </p>
                <p>
                    <label for="apw">new password</label> :<br>
                    <input type="password" name="apw" id="apw" required />
                </p>

                <p>
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
