<?php
$message = null;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
    if ($status == 0) {
        $message = "<h6 class='text-danger'>Required value are not submitted.</h6>";
    } elseif ($status == 1) {
        $message = "<h6 class='text-danger'>Email and password are required ro enter.</h6>";
    } else  {
        $message = "<h6 class='text-danger'>Email and password is Incorrect. Please try again.</h6>";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="../css/SignIn.scss"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body class="body">
        <div class="container">
            <div class="signin-container">
                <div class="col-md-6">
                    <img src="../img/SignIn.jpg" alt="Image" class="signin-image">
                </div>
                <div class="col-md-6 signin-form">
                    <h2 class="signin-heading">Sign In</h2>
                    <?=$message?>
                    <form method="POST" action="../pages/login.php">
                        <div class="form-group">
                            <label for="email" id="label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" id="label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block signin-button">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </body>
</html>
