<?php
session_start();

function getPostit()
{
    $mail = $_SESSION['sessUsername'];


    $servername = "mysql-kevinv.alwaysdata.net";
    $username = "kevinv";
    $password = "kevinv";
    $dbname = "kevinv_postit";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM post WHERE mail = '$mail'";


    $myArray = array();

     if ($result = $conn->query($sql)) {

        while($row = $result->fetch_array(1)) {
            $myArray[] = $row;
        }
        echo json_encode($myArray);
    }

    $conn->close();

}

echo getPostit();

?>