<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | AQUATIC PET ACCESSORIES</title>
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
    
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawsome/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../shop/access.css">
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
                <img src="../shop/pics/aqua/a.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Aquarium Tanks<p class="card-text fw-lighter fs-6 p-2">Aqueon Glass Aquarium Tank (10-gallon tank for beginners).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/aqua/b.jpg" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Aquarium Stands<p class="card-text fw-lighter fs-6">Imagitarium Wooden Aquarium Stand (for 20- to 55-gallon tanks).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/aqua/i.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Mechanical Filters<p class="card-text fs-6 fw-lighter">Tetra Whisper EX Power Filter (for freshwater and saltwater tanks).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/aqua/c.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Biological Filters<p class="card-text fs-6 fw-lighter p-2">Fluval Underwater Filter (for small aquariums).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/aqua/d.jpg" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Artificial Plants<p class="card-text fs-6 fw-lighter p-2">Marina Betta Aquarium Plastic Plant (for small tanks).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/aqua/e.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Ornaments<p class="card-text fs-6 fw-lighter p-2"> Penn-Plax Stone Hideaway (fish hideout).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/aqua/f.jpg" class="card-img-top" alt="Air Tight Container">
                <div class="card-body">
                    <h5 class="card-text">UV Lights<p class="card-text fs-6 fw-lighter">Coralife Turbo-Twist UV Sterilizer (great for controlling algae and harmful microorganisms).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/aqua/g.jpg" class="card-img-top" alt="Food Scoop Container">
                <div class="card-body">
                    <h5 class="card-text">Air Pumps<p class="card-text fs-6 fw-lighter p-2">Tetra Whisper Air Pump (for aerating water).</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="mat">
                <img src="../shop/pics/aqua/h.jpg" class="card-img-top" alt="Feeding Mat">
                <div class="card-body">
                    <h5 class="card-text">Thermometers<p class="card-text fs-6 p-2 fw-lighter">Marina Floating Thermometer with Suction Cup.</p></h5>
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