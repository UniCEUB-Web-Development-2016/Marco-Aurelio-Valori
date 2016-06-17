<?php

namespace controle;
include_once 'accessProcess.php';
use accessProcess as accessProcess;
$controle = new \accessProcess\AccessProcess;
if ($_POST['enviar']) {
    $login = $_POST['email'];
    $password = md5($_POST['password']);
    $user = $controle->verifyAccess($login, $password);
    //redirecionando para pagina conforme o tipo do usuário
    if ($user[0]['id_access_type'] == 1) {
        header("Location:Client/pagina1.html");
    } else if ($user[0]['id_access_type'] == 2) {
        header("Location:Client/pagina2.html");
    }
} else if ($_POST['register']) {//corrigir essa parada
    $login = $_POST['email'];
    $password = md5($_POST['password']);
    $type = $_POST['type'];
    $arr = array('email' => $login, 'password' => $password,
'id_access_type' => $type);
    if (!$controle->registerUser($arr)) {
        echo 'Something is wrong!!!';
    } else {
        $access_type = $controle->verifyAccess($login, $password);
        if ($access_type[0]['id_access_type'] == 1) {
            header("Location:Client/pagina1.html");
        } else if ($access_type[0]['id_access_type'] == 2) {
            header("Location:Client/pagina2.html");
        }
    }
}
