<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | HEALTH AND WELLNESS ACCESSORIES</title>
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
    
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/fontawesome/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../shop/access.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <!-- navbar header -->
    <?php include '../navPHP/template.php'?>

    <div class="container-fluid mt-2">
    <!-- sub-nav sa shop para sa list ng items -->
    <?php include '../shop/subnav.php' ?>
    <!-- Main Content -->
        <ul class=" mt-2 d-flex text-center  flex-row flex-wrap con container-fluid " id="myUL">

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/health/tic.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Tick Removers<p class="card-text fw-lighter fs-6">Tools designed to safely remove ticks (e.g., Tick Twister, Tick Key).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/health/thermo.jpg" class="card-img-top"style="height: 18rem; width: 16.8rem;" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Thermometers<p class="card-text fw-lighter fs-6">Digital rectal thermometers specifically for pets.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/health/ear.jpg" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Ear Drops<p class="card-text fs-6 fw-lighter">For cleaning or treating ear infections (e.g., Zymox Otic drops).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/health/eye.jpg" class="card-img-top" style="height: 18rem; width: 16.8rem;"alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Eye Drops<p class="card-text fs-6 fw-lighter">Saline or medicated drops for irritated eyes (e.g., Terramycin).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/health/omega.jpg" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Omega-3 Oils<p class="card-text fs-6 fw-lighter">Fish oil supplements for skin and coat health (e.g., Grizzly Salmon Oil).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/health/act.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Activity Trackers<p class="card-text fs-6 fw-lighter">Wearable devices like Whistle or FitBark that track steps, calories, and sleep.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/health/pet.jpg" class="card-img-top" alt="Air Tight Container">
                <div class="card-body">
                    <h5 class="card-text">Health Monitors<p class="card-text fs-6 fw-lighter">Devices that track vital signs or breathing patterns (e.g., PetPace smart collar).</p></h5>
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