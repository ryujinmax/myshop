<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "myshop";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header("location: /myshop/index.php");
exit;
?>