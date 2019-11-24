<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelClient.php"); 

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

        $cnx=ModelClient::connexion($lg);
        }
        if($cnx!=null){
        $pagetitle = "logged in  ";
		$view = "interface";
		require ("{$ROOT}{$DS}view{$DS}view.php");    
        }
        else{
        $pagetitle = "login ";
        $view="login";
        		require ("{$ROOT}{$DS}view{$DS}view.php");   } 
        break;
        
    case "readAll":
        $pagetitle = "clients management ";
        $view = "readAll";
       	$tab_u = ModelClient::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

       case "myinfo":
		$pagetitle = "my info ";
		$view = "myinfo";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
        
	case "read":	
		if(isset($_REQUEST['cin'])){
			$cin = $_REQUEST['cin'];
			$u = ModelClient::select($cin);
				if($u!=null){
					$pagetitle = " client info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['cin'])){
			$cin = $_REQUEST['cin'];
			$del = ModelClient::select($cin);
			if($del!=null){
			$del->delete($cin);
			header('Location: index.php?controller=client&action=readAll');
			}
		}
	    break;
        
		 /*case "connect":
		$pagetitle = "login ";
		$view = "login";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    
     
        case"connected":
        if(isset($_REQUEST['lg']) && isset($_REQUEST['pw'])){
            $lg = $_REQUEST["lg"];
			$pw = md5($_REQUEST["pw"]);
        $cnx=ModelClient::connexion($lg,$pw);
        }
        if($cnx!=null){
        $pagetitle = "logged in  ";
		$view = "interface";
		require ("{$ROOT}{$DS}view{$DS}view.php");    
        }
        else
        $pagetitle = "login ";
        $view="login";
        		require ("{$ROOT}{$DS}view{$DS}view.php");    
        break;*/
        
        

        	    
	case "create":
		$pagetitle = "Add a client ";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
		
	case "created":
		if(isset($_REQUEST['cin']) && isset($_REQUEST['qn']) && isset($_REQUEST['qe'])&& isset($_REQUEST['qpw'])&& isset($_REQUEST['qt']) && isset($_REQUEST['qa'])){
			$cin = $_REQUEST["cin"];
			$qn = $_REQUEST["qn"];
            $qe = $_REQUEST["qe"];
			$qpw = md5($_REQUEST["qpw"]);
            $qt = $_REQUEST["qt"];
            $qa = $_REQUEST["qa"];


			
			$recherche = ModelClient::select($cin);
			if($recherche==null){
				$u = new ModelClient($cin,$qn,$qe,$qpw,$qt,$qa);	
				$tab = array(
				"cin" => $cin,
				"clientname" => $qn,
                "clientemail" => $qe,
				"clientpw" => $qpw,
                "tel" => $qt,
                "adress" => $qa
				);				
				$u->insert($tab);
				$pagetitle = "client created";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	     else{
                header('Location: index.php?controller=client&action=createERR');}   } 
        break;
        case "createERR":
		$pagetitle = "Add a client ";
		$view = "createERR";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
	case "update":
		if(isset($_REQUEST['cin'])){
			$cin = $_REQUEST['cin'];
			$up = ModelClient::select($cin);
			if($up!=null){
				$pagetitle = "edit your info";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
			if(isset($_REQUEST['cin']) && isset($_REQUEST['qn']) && isset($_REQUEST['qe'])&& isset($_REQUEST['qpw'])&& isset($_REQUEST['qt']) && isset($_REQUEST['qa'])){
			$oldcin = $_REQUEST['cin'];
			$tab = array(
   			 "cin" => $_REQUEST["cin"],
   			 "clientname" => $_REQUEST["qn"],
   			 "clientemail" => $_REQUEST["qe"],
             "clientpw" => md5($_REQUEST["qpw"]),
             "tel" => $_REQUEST["qt"],
             "adress" => $_REQUEST["qa"]


   			 );
			$o = ModelClient::select($oldcin);
			if($o!=null){
				$u = $o->update($tab, $oldcin);		
				$pagetitle = "client info edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
        case "loggedout":
		$pagetitle = "loggedout ";
		$view = "loggedout";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
}
?>
