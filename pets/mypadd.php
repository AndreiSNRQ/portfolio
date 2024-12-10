<?php
// add_pet.php
include '../conn/connections.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'add') {
    $user_id = $_SESSION['id']; // Get the logged-in user's ID

    $pname = $_POST['pname'];
    $pbreed = $_POST['pbreed'];
    $page = $_POST['page'];
    $pgender = $_POST['pgender'];
    $pimage = $_FILES['pimage']['name'];
    $pbirth = $_POST['pbirth'];
    $pdesc = $_POST['pdesc'];

    // Upload the image to a folder (ensure the folder exists and is writable)
    $target_dir = "../uploads/pets/";
    $target_file = $target_dir . basename($_FILES['pimage']['name']);
    move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file);

    // Insert pet into the database
    $sql = "INSERT INTO pets (user_id, pname, pbreed, page, pgender, pimage, pbirth, pdesc) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connections->prepare($sql);
    $stmt->bind_param("ississss", $user_id, $pname, $pbreed, $page, $pgender, $pimage, $pbirth, $pdesc);
    if ($stmt->execute()) {
        header("Location: mypet"); // Redirect to the pet page after successful insert
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>