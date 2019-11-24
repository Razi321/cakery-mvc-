<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }if(!isset($_SESSION['cin'])){
header('Location: index.php?controller=client&action=connect');}

?>
<div class="az">
    <?php
include_once ("{$ROOT}{$DS}view{$DS}usernavbar.php"); 
 

?>
    <div class="ar">
        <?php
$order_id=$up->getOrder_id();
?>
        <form method="POST" action="index.php?controller=orders&action=updated">
            <fieldset>
                <legend>fill your orders infos </legend>
                <p>
                    <label for="order_id"> order code</label> :<br>
                    <input type="text" readonly name="order_id" id="order_id" value="<?=$order_id?>" required />
                </p>
                <p>
                    <label for="oc"> client name</label> :<br>
                    <input type="text" name="oc" id="oc" value="<?=$up->getOrder_client()?>" required />
                </p>
                <p>
                    <label> last cake choice</label><br>
                    <input type="text" readonly value="<?=$up->getOrder_cake()?>" required />

                    <label for="ock"> you can change the cake </label> :
                    <select name="ock" id="ock">
                        <?php
    foreach($tab_cake as $cake){
        $cakename=$cake->getCakename();
        $price=$cake->getPrice();
        echo"<option value=$cakename->$cakename </option>";
    }
     ?> </select>
                    <br>
                    <br>

                    <label for="om">new amount</label> :
                    <input type="number" name="om" id="om" value="<?=$up->getOrder_amount()?>" required />
                    <br />
                    <br>

                    <label for="od">date</label> :
                    <input type="date" name="od" id="od" value="<?=$up->getOrder_date()?>" required />
                </p>
                <label for="add">your adress</label> :<br>
                <input type="text" name="add" id="add" value="<?=$up->getOrder_adress()?>" required />
                <p>
                    <input type="submit" value="confirm" />
                </p>
            </fieldset>
        </form>
    </div>
</div>
