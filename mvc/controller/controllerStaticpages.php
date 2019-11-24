<?php 
	if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];
	else $action="home";
	
switch ($action) {
 case "home":
        $pagetitle = "";
        $view = "home";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
        case "cakes":
        $pagetitle = "";
        $view = "cakes";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
case "aboutus":
        $pagetitle = "";
        $view = "aboutus";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
 case "cakecategory":
        $pagetitle = "";
        $view = "cakecategory";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
case "process":
        $pagetitle = "";
        $view = "process";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;



}
?>
