<?php
include '../conn/connections.php';

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../login_startup/furry_login");
    exit();
}

$user_id = $_SESSION['id'];

// Handle Add Pet
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
        
        // Validate image file type
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($image['type'], $allowed_types)) {
            $error_message = "Invalid image type. Please upload a JPEG, PNG, or GIF image.";
        } else {
            if (move_uploaded_file($image['tmp_name'], $image_path)) {
                // Prepare statement to prevent SQL injection
                $sql_insert = $connections->prepare("INSERT INTO pets (pname, pbreed, page, pgender, pimage, pbirth, pdesc, user_id, type)
                                                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $sql_insert->bind_param("ssissssss", $pname, $pbreed, $page, $pgender, $image_path, $pbirth, $pdesc, $user_id, $type);
                
                if (!$sql_insert->execute()) {
                    $error_message = "Error: " . $sql_insert->error;
                } else {
                    header("Location: trading.php?success=1");
                    exit();
                }
            } else {
                $error_message = "Error uploading image.";
            }
        }
    } else {
        $error_message = "Please choose a valid image file.";
    }
}

// Handle Edit Pet
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit') {
    $pet_id = $_POST['pet_id'];
    $type = $_POST['type'];
    $pname = $_POST['pname'];
    $pbreed = $_POST['pbreed'];
    $page = $_POST['page'];
    $pgender = $_POST['pgender'];
    $pbirth = $_POST['pbirth'];
    $pdesc = $_POST['pdesc'];

    // Prepare statement to prevent SQL injection
    $sql_update = $connections->prepare("UPDATE pets
                                         SET pname = ?, pbreed = ?, page = ?, pgender = ?, pbirth = ?, pdesc = ?, type = ?
                                         WHERE id = ? AND user_id = ?");
    $sql_update->bind_param("ssissssii", $pname, $pbreed, $page, $pgender, $pbirth, $pdesc, $type, $pet_id, $user_id);

    if (!$sql_update->execute()) {
        $error_message = "Error: " . $sql_update->error;
    } else {
        header("Location: trading.php?success=2");
        exit();
    }
}

// Handle Delete Pet
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $pet_id = $_POST['pet_id'];

    // Prepare statement to prevent SQL injection
    $sql_delete = $connections->prepare("DELETE FROM pets WHERE id = ? AND user_id = ?");
    $sql_delete->bind_param("ii", $pet_id, $user_id);

    if (!$sql_delete->execute()) {
        $error_message = "Error: " . $sql_delete->error;
    } else {
        header("Location: trading.php?success=3");
        exit();
    }
}

// Fetch user's pets
$sql_my_pets = $connections->prepare("SELECT pets.*, signup.fname, signup.phone, signup.email, signup.location
                                      FROM pets
                                      JOIN signup ON pets.user_id = signup.id
                                      WHERE pets.user_id = ?");
$sql_my_pets->bind_param("i", $user_id);
$sql_my_pets->execute();
$result_my_pets = $sql_my_pets->get_result();

$my_pets = [];
if ($result_my_pets->num_rows > 0) {
    while ($row = $result_my_pets->fetch_assoc()) {
        $my_pets[] = $row;
    }
}

// Fetch other users' pets
$sql_other_pets = $connections->prepare("SELECT pets.*, signup.fname, signup.phone, signup.email, signup.location
                                        FROM pets
                                        JOIN signup ON pets.user_id = signup.id
                                        WHERE pets.user_id != ?");
$sql_other_pets->bind_param("i", $user_id);
$sql_other_pets->execute();
$result_other_pets = $sql_other_pets->get_result();

$other_pets = [];
if ($result_other_pets->num_rows > 0) {
    while ($row = $result_other_pets->fetch_assoc()) {
        $other_pets[] = $row;
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
         <div>
            <button type="button" class="btn btn-success btn-md mt-4" data-bs-toggle="modal" data-bs-target="#addPetModal">Add New Pet</button>
        </div>
        <!-- Pets List -->
        <div class="row mt-4">
            <h4 class="text-muted">My Transactions:</h4>
            <?php foreach ($my_pets as $pet): ?>
                <div class="col-md-3 mb-4" style="width: 18rem;">
                    <div class="card text-center">
                        <img class="card-img-top" src="../pets/<?php echo $pet['pimage']; ?>" alt="Pet Image" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title m-0"><?php echo htmlspecialchars($pet['pname']); ?></h5>
                            <p class="card-text "><?php echo htmlspecialchars($pet['type']); ?></p>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPetModal-<?php echo $pet['id']; ?>"><i class="bi bi-pencil"></i> Edit</button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePetModal-<?php echo $pet['id']; ?>"><i class="bi bi-trash"></i> Delete</button>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $pet['id']; ?>">More Info</button>
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
                                <p><strong>Pet Description:</strong> <?php echo htmlspecialchars($pet['pdesc']); ?></p>
                                <hr>
                                <p><strong>Owner Name:</strong> <?php echo $pet['fname']; ?></p>
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
                                <div class="modal-body edit">
                                    <p><strong>Type:</strong></p>
                                    <input  type="text" name="type" class="form-control" value="<?php echo $pet['type']; ?>" required>
                                    <p><strong>Pet Name:</strong></p>
                                    <input type="text" name="pname" class="form-control" value="<?php echo $pet['pname']; ?>" required>
                                    <p><strong>Pet Breed:</strong></p>
                                    <input type="text" name="pbreed" class="form-control" value="<?php echo $pet['pbreed']; ?>" required>
                                    <p><strong>Pet Gender:</strong></p>
                                    <select name="pgender" class="form-select" required>
                                        <option value="male" <?php if ($pet['pgender'] == 'male') echo 'selected'; ?>>Male</option>
                                        <option value="female" <?php if ($pet['pgender'] == 'female') echo 'selected'; ?>>Female</option>
                                    </select>
                                    <p><strong>Pet Age:</strong></p>
                                    <input type="number" name="page" class="form-control" value="<?php echo $pet['page']; ?>" required>
                                    <p><strong>Pet Birthday:</strong></p>
                                    <input type="date" name="pbirth" class="form-control" value="<?php echo $pet['pbirth']; ?>" required>
                                    <p><strong>Pet Description:</strong></p>
                                    <textarea name="pdesc" class="form-control" required><?php echo $pet['pdesc']; ?></textarea>
                                    <p><strong>Pet Image:</strong></p>
                                    <input type="file" name="pimage" class="form-control">
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
        <!-- TRANSACTIONS FOR OTHER USERS -->
        <div class="container-fluid border-top mx-1">
        <div class="row mt-4">
            <h4 class="text-muted">Other Users' Transactions:</h4>
            <?php foreach ($other_pets as $pet): ?>
                <div class="col-md-3 mb-4" style="width: 18rem;">
                    <div class="card text-center">
                        <img class="card-img-top" src="../pets/<?php echo $pet['pimage']; ?>" alt="Pet Image" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($pet['pname']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($pet['type']); ?></p>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-other-<?php echo $pet['id']; ?>">More Info</button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Other Users' Pet Info -->
                <div class="modal fade" id="modal-other-<?php echo $pet['id']; ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pet Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Pet Name:</strong> <?php echo htmlspecialchars($pet['pname']); ?></p>
                                <p><strong>Pet Breed:</strong> <?php echo htmlspecialchars($pet['pbreed']); ?></p>
                                <p><strong>Description:</strong> <?php echo htmlspecialchars($pet['pdesc']); ?></p>
                                <p><strong>Age:</strong> <?php echo htmlspecialchars($pet['page']); ?> years</p>
                                <p><strong>Gender:</strong> <?php echo htmlspecialchars($pet['pgender']); ?></p>
                                <p><strong>Birth Date:</strong> <?php echo htmlspecialchars($pet['pbirth']); ?></p>
                                <hr>
                                <p><strong>Owner:</strong> <?php echo htmlspecialchars($pet['fname']); ?></p>
                                <p><strong>Contact:</strong> <?php echo htmlspecialchars($pet['phone']); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($pet['email']); ?></p>
                                <p><strong>Location:</strong> <?php echo htmlspecialchars($pet['location']); ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        </div>
            <!--end of container-->
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
                        <!-- Type of Transaction -->
                        <div class="mb-3">
                            <label for="type" class="form-label">Type of Transaction</label>
                            <select name="type" class="form-select" required>
                                <option selected disabled>Select Type</option>
                                <option value="adoption">Adoption</option>
                                <option value="trade">Trade</option>
                                <option value="sale">Sale</option>
                            </select>
                        </div>
                        <!-- Pet Name -->
                        <div class="mb-3">
                            <label for="pname" class="form-label">Pet Name</label>
                            <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Pet Name" required>
                        </div>
                        <!-- Pet Breed -->
                        <div class="mb-3">
                            <label for="pbreed" class="form-label">Pet Breed</label>
                            <input type="text" name="pbreed" id="pbreed" class="form-control" placeholder="Enter Pet Breed" required>
                        </div>
                        <!-- Pet Age -->
                        <div class="mb-3">
                            <label for="page" class="form-label">Pet Age</label>
                            <input type="number" name="page" id="page" class="form-control" placeholder="Enter Pet Age" required>
                        </div>
                        <!-- Pet Gender -->
                        <div class="mb-3">
                            <label for="pgender" class="form-label">Pet Gender</label>
                            <select name="pgender" id="pgender" class="form-select" required>
                                <option selected disabled>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <!-- Pet Image -->
                        <div class="mb-3">
                            <label for="pimage" class="form-label">Pet Image</label>
                            <input type="file" name="pimage" id="pimage" class="form-control" required>
                        </div>
                        <!-- Pet Birthdate -->
                        <div class="mb-3">
                            <label for="pbirth" class="form-label">Pet Birthdate</label>
                            <input type="date" name="pbirth" id="pbirth" class="form-control" required>
                        </div>
                        <!-- Pet Description -->
                        <div class="mb-3">
                            <label for="pdesc" class="form-label">Pet Description</label>
                            <textarea name="pdesc" id="pdesc" class="form-control" placeholder="Enter Pet Description" rows="4" required></textarea>
                        </div>
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