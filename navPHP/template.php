<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurryConnect</title>
  <link rel="stylesheet" href="../navPHP/home.css">
  <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
  <link rel="icon" href="../Icons/Main_Logo.png">
</head>

<body>
  <nav>
    <img src="../navPHP/Icons/Main_Logo.png">

    <ul>

      <li><a id="home" class="dropdown-btn" href="../home/home">Home</a></li>

      <section class="dropdown">
        <button class="dropdown-btn">Shop <i class="arrow down"></i></button>
        <section class="dropdown-content">
          <a href="../shop/vet">Vet Supplies</a>
          <a href="../shop/clinic">Vet Clinic</a>
          <a href="../shop/feed">Pet Accessories</a>
        </section>
      </section>

      <section class="dropdown">
        <button class="dropdown-btn">Pets <i class="arrow down"></i></button>
        <div class="dropdown-content">
          <a href="../pets/mypet">My Pets</a>
          <a href="../pets/trading">Pet Adoption</a>
        </div>
      </section>

      <section class="dropdown">
        <button class="dropdown-btn">Expert Guidelines <i class="arrow down"></i></button>
        <section class="dropdown-content">
          <a href="../Expert/pets">Breeds</a>
          <a href="../Expert/training">Pet Training</a>
        </section>
      </section>

      <section class="dropdown">

        <button class="dropdown-btn" id="profile">Profile <i class="arrow down"></i></button>
        <section class="dropdown-content" id="profile">
          <a href="../profile/profile">Profile</a>
          <a href="../login/furry_login.php" id="logoutBtn">Logout</a>
        </section>
      </section>
    </ul>
  </nav>


  <script src="../User/home.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>