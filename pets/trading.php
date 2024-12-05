<?php
include '../conn/connections.php';

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

$user_id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {

    $type = $_POST['type'];
    $pname = $_POST['pname'];
    $pbreed = $_POST['pbreed'];
    $page = $_POST['page'];
    $pgender = $_POST['pgender'];
    $pbirth = $_POST['pbirth'];
    $pdesc = $_POST['pdesc'];

    if (isset($_FILES['pimage']) && $_FILES['pimage']['error'] == 0) {
        $image = $_FILES['pimage'];
        $upload_dir = '../pets/img/';
        $image_path = $upload_dir . basename($image['name']);

        if (move_uploaded_file($image['tmp_name'], $image_path)) {
            $sql_insert = "INSERT INTO pets (pname, pbreed, page, pgender, pimage, pbirth, pdesc, user_id, type)
                           VALUES ('$pname', '$pbreed', '$page', '$pgender', '$image_path', '$pbirth', '$pdesc', '$user_id', '$type')";

            if (!$connections->query($sql_insert)) {
                $error_message = "Error: " . $connections->error;
            } else {
                header("Location: trading?success=1");
                exit();
            }
        } else {
            $error_message = "Error uploading image.";
        }
    } else {
        $error_message = "Please choose a valid image file.";
    }
}

// EDIT
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit') {
    $pet_id = $_POST['pet_id'];
    $type = $_POST['type'];
    $pname = $_POST['pname'];
    $pbreed = $_POST['pbreed'];
    $page = $_POST['page'];
    $pgender = $_POST['pgender'];
    $pbirth = $_POST['pbirth'];
    $pdesc = $_POST['pdesc'];

    $sql_update = "UPDATE pets
                   SET pname = '$pname', pbreed = '$pbreed', page = '$page', pgender = '$pgender', pbirth = '$pbirth', pdesc = '$pdesc', type = '$type'
                   WHERE id = '$pet_id' AND user_id = '$user_id'";

    if (!$connections->query($sql_update)) {
        $error_message = "Error: " . $connections->error;
    } else {
        header("Location: trading.php?success=2");
        exit();
    }
}

// DELETE
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $pet_id = $_POST['pet_id'];

    $sql_delete = "DELETE FROM pets WHERE id = '$pet_id' AND user_id = '$user_id'";
    if (!$connections->query($sql_delete)) {
        $error_message = "Error: " . $connections->error;
    } else {
        header("Location: trading.php?success=3");
        exit();
    }
}

$sql = "SELECT pets.*, signup.username, signup.phone, signup.email, signup.location
        FROM pets
        JOIN signup ON pets.user_id = signup.id";
$result = $connections->query($sql);

$pets = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pets[] = $row;
    }
}

$connections->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETS | TRADES</title>
    <link rel="stylesheet" href="../user/home.css">
    <link rel="icon" href="../Icons/Main_Logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../navPHP/template.php'; ?>

    <div class="container-fluid">
        <!-- Add Pet Button -->
        <button type="button" class="btn btn-success btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#addPetModal">
            <i class="fa-solid fa-plus"></i> Add New Pet
        </button>

        <!-- Pets List -->
        <div class="row mt-3">
            <?php foreach ($pets as $pet): ?>
                <div class="col-md-2">
                    <div class="card border-black text-center" style="width: 18rem;">
                        <img class="card-img-top" src="../pets/<?php echo $pet['pimage']; ?>" style="width: 100%; height: 18rem;" alt="Pet Image">
                        <div class="card-body" style="border-top: 1px solid black;">
                            <h5 class="card-title"><?php echo $pet['pname']; ?></h5>
                            <p class="card-text"><?php echo $pet['pbreed']; ?></p>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $pet['id']; ?>">More Info</button>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPetModal-<?php echo $pet['id']; ?>"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePetModal-<?php echo $pet['id']; ?>"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>

                <!-- More Info Modal -->
                <div class="modal fade" id="modal-<?php echo $pet['id']; ?>" tabindex="-1" aria-labelledby="modalTitle-<?php echo $pet['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle-<?php echo $pet['id']; ?>">More Info</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <p><strong>Pet Name:</strong> <?php echo $pet['pname']; ?></p>
                                <p><strong>Pet Breed:</strong> <?php echo $pet['pbreed']; ?></p>
                                <p><strong>Pet Description:</strong> <?php echo $pet['pdesc']; ?></p>
                                <p><strong>Pet Age:</strong> <?php echo $pet['page']; ?> years old</p>
                                <p><strong>Pet Gender:</strong> <?php echo $pet['pgender']; ?></p>
                                <p><strong>Pet Birthday:</strong> <?php echo $pet['pbirth']; ?></p>
                                <hr>
                                <p><strong>Owner Name:</strong> <?php echo $pet['username']; ?></p>
                                <p><strong>Contact:</strong> <?php echo $pet['phone']; ?></p>
                                <p><strong>Email:</strong> <?php echo $pet['email']; ?></p>
                                <p><strong>Location:</strong> <?php echo $pet['location']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Message Owner</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Edit Pet Modal -->
                <div class="modal fade" id="editPetModal-<?php echo $pet['id']; ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="trading.php">
                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" name="pet_id" value="<?php echo $pet['id']; ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Pet</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="type" class="form-control" value="<?php echo $pet['type']; ?>" required>
                                    <input type="text" name="pname" class="form-control" value="<?php echo $pet['pname']; ?>" required>
                                    <input type="text" name="pbreed" class="form-control" value="<?php echo $pet['pbreed']; ?>" required>
                                    <input type="number" name="page" class="form-control" value="<?php echo $pet['page']; ?>" required>
                                    <input type="date" name="pbirth" class="form-control" value="<?php echo $pet['pbirth']; ?>" required>
                                    <textarea name="pdesc" class="form-control" required><?php echo $pet['pdesc']; ?></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete Pet Modal -->
                <div class="modal fade" id="deletePetModal-<?php echo $pet['id']; ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="trading.php">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="pet_id" value="<?php echo $pet['id']; ?>">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Pet</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this pet?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Add Pet Modal -->
    <div class="modal fade" id="addPetModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="trading.php" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="add">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Pet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="type" class="form-control" placeholder="Type of Transaction" required>
                        <input type="text" name="pname" class="form-control" placeholder="Pet Name" required>
                        <input type="text" name="pbreed" class="form-control" placeholder="Pet Breed" required>
                        <input type="number" name="page" class="form-control" placeholder="Pet Age" required>
                        <input type="file" name="pimage" class="form-control" required>
                        <input type="date" name="pbirth" class="form-control" required>
                        <textarea class="form-control" name="pdesc" placeholder="Pet Description" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Pet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>