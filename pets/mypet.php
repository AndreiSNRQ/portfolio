<?php

$pets =
    [
        [
            "id" => "1",
            "type" => "Adoption",
            "Owner" => "John Doe",
            "phone" => "1234567890",
            "email" => "john.doe@example.com",
            "location" => "123 Main St, Anytown, USA",
            "pname" => "Tiger Commando",
            "pbreed" => "Golden Retriever",
            "pdesc" => "A playful and friendly dog who loves to fetch balls.",
            "pbirth" => "2023-03-15",
            "pimage" => "../pets/dog.png",
            "page" => 1,
            "pgender" => "Female"
        ],
        [
            "id" => "2",
            "type" => "Sale",
            "Owner" => "Abdul",
            "phone" => "0987654321",
            "email" => "jane.doe@example.com",
            "location" => "456 Elm St, Anytown, USA",
            "pname" => "Max",
            "pbreed" => "Labrador Retriever",
            "pdesc" => "A loyal and energetic dog who loves to play fetch.",
            "pbirth" => "2022-06-20",
            "pimage" => "../pets/dog.png",
            "page" => 2,
            "pgender" => "Male"
        ],
        [
            "id" => "3",
            "type" => "Trade",
            "Owner" => "Jane Doe",
            "phone" => "9876543210",
            "email" => "jane.doe@example.com",
            "location" => "789 Oak St, Anytown, USA",
            "pname" => "Chloe",
            "pbreed" => "Siamese Cat",
            "pdesc" => "A sweet and cuddly cat who loves to nap in sunbeams.",
            "pbirth" => "2021-10-01",
            "pimage" => "../pets/dog.png",
            "page" => 3,
            "pgender" => "Female"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Management System</title>
    <link rel="stylesheet" href="../user/home.css">
    <link rel="icon" href="../Icons/Main_Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include '../navPHP/template.php'; ?>

    <div class="container-fluid mt-4">
        <div class=" mb-3">
            <button
                type="button"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#modalId">
                Add New Pet
            </button>
        </div>

        <!-- Modal -->
        <div
            class="modal fade"
            id="modalId"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Add New Pet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addPetForm">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Pet Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Pet Breed" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" placeholder="Pet Age" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required>
                                    <option selected disabled>Pet Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" placeholder="Pet Image" required>
                            </div>
                            <div class="mb-3">
                                <input type="date" class="form-control" placeholder="Pet Birthday" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Pet Description" required></textarea>
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
        <div class="row">
            <?php foreach ($pets as $pet): ?>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="<?php echo $pet['pimage']; ?>" style="width: 100px; height: 100px; align-self: center;" class="card-img-top" alt="Pet Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pet['pname']; ?></h5>
                            <p class="card-text">Breed: <?php echo $pet['pbreed']; ?></p>
                            <p class="card-text">Birthday: <?php echo $pet['pbirth']; ?></p>
                            <p class="card-text">Description: <?php echo $pet['pdesc']; ?></p>
                            <p class="card-text">Age: <?php echo $pet['page']; ?> years</p>
                            <p class="card-text">Gender: <?php echo $pet['pgender']; ?></p>
                            <a href="#" class="btn btn-success btn-sm">Edit Pet Profile</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="../User/home.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#modalId').on('hidden.bs.modal', function() {
                $('#addPetForm')[0].reset();
            });

            $('#addPetForm').on('submit', function(e) {
                e.preventDefault();
                alert('Pet information has been submitted!');
                $('#modalId').modal('hide');
            });
        });
    </script>
</body>

</html>