<?php
// delete_pet.php
include '../conn/connections.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

if (isset($_GET['pid'])) {
    $user_id = $_SESSION['id']; // Get the logged-in user's ID
    $pet_id = $_GET['pid'];

    // Delete pet from the database
    $sql = "DELETE FROM pets WHERE pid = ? AND user_id = ?";
    $stmt = $connections->prepare($sql);
    $stmt->bind_param("ii", $pet_id, $user_id);

    if ($stmt->execute()) {
        header("Location: mypet.php"); // Redirect to the pet page after successful deletion
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
