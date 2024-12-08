<?php
// fetch_pets.php
include '../conn/connections.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

$user_id = $_SESSION['id']; // Get the logged-in user's ID

// Fetch user's pets
$sql_my_pets = $connections->prepare("SELECT * FROM mypets WHERE user_id = ?");
$sql_my_pets->bind_param("i", $user_id);
$sql_my_pets->execute();
$result_my_pets = $sql_my_pets->get_result();

$my_pets = [];
if ($result_my_pets->num_rows > 0) {
    while ($row = $result_my_pets->fetch_assoc()) {
        $my_pets[] = $row;
    }
} else {
    $my_pets = []; // If no pets are found
}

$connections->close();
?>
