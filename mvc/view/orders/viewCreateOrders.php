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
        <form method="POST" action="index.php?controller=orders&action=created">
            <fieldset>
                <legend>fill your order infos </legend>
                <p>
                    <label for="order_client"> order in the name of :</label> :<br>
                    <input type="text" name="oc" id="oc" readonly value="<?=$_SESSION['name']?>" required />
                </p>
                <p>
                    <label for="ock"> choose one cake </label> :
                    <select name="ock" id="ock">
                        <?php
    foreach($tab_cake as $cake){
        $cakename=$cake->getCakename();
        $price=$cake->getPrice();
        echo"<option value=$cakename->$cakename </option>";
    }
     ?>
                    </select>
                    <br>
                    <br>
                    <label for="od">date</label> :
                    <input type="date" name="od" id="od" required />
                </p>
                <label for="om">the amount of cakes</label> :
                <input type="number" name="om" id="om" required />
                <p>
                </p>
                <label for="add">your adress</label> :<br>
                <input type="text" readonly value="<?=$_SESSION['adress']?>" name="add" id="add" required />
                <p>
                    <input type="submit" value="confirm" />

                </p>
            </fieldset>
        </form>
    </div>
</div>
