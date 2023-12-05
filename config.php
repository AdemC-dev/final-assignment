<?php

$conn = new mysqli('localhost', 'root', '', 'moviedb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

define('BASE_URL', 'http://localhost/moviesite/');

?>