<?php

$id = intval($_REQUEST['id']);

$NAME = htmlspecialchars($_REQUEST['NAME']);

$m = new MongoClient();	
   $db = $m->Items_db;
   $collection = $db->Items;
   
 //  $collection->remove(array("NAME"=>htmlspecialchars($_REQUEST['NAME'])));
 
 $collection->remove( array( '_id' => new MongoID($_REQUEST['id'])));

if (true){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>htmlspecialchars($_REQUEST['NAME'])));
}
?>