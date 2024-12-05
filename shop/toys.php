<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | TOYS</title>
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
        <ul class=" mt-2 d-flex text-center  flex-row flex-wrap con container-fluid " id="myUL">

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/toys/kong.jpg" style="height: 15.8rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">KONG Classic Dog Toy<p class="card-text fw-lighter fs-6">Durable rubber toy that can be filled with treats or peanut butter for chewing fun.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/toys/nyla.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Nylabone DuraChew<p class="card-text fw-lighter fs-6">A long-lasting chew toy designed for aggressive chewers.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/toys/rope.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Rope Tug Toy<p class="card-text fs-6 fw-lighter">A braided rope for chewing and interactive tug-of-war play.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/toys/treat.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Treat-Dispensing Ball<p class="card-text fs-6 fw-lighter">A rolling ball that dispenses treats or kibble as the pet plays.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/toys/laser.jpg" style="height: 14.6rem; width: 16.8rem;" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Laser Pointer (for Cats)<p class="card-text fs-6 fw-lighter">Laser Pointer (for Cats)Provides endless entertainment by projecting a moving light that cats love to chase.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/toys/plush.jpg" style="height: 15.8rem; width: 16.8rem;" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Plush Squeaky Toy<p class="card-text fs-6 fw-lighter">A stuffed toy with a squeaker inside for dogs to chew and cuddle.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/toys/disc.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Air Tight Container">
                <div class="card-body">
                    <h5 class="card-text">Flying Disc<p class="card-text fs-6 fw-lighter">A durable frisbee-like toy for dogs that love to run and catch.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/toys/fetch.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Food Scoop Container">
                <div class="card-body">
                    <h5 class="card-text">Fetch Ball<p class="card-text fs-6 fw-lighter">High-bounce balls designed for outdoor fetching games.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="mat">
                <img src="../shop/pics/toys/catnip.jpg" style="height: 14.4rem; width: 16.8rem;" class="card-img-top" alt="Feeding Mat">
                <div class="card-body">
                    <h5 class="card-text">Catnip-Infused Toy (for Cats)<p class="card-text fs-6 fw-lighter">Plush mice or balls infused with catnip to attract and entertain cats.</p></h5>
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