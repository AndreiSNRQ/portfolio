<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | COLLARS, LEASHES, AND HARNESSES</title>
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
                <img src="../shop/pics/adcol.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top img" alt="stainless steel">
                <div class="card-body">
                    <h5 class="card-text">Adjustable Collars<p class="card-text fw-lighter fs-6" style="padding-bottom: 20px;">These are collars that can be adjusted to fit your pet’s neck size.
                        They’re usually made of nylon or leather.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/mart.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="plastic">
                <div class="card-body">
                    <h5 class="card-text">Martingale Collars<p class="card-text fw-lighter fs-6">A type of collar often used for dogs with narrow heads (like Greyhounds) to prevent slipping off.
                        It tightens slightly when the dog pulls, but does not choke.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="bowl">
                <img src="../shop/pics/gpc.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="ceramic">
                <div class="card-body">
                    <h5 class="card-text">GPS Collars<p class="card-text fs-6 fw-lighter">These collars come with built-in GPS technology to track your pet’s location.</p><br></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/bra.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Automatic Feeder">
                <div class="card-body">
                    <h5 class="card-text">Breakaway Collars<p class="card-text fs-6 fw-lighter">Safety collars that will break open if the pet gets caught on something, to prevent choking.</p><br></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/retra.jpg"  style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Water Fountain">
                <div class="card-body">
                    <h5 class="card-text">Retractable Leashes<p class="card-text fs-6 fw-lighter">Leashes that extend and retract, allowing the dog more freedom while still being controlled.</p><br></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/hand.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Air Tight Container">
                <div class="card-body">
                    <h5 class="card-text">Hands-Free Leashes<p class="card-text fs-6 fw-lighter" style="padding-bottom: 20px;">Leashes designed to allow you to walk your dog without holding the leash,
                        Often worn like a belt or across the body.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="container">
                <img src="../shop/pics/step.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Food Scoop Container">
                <div class="card-body">
                    <h5 class="card-text">Step-In Harnesses<p class="card-text fs-6 fw-lighter">These harnesses are easy to put on as the dog steps into them,
                        and they are ideal for pets who do not like over-the-head harnesses.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="mat">
                <img src="../shop/pics/nop.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Feeding Mat">
                <div class="card-body">
                    <h5 class="card-text">No-Pull Harnesses<p class="card-text fs-6 fw-lighter" style="padding-bottom: 20px;">Designed to help reduce pulling behavior by applying pressure to the dog’s chest rather than its neck.</p></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="mat">
                <img src="../shop/pics/adh.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Feeding Mat">
                <div class="card-body">
                    <h5 class="card-text">Adjustable Harnesses<p class="card-text fs-6 fw-lighter">These harnesses allow the user to adjust the fit as needed,
                        making them great for growing pets or pets with varying body types.</p></h5>
                </div>
            </li>
            
            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/trad.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Traditional Metal Tags<p class="card-text fs-6 fw-lighter">Tags with engraved information like your pet’s name and your contact details.</p> <br></h5>
                </div>
            </li>

            <li class="card" style="width: 17rem;" name="dispenser">
                <img src="../shop/pics/Smart.jpg" style="height: 17rem; width: 16.8rem;" class="card-img-top" alt="Gravity Feeder">
                <div class="card-body">
                    <h5 class="card-text">Smart ID Tags<p class="card-text fs-6 fw-lighter" style="padding-bottom: 20px;">Digital tags with QR codes or Bluetooth functionality that connect to apps for real-time tracking and information updates.</p></h5>
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