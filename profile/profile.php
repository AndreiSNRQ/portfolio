<?php
require_once '../conn/connections.php';

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

$userId = $_SESSION['id'];

$query = "SELECT username, fname, email, phone, location FROM signup WHERE id = ?";
$stmt = $connections->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($userUsername, $userFullName, $userEmail, $userPhone, $userLocation);
$stmt->fetch();
$stmt->close();

$username = $userUsername;
$phone = $userPhone;
$location = $userLocation;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];

    $updateQuery = "UPDATE signup SET username = ?, phone = ?, location = ? WHERE id = ?";
    $updateStmt = $connections->prepare($updateQuery);
    $updateStmt->bind_param("sssi", $username, $phone, $location, $userId);

    if ($updateStmt->execute()) {
        echo "<script>swal('Success', 'Profile updated successfully!', 'success');</script>";
    } else {
        echo "<script>swal('Error', 'Failed to update profile.', 'error');</script>";
    }

    $updateStmt->close();
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
                <form action="profile" method="POST">
                    <h4>Profile Information</h4>

                    <!-- Username (editable) -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                    </div>

                    <!-- Full Name (non-editable) -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo htmlspecialchars($userFullName); ?>" disabled>
                    </div>

                    <!-- Email (non-editable) -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($userEmail); ?>" disabled>
                    </div>

                    <!-- Phone Number (editable field) -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                    </div>

                    <!-- Location (editable field) -->
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