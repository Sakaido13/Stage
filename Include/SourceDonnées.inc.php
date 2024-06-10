<?php
function SGBD_connect() {
    $connexion = new mysqli($NOMSERVER, $username, $password, $dbname);

    
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}
?>
