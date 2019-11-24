<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelChef.php"); 
if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "chef management ";
        $view = "readAll";
       	$tab_u = ModelChef::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['code'])){
			$code = $_REQUEST['code'];
			$u = ModelChef::select($code);
				if($u!=null){
					$pagetitle = " chef info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['code'])){
			$code = $_REQUEST['code'];
			$del = ModelChef::select($code);
			if($del!=null){
			$del->delete($code);
			header('Location: index.php?controller=chef&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Add a chef ";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['code']) && isset($_REQUEST['cn']) && isset($_REQUEST['cln'])&& isset($_REQUEST['s'])&& isset($_REQUEST['exp'])){
			$code = $_REQUEST["code"];
			$cn = $_REQUEST["cn"];
            $cln = $_REQUEST["cln"];
			$s = $_REQUEST["s"];
            $exp = $_REQUEST["exp"];

			
			$recherche = ModelChef::select($code);
			if($recherche==null){
				$u = new ModelChef($code, $cn, $cln, $s, $exp);	
				$tab = array(
				"code" => $code,
				"chefname" => $cn,
                "cheflastname" => $cln,
				"salary" => $s,
                "expyear" => $exp
				);				
				$u->insert($tab);
				$pagetitle = "chef added";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
             else{
                header('Location: index.php?controller=chef&action=create');}
		}
		break;
	
	case "update":
		if(isset($_REQUEST['code'])){
			$code = $_REQUEST['code'];
			$up = ModelChef::select($code);
			if($up!=null){
				$pagetitle = "edit chef info";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['code']) && isset($_REQUEST['cn'])&& isset($_REQUEST['cln']) && isset($_REQUEST['s'])&& isset($_REQUEST['exp'])){
			$oldcode = $_REQUEST['code'];
			$tab = array(
   			 "code" => $_REQUEST["code"],
   			 "chefname" => $_REQUEST["cn"],
   			 "cheflastname" => $_REQUEST["cln"],
             "salary" => $_REQUEST["s"],
             "expyear" => $_REQUEST["exp"]


   			 );
			$o = ModelChef::select($oldcode);
			if($o!=null){
				$u = $o->update($tab, $oldcode);		
				$pagetitle = "chef info edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
