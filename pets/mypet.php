<?php
include 'mypfetch.php'; // Fetch the list of pets
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Management System</title>
    <link rel="stylesheet" href="../user/home.css">
    <link rel="icon" href="../Icons/Main_Logo.png">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include '../navPHP/template.php'; ?>

    <div class="container-fluid mt-4">
        <div class="mb-3">
            <!-- Button to trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAddPet">
                Add New Pet
            </button>

            <!-- Modal for Adding Pet -->
            <div class="modal fade" id="modalAddPet" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Add New Pet</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="addPetForm" method="POST" action="mypadd" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="action" value="add">
                                <div class="mb-3">
                                    <input type="text" name="pname" class="form-control" placeholder="Pet Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="pbreed" class="form-control" placeholder="Pet Breed" required>
                                </div>
                                <div class="mb-3">
                                    <input type="number" name="page" class="form-control" placeholder="Pet Age" required>
                                </div>
                                <div class="mb-3">
                                    <select name="pgender" class="form-select" required>
                                        <option selected disabled>Pet Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="pimage" class="form-control" placeholder="Pet Image" required>
                                </div>
                                <div class="mb-3">
                                    <input type="date" name="pbirth" class="form-control" placeholder="Pet Birthday" required>
                                </div>
                                <div class="mb-3">
                                    <textarea name="pdesc" class="form-control" placeholder="Pet Description" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Pets Grid -->
            <div class="row mt-4">
                <?php if (empty($my_pets)): ?>
                    <div class="col-12 text-center">
                        <p>No pets found for this user.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($my_pets as $pet): ?>
                        <div class="col-md-2 mb-4">
                            <div class="card h-100">
                                <!-- Image Source Updated -->
                                <img src="<?php echo $pet['pimage']; ?>" class="card-img-top mb-0" alt="Pet Image" style="height: 10rem; object-fit:contain;">
                                <div class="card-body">
                                    <h5 class="card-title m-0"><?php echo $pet['pname']; ?></h5>
                                    <p class="card-text">Breed: <?php echo $pet['pbreed']; ?></p>
                                    <p class="card-text">Age: <?php echo $pet['page']; ?> years</p>
                                    <p class="card-text">Gender: <?php echo $pet['pgender']; ?></p>
                                    <p class="card-text">Birthday: <?php echo $pet['pbirth']; ?></p>
                                    <p class="card-text">Description: <?php echo $pet['pdesc']; ?></p>

                                    <div class="align-content-flex-end d-flex justify-content-between mx-4 h-auto">
                                        <!-- Update Button - Opens the Update Modal -->
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdatePet<?php echo $pet['pid']; ?>">
                                            Update
                                        </button>
                                        <!-- Delete Button - Triggers Delete Confirmation Modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeletePet<?php echo $pet['pid']; ?>">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for Updating Pet -->
                        <div class="modal fade" id="modalUpdatePet<?php echo $pet['pid']; ?>" tabindex="-1" aria-labelledby="modalUpdateTitle<?php echo $pet['pid']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalUpdateTitle<?php echo $pet['pid']; ?>">Update Pet Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="mypupdate.php" enctype="multipart/form-data">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="pet_id" value="<?php echo $pet['pid']; ?>">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Current Image</label><br>
                                                <img src="<?php echo $pet['pimage']; ?>" alt="Current Pet Image" class="img-fluid" style="max-height: 200px;">
                                            </div>
                                            <div class="mb-3">
                                                <label>Change Image</label>
                                                <input type="file" name="pimage" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="pname" class="form-control" value="<?php echo $pet['pname']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="pbreed" class="form-control" value="<?php echo $pet['pbreed']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" name="page" class="form-control" value="<?php echo $pet['page']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <select name="pgender" class="form-select" required>
                                                    <option value="Male" <?php echo $pet['pgender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                                    <option value="Female" <?php echo $pet['pgender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <input type="date" name="pbirth" class="form-control border-1 border-black" value="<?php echo $pet['pbirth']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <textarea name="pdesc" class="form-control" required><?php echo $pet['pdesc']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for Deleting Pet (Confirmation) -->
                        <div class="modal fade" id="modalDeletePet<?php echo $pet['pid']; ?>" tabindex="-1" aria-labelledby="modalDeleteTitle<?php echo $pet['pid']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalDeleteTitle<?php echo $pet['pid']; ?>">Delete Pet Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete the pet <strong><?php echo $pet['pname']; ?></strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <a href="mypdelete.php?pid=<?php echo $pet['pid']; ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
