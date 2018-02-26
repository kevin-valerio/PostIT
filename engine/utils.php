<?php

function isConnected(){
    if((isset($_SESSION['sessUsername']) && $_SESSION['sessUsername'] != "") &&
        (isset($_SESSION['sessPasswd']) && $_SESSION['sessPasswd'] != ""))

        return true;
    else
        return false;

}

?>