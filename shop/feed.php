<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | FEEDING ACCESSORIES</title>
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
    
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/fontawesome/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../shop/access.css">
</head>
<body>
    <!-- navbar header -->
<?php include '../navPHP/template.php'?>

    <div class="container-fluid mt-2">
        <!-- Main Content -->
         <?php include '../shop/subnav.php' ?>
         
        <ul class=" mt-2 d-flex text-center  flex-row flex-wrap con justify-content-start container-fluid " id="myUL">

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/metal.jpg" style="height: 17rem; width: 16.85rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Stainless Steel Bowl<p class="card-text fw-lighter fs-6">Durable, rust-resistant bowl for food or water</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/plastic.jpg" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Plastic Bowl<p class="card-text fw-lighter fs-6">Lightweight and affordable, but may scratch easily.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/ceramic.jpg" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Ceramic Bowl<p class="card-text fs-6 fw-lighter">Stylish and heavier to prevent tipping.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/automatic.jpg" class="card-img-top" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Automatic Feeder<p class="card-text fs-6 fw-lighter">Dispenses pre-set amounts of food at scheduled times.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/gravity.jpg" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Gravity Feeder <p class="card-text fs-6 fw-lighter">Uses gravity to refill the food or water bowl as it empties.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/waterf.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Water Fountain<p class="card-text fs-6 fw-lighter"> Provides a continuous flow of filtered water.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/air.jpg" class="card-img-top" alt="Air Tight Container">
                <div class="card-body">
                    <h5 class="card-text">Airtight Container <p class="card-text fs-6 fw-lighter">Keeps pet food fresh and prevents contamination.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/scoop.jpg" class="card-img-top" alt="Food Scoop Container">
                <div class="card-body">
                    <h5 class="card-text">Food Scoop <p class="card-text fs-6 fw-lighter">Makes measuring portions easier.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="mat">
                <img src="../shop/pics/mat.jpg" class="card-img-top" alt="Feeding Mat">
                <div class="card-body">
                    <h5 class="card-text">Feeding Mat <p class="card-text fs-6 fw-lighter">Placed under food and water bowls to catch spills.</p></h5>
                </div>
            </li>
        </ul>

    </div>






</body>
</html>