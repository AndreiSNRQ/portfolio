<?php
session_start();
require '../connections.php';

if (!isset($_SESSION["fname"])) {
    echo json_encode(["status" => "error", "message" => "Unauthorized access."]);
    exit();
}

$fname = $_SESSION["fname"];
$userQuery = mysqli_query($connections, "SELECT id FROM signup WHERE fname = '$fname'");
$user = mysqli_fetch_assoc($userQuery);

if (!$user) {
    echo json_encode(["status" => "error", "message" => "User not found."]);
    exit();
}

$user_id = $user['id'];

// Check if 'post_id' is present in the POST request
if (isset($_POST['post_id'])) {
    $post_id = intval($_POST['post_id']);
    echo "Received post ID: " . $post_id; // Debugging
} else {
    echo json_encode(["status" => "error", "message" => "Invalid post ID."]);
    exit();
}

if (!$post_id) {
    echo json_encode(["status" => "error", "message" => "Invalid post ID."]);
    exit();
}


// Debugging: Print the post_id received
// echo "POST ID: " . $_POST['post_id'];  // This will show the value received by the server

if (!$post_id) {
    echo json_encode(["status" => "error", "message" => "Invalid post ID."]);
    exit();
}

// Check if the user has already liked the post
$likeQuery = mysqli_query($connections, "SELECT * FROM posts WHERE id = '$post_id'");
if (mysqli_num_rows($likeQuery) == 0) {
    echo json_encode(["status" => "error", "message" => "Invalid post ID."]);


    // Unlike the post
    $unlike = mysqli_query($connections, "DELETE FROM likes WHERE user_id = '$user_id' AND post_id = '$post_id'");
    if ($unlike) {
        echo json_encode(["status" => "success", "action" => "unliked"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error unliking the post."]);
    }
} else {
    // Like the post
    $like = mysqli_query($connections, "INSERT INTO likes (user_id, post_id) VALUES ('$user_id', '$post_id')");
    if ($like) {
        echo json_encode(["status" => "success", "action" => "liked"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error liking the post."]);
    }
}
