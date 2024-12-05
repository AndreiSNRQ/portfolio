<?php
session_start();

if (!isset($_SESSION["fname"])) {
  die("Session not started or 'fname' is missing.");
}

$fname = $_SESSION["fname"];

require '../conn/connections.php';

if (mysqli_connect_errno()) {
  die("Database connection failed: " . mysqli_connect_error());
}

$userQuery = mysqli_query($connections, "SELECT * FROM signup WHERE fname = '$fname'");
if (!$userQuery) {
  die("Query failed: " . mysqli_error($connections));
}

$user = mysqli_fetch_assoc($userQuery);
if (!$user) {
  die("User not found.");
}

$user_id = $user['id'];

$uploadErr = $notify = "";
$target_dir = "img/";

if (!file_exists($target_dir)) {
  mkdir($target_dir, 0777, true);
}

if (isset($_POST["btnUpload"])) {
  $caption = mysqli_real_escape_string($connections, $_POST["caption"]);
  $target_file = $target_dir . basename($_FILES["post_image"]["name"]);
  $uploadOk = 1;

  if (file_exists($target_file)) {
    $target_file = $target_dir . uniqid() . "_" . basename($_FILES["post_image"]["name"]);
  }

  if ($_FILES["post_image"]["size"] > 5000000) {
    $uploadErr = "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $allowedFormats = ["jpg", "jpeg", "png", "gif"];
  if (!in_array($imageFileType, $allowedFormats)) {
    $uploadErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)) {
      $sql = "INSERT INTO posts (user_id, image_path, caption) VALUES ('$user_id', '$target_file', '$caption')";
      if (mysqli_query($connections, $sql)) {
        $notify = "Your post has been uploaded!";
        header("Location: home?notify=" . urlencode($notify));
        exit();
      } else {
        $uploadErr = "Error while saving post. Please try again. " . mysqli_error($connections);
      }
    } else {
      $uploadErr = "Sorry, there was an error uploading your file.";
    }
  }
}

$postsQuery = mysqli_query($connections, "SELECT p.*, u.email FROM posts p JOIN signup u ON p.user_id = u.id ORDER BY p.created_at DESC");
if (!$postsQuery) {
  die("Error fetching posts: " . mysqli_error($connections));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurryConnect - Feed</title>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <link rel="icon" href="../Icons/Main_Logo.png">
</head>

<body>

  <?php include '../navPHP/template.php' ?>

  <div class="container mt-3">
    <div class="card">
      <div class="card-body">
        <form action="home" method="post" enctype="multipart/form-data">
          <input type="file" class="form-control form-control-sm" style="width: 15%;" name="post_image" accept="image/*" required><br>
          <textarea name="caption" placeholder="Write a caption..." required></textarea> <br>
          <button type="submit" class="btn btn-success" name="btnUpload">Upload Post</button>
        </form>
        <div class="container mt-4">
          <div class="card">
            <div class="card-body mt-3">
              <h2>Recent Posts:</h2>
              <?php
              while ($post = mysqli_fetch_assoc($postsQuery)):
                $post_id = $post['id'];
                $likeCountQuery = mysqli_query($connections, "SELECT COUNT(*) AS like_count FROM likes WHERE post_id = '$post_id'");
                $likeCount = mysqli_fetch_assoc($likeCountQuery)['like_count'];

                $userLikedQuery = mysqli_query($connections, "SELECT * FROM likes WHERE user_id = '$user_id' AND post_id = '$post_id'");
                $userLiked = mysqli_num_rows($userLikedQuery) > 0;
              ?>
                <div class="post">
                  <div class="card mt-2">
                    <img src="<?php echo $post['image_path']; ?>" style="width: 10%" alt="Post image">
                    <p><strong><?php echo htmlspecialchars($post['email']); ?>:</strong> <?php echo htmlspecialchars($post['caption']); ?></p>

                    <!-- Like Button -->
                    <button class="like-btn" style="background:none; border:none; cursor:pointer;">
                      <span class="heart-icon" style="color: gray;">
                        <i class="bi bi-heart"></i>
                      </span>
                      <span class="like-count">0</span>
                    </button>


                    <!-- Comment Section -->
                    <div class="comment-section">
                      <input type="text" class="comment-input form-control" placeholder="Add a comment..." />
                      &nbsp;<button class="comment-btn"><i class="bi bi-send"></i></button>
                      <div class="comments-list"></div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php if ($uploadErr) {
    echo "<p class='error'>$uploadErr</p>";
  } ?>
  <?php if ($notify) {
    echo "<p class='success'>$notify</p>";
  } ?>



  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="home.js"></script>


  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const notify = urlParams.get('notify');

    if (notify) {
      Swal.fire({
        icon: 'success',
        title: 'Upload Successful',
        text: notify,
        showConfirmButton: true
      });
    }
  </script>
</body>

</html>