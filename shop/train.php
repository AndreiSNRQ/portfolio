<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | TRAINING AND BEHAVIOR AIDS</title>
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
        <ul class=" mt-2 d-flex text-center  flex-row flex-wrap con container-fluid" id="myUL">

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/training/litter.jpg"style="height: 18rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Litter Boxes<p class="card-text fw-lighter fs-6">Designed for litter training cats, minimizing mess and odor.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/training/pads.jpg" style="height: 18rem; width: 16.8rem;" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Training Pads<p class="card-text fw-lighter fs-6">Absorbent pads used for potty training puppies or small dogs.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/training/diff.jpg" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Pheromone Diffusers<p class="card-text fs-6 fw-lighter">Releases synthetic calming pheromones to reduce anxiety and stress in dogs.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/training/anti.jpg" class="card-img-top" style="height: 18rem; width: 16.8rem;" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Anti-Bark Devices<p class="card-text fs-6 fw-lighter">Emits an ultrasonic sound to deter excessive barking.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/training/treat.jpg" class="card-img-top" style="height: 18rem; width: 16.8rem;" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Treat Pouches<p class="card-text fs-6 fw-lighter">A pouch to hold treats for quick rewards during training sessions.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/training/clicker.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Clickers<p class="card-text fs-6 fw-lighter">Used to mark desirable behavior during positive reinforcement training.</p></h5>
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