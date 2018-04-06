<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();		 
   $m = new MongoClient();	
   $db = $m->Items_db;
   $collection = $db->Items;
   $cursor = $collection->find();	
	$result["total"] = '3';	
	$items = array();		
	foreach ($cursor as $document) {
		$document["id"]= (string)$document["_id"];
     array_push($items, $document);	 
   }	
	$result["rows"] = $items;
	//echo('<pre>');
	//print_r($result);
	echo json_encode($result);
?>