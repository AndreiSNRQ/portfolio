<?php
include '../conn/connections.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update') {
    $user_id = $_SESSION['id'];
    $pet_id = $_POST['pet_id'];
    $pname = htmlspecialchars(trim($_POST['pname']));
    $pbreed = htmlspecialchars(trim($_POST['pbreed']));
    $page = (int)$_POST['page'];
    $pgender = htmlspecialchars(trim($_POST['pgender']));
    $pbirth = htmlspecialchars(trim($_POST['pbirth']));
    $pdesc = htmlspecialchars(trim($_POST['pdesc']));
    $pimage = '';

    // Retrieve current image path
    $sql_get_image = "SELECT pimage FROM pets WHERE pid = ? AND user_id = ?";
    $stmt_get_image = $connections->prepare($sql_get_image);
    $stmt_get_image->bind_param("ii", $pet_id, $user_id);
    $stmt_get_image->execute();
    $stmt_get_image->bind_result($current_image);
    $stmt_get_image->fetch();
    $stmt_get_image->close();

    // Handle image upload or keep the current image
    if ($_FILES['pimage']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../uploads/pets/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0755, true); // Ensure directory exists
        }

        $target_file = $target_dir . basename($_FILES['pimage']['name']);
        if (move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file)) {
            $pimage = $target_file; // Assign the file path to $pimage
        } else {
            echo "Error moving the file.";
            exit();
        }
    } else {
        $pimage = $current_image; // Keep the current image if no new file is uploaded
    }

    // Update pet details
    $sql = "UPDATE pets SET pname = ?, pbreed = ?, page = ?, pgender = ?, pimage = ?, pbirth = ?, pdesc = ? 
            WHERE pid = ? AND user_id = ?";
    $stmt = $connections->prepare($sql);
    $stmt->bind_param("ssissssii", $pname, $pbreed, $page, $pgender, $pimage, $pbirth, $pdesc, $pet_id, $user_id);

    if ($stmt->execute()) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Pet Updated Successfully!',
                        icon: 'success'
                    }).then(() => {
                        window.location.href = 'mypet';
                    });
                });
              </script>";
        exit();
    }  else {
        echo "Database Error: " . $stmt->error;
    }
}
?>
