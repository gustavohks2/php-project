<?php
  error_reporting(E_ALL);

  if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "./inc.database.php";
    require_once "./inc.sanitizeInput.php";
    
    if(!$conn = getConnection()) {
      echo "Erro!";
    } else if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["username"]) ||empty($_POST["password"]) || empty($_POST["gender"])){

        header("Location: ../index.php#signup-popup");
        exit();

    } else {
        $name = sanitizeInput($_POST["name"]);
        $email = sanitizeInput($_POST["email"]);
        $username = sanitizeInput($_POST["username"]);
        $password = sanitizeInput($_POST["password"]);
        $gender = strtoupper(sanitizeInput($_POST["gender"]));

      if(!preg_match("/^[a-zA-Z\s]*$/", $name) || !preg_match("/^[\w\s]{3,15}$/", $username)) {

        header("Location: ../index.php?signup=invalid#signup-popup");
        exit();

      } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../index.php?signup=email#signup-popup");
        exit();

      } else {
        $sql = "SELECT * FROM users
                WHERE username = :username";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $row_count = $stmt->fetchColumn();
        if($row_count > 0) {
          header("Location: ../index.php?signup=usernametaken#signup-popup");
          $conn = null;
          exit();
        } else {
          ######### INSERT THE USER INTO THE DATABASE ##########
          $sql = "INSERT INTO users (name, email, username, password, gender)
                  VALUES (:name, :email, :username, md5(:password), :gender)";
          
          $stmt = $conn->prepare($sql);

          $stmt->bindParam(":name", $name, PDO::PARAM_STR);
          $stmt->bindParam(":email", $email, PDO::PARAM_STR);
          $stmt->bindParam(":username", $username, PDO::PARAM_STR);
          $stmt->bindParam(":password", $password, PDO::PARAM_STR);
          $stmt->bindParam(":gender", $gender, PDO::PARAM_STR);

          if($stmt->execute()) {
            $conn = null;
            header("Location: ../index.php?signup=success");
            exit();
          }

        }

      }
    }
  } else {
    header("Location: ../index.php");
    exit();
  }