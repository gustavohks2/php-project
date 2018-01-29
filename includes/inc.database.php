<?php
  error_reporting(E_ALL);
  
  define("HOST", "localhost");
  define("SGBD", "mysql");
  define("USERNAME", "gustavo");
  define("PASSWORD", "gus");
  define("DBNAME", "login_system");

  $db_error = "";

  function getConnection() {
    try {
      $conn = new PDO(SGBD.":host=".HOST.";dbname=".DBNAME.";charset="."utf8", USERNAME, PASSWORD);  
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e) {
      echo $e->getMessage();
      return null;
    }
  }