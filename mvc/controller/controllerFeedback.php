<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelFeedback.php"); 

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="readAll_byclient";	
	
switch ($action) {
        
         
    case "readAll_byadmin":
        $pagetitle = "feedback list ";
        $view = "readAll_byadmin";
       	$tab_u = ModelFeedback::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read_byadmin":	
		if(isset($_REQUEST['fb_id'])){
			$fb_id= $_REQUEST['fb_id'];
			$u = ModelFeedback::select($fb_id);
				if($u!=null){
					$pagetitle = " feed-backs management ";
					$view = "read_byadmin";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		 case "readAll_byclient":
        $pagetitle = "all clients feedbacks ";
        $view = "readAll_byclient";
       	$tab_u = ModelFeedback::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read_byclient":	
		if(isset($_REQUEST['fb_id'])){
			$fb_id= $_REQUEST['fb_id'];
			$u = ModelFeedback::select($fb_id);
				if($u!=null){
					$pagetitle = " feed back details ";
					$view = "read_byclient";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
		
	case "delete":
		if(isset($_REQUEST['fb_id'])){
			$fb_id = $_REQUEST['fb_id'];
			$del = ModelFeedback::select($fb_id);
			if($del!=null){
			$del->delete($fb_id);
			header('Location: index.php?controller=feedback&action=readAll_byadmin');
			}
		}
	    break;
        

        	    
	case "create":
		$pagetitle = "give us a feed back ";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
	case "created":
		if( isset($_REQUEST['fbc']) && isset($_REQUEST['fbs'])&& isset($_REQUEST['fbct'])){
			$fb_id= mt_rand(1,9999);
			$fbc = $_REQUEST["fbc"];
            $fbs= $_REQUEST["fbs"];
            $fbct = $_REQUEST["fbct"];

			

			
			$recherche = ModelFeedback::select($fb_id);
			if($recherche==null){
				$u = new ModelFeedback($fb_id, $fbc, $fbs, $fbct);	
				$tab = array(
				"fb_id" => $fb_id,
				"fb_client" => $fbc,
                "subject" => $fbs,
				"content" => $fbct
				);				
				$u->insert($tab);
				$pagetitle = "feed back added";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
}
?>
