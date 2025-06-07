<?php

require 'app.php';
function includeTemplate( $nombre, $inicio = false ) {
    include TEMPLATES_URL . "/$nombre.php";
}

function isAuth() : bool {
    session_start();
    $auth = $_SESSION['login'];
    if ($auth) {
       return true;
    }
    return false;
}