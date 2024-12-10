<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | GROOMING ACCESSORIES</title>
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
    
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/fontawesome/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../shop/access.css">
</head>

<body>
<?php include '../navPHP/template.php'?>
    <div class="container-fluid mt-2">
        <!-- Main Content -->
         <?php include '../shop/subnav.php' ?>
         
        <ul class=" mt-2 d-flex text-center  flex-row flex-wrap con container-fluid " id="myUL">

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/slick.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Slicker Brush<p class="card-text fw-lighter fs-6 p-2">Removes tangles, mats, and loose fur for dogs and cats.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/de.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">De-Shedding Tool<p class="card-text fw-lighter fs-6">Reduces shedding by removing the undercoat without damaging the topcoat.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/comb.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Flea Comb<p class="card-text fs-6 fw-lighter">Fine-toothed comb designed to remove fleas and flea eggs from the pet’s fur.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/nailc.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Nail Clippers<p class="card-text fs-6 fw-lighter p-2">Designed to trim pets’ nails safely.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/razor.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Electric Grooming Clippers<p class="card-text fs-6 fw-lighter p-2">Used for cutting fur or shaping coat styles.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/hypo.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Hypoallergenic Shampoo<p class="card-text fs-6 fw-lighter p-2">Gentle shampoo for pets with sensitive skin.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/flea.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Air Tight Container">
                <div class="card-body">
                    <h5 class="card-text">Flea & Tick Shampoo<p class="card-text fs-6 fw-lighter p-2">Helps eliminate fleas and ticks while cleaning the fur.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/shampoo.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Food Scoop Container">
                <div class="card-body">
                    <h5 class="card-text">Deodorizing Spray/Conditioner<p class="card-text fs-6 fw-lighter">Adds a fresh scent and moisture to the coat.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="mat">
                <img src="../shop/pics/hairdry.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Feeding Mat">
                <div class="card-body">
                    <h5 class="card-text">Pet Hair Dryer<p class="card-text fs-6 fw-lighter p-2">Designed for gentle drying without overheating.</p></h5>
                </div>
            </li>
        </ul>

    </div>




    <script> 
    function myFunction() {
  // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li','a', 'name');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
        } else {
        li[i].style.display = "none";
        }
    }
    }

    </script>

</body>
</html>