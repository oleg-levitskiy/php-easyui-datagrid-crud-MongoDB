<?php

$NAME = htmlspecialchars($_REQUEST['NAME']);
$username = htmlspecialchars($_REQUEST['username']);

	$m = new MongoClient();	
   $db = $m->Items_db;
   $collection = $db->Items;
	$ID=3;
   $document = array( 
	"ID" => $ID,
	"PARENT_ID" =>  htmlspecialchars($_REQUEST['PARENT_ID']),
    "NAME" => $NAME,	
	"DATE" =>  htmlspecialchars(date("d.m.Y H:i:s")),
	"AUTHOR" =>  htmlspecialchars($_REQUEST['AUTHOR']),
	"FIELD1" =>  htmlspecialchars($_REQUEST['FIELD1']),
	"FIELD2" =>  htmlspecialchars($_REQUEST['FIELD2']),
	"FIELD3" =>  htmlspecialchars($_REQUEST['FIELD3']),
	"CONTENT" =>  htmlspecialchars($_REQUEST['CONTENT'])
   );
	
   $collection->insert($document);
   
   if (true){
	echo json_encode(array(
		'id' => '3',
		'NAME' => $NAME
		));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>