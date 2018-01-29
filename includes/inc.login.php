<?php
  session_start();
  
  error_reporting(E_ALL);
  require_once("./inc.database.php");
  require_once("./inc.sanitizeInput.php");

  if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    $username = sanitizeInput($_POST["username"]);
    $password = sanitizeInput($_POST["password"]);

    if(empty($username) || empty($password)) {
      header("Location: ../index.php?login=empty");
      exit();
    } else if ($conn = getConnection()) {
      
      $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";

      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":username", $username, PDO::PARAM_STR);
      $stmt->execute();

      $num_rows = $stmt->rowCount();

      if($num_rows < 1) {
        header("Location: ../index.php?login=invalid");
        exit();
      } else {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user["password"] !== md5($password)) {
          header("Location: ../index.php?login=invalid");
          exit();
        } else {
          $_SESSION["name"] = $user["name"];
          $_SESSION["email"] = $user["email"];
          $_SESSION["username"] = $user["username"];
          $_SESSION["gender"] = $user["gender"];

          header("Location: ../index.php?login=success");
          exit();
        }

      }
    }
  } else {
    header("Location: ../index.php");
    exit();
  }