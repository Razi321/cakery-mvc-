<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelOrders.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelCake.php"); 

if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];

	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "orders management";
        $view = "readAll";
       	$tab_u = ModelOrders::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
    case "readbyadmin":	
		if(isset($_REQUEST['order_id'])){
			$order_id = $_REQUEST['order_id'];
			$u = ModelOrders::select($order_id);
				if($u!=null){
					$pagetitle = " order info ";
					$view = "readbyadmin";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
	case "read":	
		if(isset($_REQUEST['order_id'])){
			$order_id = $_REQUEST['order_id'];
			$u = ModelOrders::select($order_id);
				if($u!=null){
					$pagetitle = " order info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['order_id'])){
			$order_id = $_REQUEST['order_id'];
			$del = ModelOrders::select($order_id);
			if($del!=null){
			$del->delete($order_id);
			header('Location: index.php?controller=orders&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "pass an order ";
		$view = "create";
        $tab_cake=ModelCake::getAll();
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if( isset($_REQUEST['oc']) && isset($_REQUEST['ock']) &&isset($_REQUEST['om'])&& isset($_REQUEST['od'])&& isset($_REQUEST['add'])){
			$order_id = mt_rand(1,9999);
			$oc = $_REQUEST["oc"];
            $ock= $_REQUEST["ock"];
            $om= $_REQUEST["om"];
			$od = $_REQUEST["od"];
            $add = $_REQUEST["add"];

			
			$recherche = ModelOrders::select($order_id);
			if($recherche==null){
				$u = new ModelOrders($order_id,$oc,$ock,$om,$od,$add);	
				$tab = array(
				"order_id" => $order_id,
				"order_client" => $oc,
                "order_cake" => $ock,
                "order_amount" => $om,
				"order_date" => $od,
                "order_adress" => $add
				);				
				$u->insert($tab);
				$pagetitle = "order passed";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
         $tab_cake=ModelCake::getAll();

		if(isset($_REQUEST['order_id'])){
			$order_id = $_REQUEST['order_id'];
			$up = ModelOrders::select($order_id);
			if($up!=null){
				$pagetitle = "edit your order";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
	case "update":
		if(isset($_REQUEST['order_id'])){
			$order_id = $_REQUEST['order_id'];
			$up = ModelOrder::select($order_id);
			if($up!=null){
				$pagetitle = "eedit your order";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if( isset($_REQUEST['oc']) && isset($_REQUEST['ock']) &&isset($_REQUEST['om'])&& isset($_REQUEST['od'])&& isset($_REQUEST['add'])){
			$oldorder_id = $_REQUEST['order_id'];
			$tab = array(
   			 "order_id" => $_REQUEST["order_id"],
   			 "order_client" => $_REQUEST["oc"],
   			 "order_cake" => $_REQUEST["ock"],
             "order_amount" => $_REQUEST["om"],
             "order_date" => $_REQUEST["od"],
             "order_adress" => $_REQUEST["add"]


   			 );
			$o = ModelOrders::select($oldorder_id);
			if($o!=null){
				$u = $o->update($tab, $oldorder_id);		
				$pagetitle = "order edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
