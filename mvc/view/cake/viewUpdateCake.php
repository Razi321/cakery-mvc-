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
$cakeid=$up->getCakeid();
?>
        <form method="POST" action="index.php?controller=cake&action=updated&cakeid=<?=$cakeid?>">
            <fieldset>
                <legend>change cake infos</legend>
                <p>
                    <label for="cakeid">name</label> :<br>
                    <input type="text" value="<?=$cakeid?>" name="cakeid" id="cakeid" required readonly />
                </p>
                <p>
                    <label for="kn">id</label> :<br>
                    <input type="text" value="<?=$up->getCakename()?>" name="kn" id="kn" required />
                </p>
                <p>
                    <label for="kp">price</label> :<br>
                    <input type="text" value="<?=$up->getPrice()?>" name="kp" id="kp" required />
                </p>
                <p>
                    <label for="kf">size(old data)</label> :<br>
                    <input type="text" value="<?=$up->getFormat()?>" name="kf" id="kf" required readonly />
                </p>
                <br>
                <label for="kf">size(new data)</label> :
                <select id="kf" name="kf">
                    <option value="tiny">tiny</option>
                    <option value="meduim">meduim</option>
                    <option value="large">large</option>
                    <option value="double">double</option>
                </select>
                <p><br>
                    <label for="kpz">personalized old data</label>
                    <input type="text" value="<?=$up->getPerso()?>" name="kpz" id="kpz" required readonly />
                </p><br>
                <label for="kpz">personalized new data</label> :
                <select id="kpz" name="kpz">
                    <option value="yes">yes</option>
                    <option value="no">no</option>

                </select>
                <p>
                    <input type="submit" value="confirm" />
                    <?php  echo"<button >";
                      echo"<a href='index.php?controller=cake&action=readAll'>clear and back </a>";
                  echo"</button>";?>
                </p>
            </fieldset>
        </form>
    </div>
</div>
