<?php

$db = mysqli_connect('localhost','root','root','appSalon');

if (!$db) {
    echo "Connection failed: ";
    exit();
}
