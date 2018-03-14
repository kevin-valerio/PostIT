<?php
session_start();

$titre = filter_input(INPUT_POST, "titre");
$contenu = filter_input(INPUT_POST, "contenu");
$date = filter_input(INPUT_POST, "date");
$heure = filter_input(INPUT_POST, "heure");
$mail = filter_input(INPUT_POST, "mail");



$servername = "mysql-kevinv.alwaysdata.net";
$username = "kevinv";
$password = "kevinv";
$dbname = "kevinv_postit";

 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO post (contenu,date,mail,titre, heure) VALUES ('$contenu', '$date', '$mail', '$titre', '$heure')";

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