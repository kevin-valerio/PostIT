<?php
session_start();

function isConnected($printResult = false){

    if (isset($_SESSION['sessUsername'])){

        if($printResult == true) echo "true";
        return true;
    }
    else {

        if($printResult == true) echo "false";
        return false;
    }
}
if (isset($_SESSION['sessUsername'])){
    echo "true";
}
else {
    echo "false";

}
?>