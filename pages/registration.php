<?php
namespace classes;

require_once '../classes/User.php';
require_once '../classes/DbConnector.php';

use classes\User;
use classes\DbConnector;

if (isset($_POST["firstname"], $_POST["lastname"], $_POST["username"], $_POST["email"], $_POST["password"])) {
    if (empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        $location = "SignUp.php?status=1";
    } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
        
        $location = "SignUp.php?status=4";
    } else {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $role = "learner";
        $user = new User($firstname, $lastname, $username, $email, $password, $role);
        if ($user->register(DbConnector::getConnection())) {
            $location = "SignUp.php?status=2";
        } else {
            $location = "SignUp.php?status=3";
        }
    }
} else {
    $location = "SignUp.php?status=0";
}
header("Location:" . $location);
?>
