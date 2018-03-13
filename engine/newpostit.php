<?php
session_start();

$titre = filter_input(INPUT_GET, "titre");
$date = filter_input(INPUT_GET, "date");
$contenu = filter_input(INPUT_GET, "contenu");
$mail = $_SESSION["sessUsername"];


$servername = "mysql-kevinv.alwaysdata.net";
$username = "kevinv";
$password = "kevinv";
$dbname = "kevinv_postit";

 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO post (contenu,date,mail,titre) VALUES ('$contenu', '$date', '$mail', '$titre')";

$arr = array('status' => 'undefined');

if ($conn->query($sql) === TRUE) {
    $arr["status"] = "success";
} else {
    $arr["status"] = "error";
}
echo json_encode($arr);

$conn->close();


?>