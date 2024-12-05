<?php
$connections = mysqli_connect("localhost:3307", "root", "", "furryconnect");

if (mysqli_connect_error()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
