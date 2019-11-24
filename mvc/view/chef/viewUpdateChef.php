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
$code=$up->getCode();
?>
        <form method="POST" action="index.php?controller=chef&action=updated&code=<?=$code?>">
            <fieldset>
                <legend>change chef infos</legend>
                <p>
                    <label for="code">code</label> :
                    <input type="text" value="<?=$code?>" name="code" id="code" maxlength="8" required readonly />
                </p>
                <p>
                    <label for="cn">first name</label> :
                    <input type="text" value="<?=$up->getChefname()?>" name="cn" id="cn" required />
                </p>
                <p>
                    <label for="cln">last name</label> :
                    <input type="text" value="<?=$up->getCheflastname()?>" name="cln" id="cln" required />
                </p>
                <p>
                    <label for="s">salary</label> :
                    <input type="text" value="<?=$up->getSalary()?>" name="s" id="s" required />
                </p>
                <p>
                    <label for="exp">experience years</label> :
                    <input type="text" value="<?=$up->getExpyear()?>" name="exp" id="exp" required />
                </p>
                <p>
                    <input type="submit" value="confirm" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=chef&action=readAll'>clear and back </a>";
                  echo"</button>";?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
