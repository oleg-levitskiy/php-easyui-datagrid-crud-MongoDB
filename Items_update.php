<?php
$m = new MongoClient();	
   $db = $m->Items_db;
   $collection = $db->Items;

   // now update the document
   $collection->update(array('_id' => new MongoID($_REQUEST['id'])), 
      array('$set'=>array(
	  "PARENT_ID"=>htmlspecialchars($_REQUEST['PARENT_ID']),
	  "NAME"=>htmlspecialchars($_REQUEST['NAME']),
	  "DATE"=>htmlspecialchars($_REQUEST['DATE']),
	  "AUTHOR"=>htmlspecialchars($_REQUEST['AUTHOR']),
	  "FIELD1"=>htmlspecialchars($_REQUEST['FIELD1']),
	  "FIELD2"=>htmlspecialchars($_REQUEST['FIELD2']),
	  "FIELD3"=>htmlspecialchars($_REQUEST['FIELD3'])
	  )));


if (true){
	echo json_encode(array(
		'id' => $_REQUEST['id']
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>