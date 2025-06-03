<?php

require 'app.php';
function includeTemplate( $nombre, $inicio = false ) {
    include TEMPLATES_URL. "/${nombre}.php"; 
}