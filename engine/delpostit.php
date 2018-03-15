<?php
session_start();

$id = filter_input(INPUT_GET, "id");



$servername = "mysql-kevinv.alwaysdata.net";
$username = "kevinv";
$password = "kevinv";
$dbname = "kevinv_postit";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM post WHERE id=" . $id;

$arr = array('status' => 'undefined', 'message' => null);

if ($conn->query($sql) === TRUE) {
    $arr["status"] = "success";
} else {
    $arr["status"] = "error";
    $arr["message"] = $conn->error;
}
echo json_encode($arr);

$conn->close();


?>