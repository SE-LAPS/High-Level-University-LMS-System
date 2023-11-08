<?php
session_start();
require_once '../classes/User.php';
require_once '../classes/DbConnector.php';

use classes\User;
use classes\DbConnector;

if (isset($_POST["email"], $_POST["password"])) {
   if (empty($_POST["email"]) || empty($_POST["password"])) {
        $location = "SignIn.php?status=1";
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = new User(null, null, null, $email, $password, null);
        if($user->authenticate(DbConnector::getConnection())){
            $_SESSION ["user"] = serialize($user);
            $location = "../user/learner.php";
        }else{
            $location = "SignIn.php?status=2";
        }
    }
} else {
    $location = "SignIn.php?status=0";
}

header("Location:" . $location);
