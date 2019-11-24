<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href='./CSS/css.css' />
    <script src="../js/monjs.js"></script>

    <title><?php echo $pagetitle; ?></title>
</head>

<body>

    <?php
   
//require_once("{$ROOT}{$DS}view{$DS}header.php");
require_once($ROOT.$DS."view".$DS."header.php");?>
    <?php
// Si $controleur='voiture' et $view='readAll',
// alors $filepath=".../view/voiture/"
//       $filename="viewReadAllVoiture.php";
// et on charge '.../view/voiture/viewReadAllVoiture.php'
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}"; 

// détermine le chemin de la vue en fonction du controller qu'on utilise
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; // détermine le nom du fichier
require_once($filepath.$filename);
?>
    <?php
require_once($ROOT.$DS."view".$DS."footer.php");
//require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>
    <script src="../js/monjs.js"></script>

</body>


</html>
