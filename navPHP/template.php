<?php 

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../login/furry_login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurryConnect</title>
  <link rel="stylesheet" href="../navPHP/home.css">
  <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
</head>

<body>
  <nav>
    <img src="../navPHP/Icons/Main_Logo.png">

    <ul>
      <li><a id="home" href="../home/home">Home</a></li>

      <section class="dropdown">
        <button class="dropdown-btn" id="shop">Shop <i class="arrow down"></i></button>
        <section class="dropdown-content">
          <a id="vet" href="../shop/vet">Vet Supplies</a>
          <a id="clinic" href="../shop/clinic">Vet Clinic</a>
          <a id="feed" href="../shop/feed">Pet Accessories</a>
        </section>
      </section>

      <section class="dropdown">
        <button class="dropdown-btn" id="pets">Pets <i class="arrow down"></i></button>
        <div class="dropdown-content">
          <a id="mypet" href="../pets/mypet">My Pets</a>
          <a id="trading" href="../pets/trading">Pet Adoption</a>
        </div>
      </section>

      <section class="dropdown">
        <button id="expert" class="dropdown-btn">Expert Guidelines <i class="arrow down"></i></button>
        <section class="dropdown-content">
          <a id="breed" href="../Expert/pets">Breeds</a>
          <a id="training" href="../Expert/training">Pet Training</a>
        </section>
      </section>

      <section class="dropdown">
        <button class="dropdown-btn" id="profile">Profile <i class="arrow down"></i></button>
        <section class="dropdown-content" id="profile">
          <a id="profile" href="../profile/profile">Profile</a>
          <!-- Logout Button -->
          <form method="POST" style="margin: 0;">
            <input class="btn" type="submit" name="logout" value="Logout" style="cursor: pointer;">
          </form>
        </section>
      </section>
    </ul>
  </nav>

  <script src="../User/home.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
