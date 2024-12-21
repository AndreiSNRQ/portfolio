<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">
    <link rel="stylesheet" href="../navPHP/home.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawsome/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>Pets Traing</title>
</head>
<body>
    <!-- Navbar header -->
    <?php include '../navPHP/template.php' ?>
    <!-- Main content -->
    <div class="container-fluid mt-4">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Training Type</th>
                    <th>Description</th>
                    <th>Tutorial Link</th>
                    <th>Short Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Basic Obedience Training</td>
                    <td>Learn the basics of obedience like sit, stay, and come.</td>
                    <td><a href="https://youtu.be/FG9xSgN86BM?si=-rg8XiBulAJtNuAa" target="_blank">Watch Full Tutorial</a></td>
                    <td>
                        <button class="btn btn-primary play-video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="trainvid/How can you teach your dog basic obedience commands like sit, stay, and come_.mp4">Play Video</button>
                    </td>
                </tr>
                <tr>
                    <td>Advanced Agility Training</td>
                    <td>Advanced training for agility courses and obstacles.</td>
                    <td><a href="https://youtu.be/hz9Q11qx8es?si=T_qJzldXsQGqypO2" target="_blank">Watch Full Tutorial</a></td>
                    <td>
                        <button class="btn btn-primary play-video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="trainvid/DIY Dog Agility Training At Home.mp4">Play Video</button>
                    </td>
                </tr>
                <tr>
                    <td>Potty Training</td>
                    <td>Guide to potty training your puppy or adult dog.</td>
                    <td><a href="https://youtu.be/7vOXWCewEYM?si=EbC-dJWd9rG6KKi-" target="_blank">Watch Full Tutorial</a></td>
                    <td>
                        <button class="btn btn-primary play-video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="trainvid/3 easy tips for potty training your puppy.mp4">Play Video</button>
                    </td>
                </tr>
                <tr>
                    <td>Behavior Modification</td>
                    <td>Correct behavioral problems like aggression or excessive barking.</td>
                    <td><a href="https://youtu.be/Dza9vO3UZkQ?si=Q7v9vTGMN-61BwIX" target="_blank">Watch Full Tutorial</a></td>
                    <td>
                        <button class="btn btn-primary play-video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="trainvid/How To Stop Dog Reactivity.mp4">Play Video</button>
                    </td>
                </tr>
                <tr>
                    <td>Behavior Modification</td>
                    <td>Correct behavioral problems like aggression or excessive barking.</td>
                    <td><a href="https://youtu.be/Dza9vO3UZkQ?si=Q7v9vTGMN-61BwIX" target="_blank">Watch Full Tutorial</a></td>
                    <td>
                        <button class="btn btn-primary play-video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="trainvid/How To Stop Dog Reactivity.mp4">Play Video</button>
                    </td>
                </tr>
                <tr>
                    <td>Behavior Modification</td>
                    <td>Correct behavioral problems like aggression or excessive barking.</td>
                    <td><a href="https://youtu.be/Dza9vO3UZkQ?si=Q7v9vTGMN-61BwIX" target="_blank">Watch Full Tutorial</a></td>
                    <td>
                        <button class="btn btn-primary play-video" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="trainvid/How To Stop Dog Reactivity.mp4">Play Video</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Training Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <video id="modalVideo" controls width="100%" height="400"></video>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get modal and video elements
        const videoModal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');

        // Play selected video in modal
        document.querySelectorAll('.play-video').forEach(button => {
            button.addEventListener('click', function () {
                const videoSrc = this.getAttribute('data-video');
                modalVideo.src = videoSrc;
                modalVideo.play();
            });
        });

        // Stop video when modal is closed
        videoModal.addEventListener('hidden.bs.modal', function () {
            modalVideo.pause();
            modalVideo.currentTime = 0; // Reset video to start
        });
    </script>
</body>
</html>
