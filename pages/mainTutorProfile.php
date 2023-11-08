<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Post</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">

            <ul class="nav nav-tabs justify-content-center" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="posts-tab" data-bs-toggle="tab" href="#posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="portfolio-tab" data-bs-toggle="tab" href="#portfolio">Portfolio</a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile">
                    <!-- Content for the Profile tab goes here -->
                    <?php require './tutorProfile.php'; ?>
                </div>
                <div class="tab-pane fade" id="posts">
                    <?php require './postFeed.php'; ?>
                </div>
                <div class="tab-pane fade" id="portfolio">
                    <h2>hiiii</h2>                   
                    <?php // require './tutorPortfolio.php'; ?>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
