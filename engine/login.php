<?php
session_start();

const USERNAME = "admin";
const PASSWORD = "admin";
$arr = array('login' => false, 'message' => '');

if(isset($_POST['mail']) && $_POST['mail'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
    $username = trim($_POST['mail']);
    $password = trim($_POST['password']);
    if ($username == USERNAME && $password == PASSWORD) {

        $_SESSION['sessUsername'] = USERNAME;
        $_SESSION['sessPasswd'] = PASSWORD;

        $arr['login'] = true;
        $arr['message'] = 'Authentification réussie !';
    }
    else{
        $arr['login'] = false;
        $arr['message'] = 'Authentification échouée';
    }
}
else {
    $arr['login'] = false;
    $arr['message'] = 'Authentification échouée';
}
echo json_encode($arr);

?>