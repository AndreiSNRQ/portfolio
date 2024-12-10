<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | TRAVEL ACCESSORIES</title>
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
    <!-- sub-nav sa shop para sa list ng items -->
    <?php include '../shop/subnav.php' ?>
    <!-- Main Content -->
        <ul class=" mt-2 d-flex text-center  flex-row flex-wrap con container-fluid ul" id="myUL">

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/travel/soft.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Soft-Sided Carrier<p class="card-text fw-lighter fs-6" >A lightweight, fabric carrier with mesh windows for ventilation, often used for small dogs or cats during short trips.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/travel/hard.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Hard-Sided Carrier<p class="card-text fw-lighter fs-6" style="padding-bottom: 20px;">A sturdy plastic or metal box with a handle, ideal for larger pets or longer trips.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/travel/air.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">Airline-Approved Carrier<p class="card-text fs-6 fw-lighter" style="padding-bottom: 40px;">Specifically designed to fit under airplane seats.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/travel/bag.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Pet Backpack<p class="card-text fs-6 fw-lighter"style="padding-bottom: 20px;">Designed for small dogs or cats, with mesh ventilation and padded straps for comfort.</p></h5>
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