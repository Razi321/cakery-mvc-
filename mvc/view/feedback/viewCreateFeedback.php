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
        <form method="POST" action="index.php?controller=feedback&action=created">
            <fieldset>
                <legend>post your feedback</legend>

                <p>
                    <label for="fbc"> your Name</label> :
                    <input type="text" readonly value="<?=$_SESSION['name']?>" name="fbc" id="fbc" required />
                </p>
                <label for="fbs">subject</label> :
                <select id="fbs" name="fbs">
                    <option value="quality">quality</option>
                    <option value="prices">prices</option>
                    <option value="delivery">delivery</option>

                </select>
                <p>
                    <label for="fbct">comment</label>
                    <br><br>
                    <textarea name="fbct" id="fbct" required maxlength="300">feel free to write anything
                    </textarea>

                </p>

                <p>
                    <input type="submit" value="confirm" />
                </p>
            </fieldset>
        </form>
    </div>
</div>
