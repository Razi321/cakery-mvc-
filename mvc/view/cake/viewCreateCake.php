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
        <form method="POST" action="index.php?controller=cake&action=created">
            <fieldset>
                <legend>Add cake </legend>
                <p>
                    <label for="cakeid">cake id</label> :<br>
                    <input type="text" name="cakeid" id="cakeid" maxlength="8" required />
                </p>
                <p>
                    <label for="kn">Cake Name</label> :<br>
                    <input type="text" name="kn" id="kn" required />
                </p>
                <label for="kp">Price</label> :<br>
                <input type="text" name="kp" id="kp" maxlength="8" required />
                <p>
                    <label for="kf">Size</label> :
                    <select id="kf" name="kf">
                        <option value="tiny">tiny</option>
                        <option value="meduim">meduim</option>
                        <option value="large">large</option>
                        <option value="double">double</option>
                    </select>
                </p>
                <p>
                    <label for="kpz">Personalised</label> :
                    <select id="kpz" name="kpz">
                        <option value="yes">yes</option>
                        <option value="no">no</option>

                    </select>
                </p>
                <p>
                    <input type="submit" value="confirm" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=cake&action=readAll'>clear and back </a>";
                  echo"</button>";
?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
