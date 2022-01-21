<?php
require_once ('./Config.php');

function execute($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USER, PW, DB);
	//insert, update, delete
	mysqli_query($con, $sql);

	//close connection
	mysqli_close($con);
}

function executeResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USER, PW, DB);
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$data   = [];
	while ($row = mysqli_fetch_array($result, 1)) {
		$data[] = $row;
	}

	//close connection
	mysqli_close($con);

	return $data;
}

function executeSingleResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USER, PW, DB);
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$row    = mysqli_fetch_array($result, 1);

	//close connection
	mysqli_close($con);

	return $row;
}
function total_item($cart){
    $total=0;
    foreach ($cart as $key => $value) {
        $total+=$value['quantity'];
    }
    return $total;
}
function vnd($number){
    return number_format($number, 0,',','.');
}
function total_price($cart){
    $total_price=0;
    foreach ($cart as $key => $value) {
        $total_price+=$value['gia']*$value['quantity'];
    }
    return $total_price;
}
