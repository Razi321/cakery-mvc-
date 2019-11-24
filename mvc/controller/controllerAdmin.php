<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelAdmin.php"); 

if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];
	else $action="readAll";	
	
switch ($action) {
        
         case "connect":
		$pagetitle = "login ";
		$view = "login";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    
     
        case"connected":
        if(isset($_REQUEST['lg'])){
            $lg = $_REQUEST["lg"];

        $cnx=ModelAdmin::connexion($lg);
        }
        if($cnx!=null){
        $pagetitle = "";
		$view = "interface";
		require ("{$ROOT}{$DS}view{$DS}view.php");    
        }
        else{
        $pagetitle = "login ";
        $view="login";
        		require ("{$ROOT}{$DS}view{$DS}view.php");   } 
        break;
        
    case "readAll":
        $pagetitle = "admin management";
        $view = "readAll";
       	$tab_u = ModelAdmin::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['admin_code'])){
			$admin_code = $_REQUEST['admin_code'];
			$u = ModelAdmin::select($admin_code);
				if($u!=null){
					$pagetitle = " admin info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['admin_code'])){
			$admin_code = $_REQUEST['admin_code'];
			$del = ModelAdmin::select($admin_code);
			if($del!=null){
			$del->delete($admin_code);
			header('Location: index.php?controller=admin&action=readAll');
			}
		}
	    break;
        
 case "loggedout":
		$pagetitle = "loggedout ";
		$view = "loggedout";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
        	    
	case "create":
		$pagetitle = "Add an admin ";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
		
	case "created":
		if(isset($_REQUEST['admin_code']) && isset($_REQUEST['an']) && isset($_REQUEST['ae'])&& isset($_REQUEST['apw'])){
			$admin_code = $_REQUEST["admin_code"];
			$an = $_REQUEST["an"];
            $ae= $_REQUEST["ae"];
			$apw = md5($_REQUEST["apw"]);
			
			$recherche = ModelAdmin::select($admin_code);
			if($recherche==null){
				$u = new ModelAdmin($admin_code,$an,$ae,$apw);	
				$tab = array(
				"admin_code" => $admin_code,
				"admin_name" => $an,
                "admin_email" => $ae,
				"admin_pw" => $apw,
                
				);				
				$u->insert($tab);
				$pagetitle = "Admin created";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
            else{
                header('Location: index.php?controller=admin&action=create');}

           
		}
		break;
	
	case "update":
		if(isset($_REQUEST['admin_code'])){
			$admin_code = $_REQUEST['admin_code'];
			$up = ModelAdmin::select($admin_code);
			if($up!=null){
				$pagetitle = "edit admin info";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
			if(isset($_REQUEST['admin_code']) && isset($_REQUEST['an']) && isset($_REQUEST['ae'])&& isset($_REQUEST['apw'])){
			$oldadmin_code = $_REQUEST['admin_code'];
			$tab = array(
   			 "admin_code" => $_REQUEST["admin_code"],
   			 "admin_name" => $_REQUEST["an"],
   			 "admin_email" => $_REQUEST["ae"],
             "admin_pw" => md5($_REQUEST["apw"])
             
   			 );
			$o = ModelAdmin::select($oldadmin_code);
			if($o!=null){
				$u = $o->update($tab, $oldadmin_code);		
				$pagetitle = "admin info edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
