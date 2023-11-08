<?php

namespace classes;

use PDO;

class User {

    private $userid;
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($firstname, $lastname, $username, $email, $password, $role) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    public function register($con) {
        try {

            $query = "INSERT INTO user(firstname, lastname, username, email, password, role) VALUES(?, ?, ?, ?, ?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->firstname);
            $pstmt->bindValue(2, $this->lastname);
            $pstmt->bindValue(3, $this->username);
            $pstmt->bindValue(4, $this->email);
            $pstmt->bindValue(5, $this->password);
            $pstmt->bindValue(6, $this->role);
            $pstmt->execute();
            return ($pstmt->rowCount() > 0);
        } catch (PDOException $exc) {
            die("Error in user class's addUser function: " . $exc->getMessage());
        }
    }

    public function authenticate($con) {
        try {
            
            $query = "SELECT * FROM user WHERE email = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->email);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_OBJ);
            if (!empty($rs)) {
                $dbpw = $rs->password;
                if (password_verify($this->password, $dbpw)){
                    $this->userid = $rs->userid;
                    $this->firstname = $rs->firstname;
                    $this->lastname = $rs->lastname;
                    $this->role = $rs->role;
                    $this->password = null;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            die("Error in user clsss's authenticate function: " . $exc->getMessage());
        }
    }

    public function update($con) {
        
    }

}
