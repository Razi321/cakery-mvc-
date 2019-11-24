<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
  include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 

?>
    <div class="ar">
        <?php
$cin=$up->getCin();
?>
        <form method="POST" action="index.php?controller=client&action=updated&cin=<?=$cin?>">
            <fieldset>
                <legend>change your infos </legend>
                <p>
                    <label for="cin">cin</label> :
                    <input type="text" value="<?=$cin?>" name="cin" id="cin" required readonly />
                </p>
                <p>
                    <label for="qn">Name</label> :
                    <input type="text" value="<?=$up->getClientname()?>" name="qn" id="qn" required />
                </p>
                <p>
                    <label for="qe">email</label> :
                    <input type="email" value="<?=$up->getClientemail()?>" name="qe" id="qe" required />
                </p>
                <p>
                    <label for="qpw">password</label> :
                    <input type="password" name="qpw" id="qpw" required />
                </p>
                <p>
                    <label for="qt">phone</label> :
                    <input type="text" name="qt" value="<?=$up->getTel()?>" id="qt" required />
                </p>
                <p>
                    <label for="qa">adress</label> :
                    <input type="text" value="<?=$up->getAdress()?>" name="qa" id="qa" required />
                </p>
                <p>
                    <input type="submit" value="confirm" />
                </p>
            </fieldset>
        </form>

    </div>
</div>
