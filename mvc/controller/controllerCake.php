<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelCake.php"); 
if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "cake management ";
        $view = "readAll";
       	$tab_u = ModelCake::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['cakeid'])){
			$cakeid = $_REQUEST['cakeid'];
			$u = ModelCake::select($cakeid);
				if($u!=null){
					$pagetitle = " cake info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
        
    
		
	case "delete":
		if(isset($_REQUEST['cakeid'])){
			$cakeid = $_REQUEST['cakeid'];
			$del = ModelCake::select($cakeid);
			if($del!=null){
			$del->delete($cakeid);
			header('Location: index.php?controller=cake&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Add a cake ";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['cakeid']) && isset($_REQUEST['kn']) && isset($_REQUEST['kp'])&& isset($_REQUEST['kf'])&& isset($_REQUEST['kpz'])){
			$cakeid = $_REQUEST["cakeid"];
			$kn = $_REQUEST["kn"];
            $kp = $_REQUEST["kp"];
			$kf = $_REQUEST["kf"];
            $kpz = $_REQUEST["kpz"];

			
			$recherche = ModelCake::select($cakeid);
			if($recherche==null){
				$u = new ModelCake($cakeid, $kn, $kp, $kf, $kpz);	
				$tab = array(
				"cakeid" => $cakeid,
				"cakename" => $kn,
                "price" => $kp,
				"format" => $kf,
                "perso" => $kpz
				);				
				$u->insert($tab);
				$pagetitle = "cake added";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
             else{
                header('Location: index.php?controller=cake&action=create');}
		}
		break;
	
	case "update":
		if(isset($_REQUEST['cakeid'])){
			$cakeid = $_REQUEST['cakeid'];
			$up = ModelCake::select($cakeid);
			if($up!=null){
				$pagetitle = "edit cake info";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['cakeid']) && isset($_REQUEST['kn'])&& isset($_REQUEST['kp']) && isset($_REQUEST['kf'])&& isset($_REQUEST['kpz'])){
			$oldcakeid = $_REQUEST['cakeid'];
			$tab = array(
   			 "cakeid" => $_REQUEST["cakeid"],
   			 "cakename" => $_REQUEST["kn"],
   			 "price" => $_REQUEST["kp"],
             "format" => $_REQUEST["kf"],
             "perso" => $_REQUEST["kpz"]


   			 );
			$o = ModelCake::select($oldcakeid);
			if($o!=null){
				$u = $o->update($tab, $oldcakeid);		
				$pagetitle = "cake info edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
        
}
?>
