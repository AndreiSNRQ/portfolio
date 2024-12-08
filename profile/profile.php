<?php
require_once '../conn/connections.php';

// Start the session securely
session_start();

// Redirect if not logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login.php");
    exit();
}

// Get user ID from session
$userId = $_SESSION['id'];

// Fetch user information
$query = "SELECT username, fname, email, phone, location FROM signup WHERE id = ?";
if ($stmt = $connections->prepare($query)) {
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($userUsername, $userFullName, $userEmail, $userPhone, $userLocation);
    $stmt->fetch();
    $stmt->close();
} else {
    die("Error preparing statement: " . $connections->error);
}

// Initialize variables for form fields
$username = $userUsername;
$phone = $userPhone;
$location = $userLocation;

// Handle profile update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $username = trim($_POST['username']);
    $phone = trim($_POST['phone']);
    $location = trim($_POST['location']);

    if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username)) {
        $error = "Invalid username. Only letters, numbers, and underscores are allowed.";
    } elseif (!preg_match("/^\+?[0-9]{10,15}$/", $phone)) {
        $error = "Invalid phone number format.";
    } elseif (empty($location)) {
        $error = "Location cannot be empty.";
    } else {
        // Update the database
        $updateQuery = "UPDATE signup SET username = ?, phone = ?, location = ? WHERE id = ?";
        if ($updateStmt = $connections->prepare($updateQuery)) {
            $updateStmt->bind_param("sssi", $username, $phone, $location, $userId);
            if ($updateStmt->execute()) {
                $success = "Profile updated successfully!";
            } else {
                $error = "Failed to update profile: " . $connections->error;
            }
            $updateStmt->close();
        } else {
            $error = "Error preparing update statement: " . $connections->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../navPHP/home.css">
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
</head>

<body>

    <?php include '../navPHP/template.php' ?>

    <div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <!-- Display success or error messages -->
            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <!-- Profile Update Form -->
            <form action="profile.php" method="POST">
                <h4>Profile Information</h4>

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                </div>

                <!-- Full Name (non-editable) -->
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" value="<?php echo htmlspecialchars($userFullName); ?>" disabled>
                </div>

                <!-- Email (non-editable) -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($userEmail); ?>" disabled>
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                </div>

                <!-- Location -->
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="<?php echo htmlspecialchars($location); ?>" required>
                </div>

                <!-- Save Button -->
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

    <script src="../User/home.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>