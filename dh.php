<?php

//print_r($_POST);
//echo $_POST['do'];
//echo "<br> the email is: ".$_POST['eml'];
//echo "<br>";

$d = file_get_contents('data.json');
$d = json_decode($d, true);


foreach($d as $k => $v){
	echo $k;
	echo "<br>";
	print_r($v);
	echo "<br>";
};

$a = [
	"fn" => $_POST['fn'],
	"add" => $_POST['add'],
	"ph" => $_POST['ph'],
	"eml" => $_POST['eml'],
	"msg" => $_POST['msg']
];

if(isset($_POST['do']) && !isset($_POST['pu']) ){
	$a['service'] = $_POST['do'];
}
else if(!isset($_POST['do']) && isset($_POST['pu']) ){
	$a['service'] = $_POST['pu'];
}
else if(isset($_POST['do']) && isset($_POST['pu']) ){
	$a['service'] = $_POST['do'] .' / '.$_POST['pu'];
};

	array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:success.php');
	
?>