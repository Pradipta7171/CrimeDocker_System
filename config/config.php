<?php 

  session_start();

  define('SITEURL', 'http://localhost/CrimeDocker/');

  define('LOCALHOST', 'localhost');
  define('ROOT', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'ob_database');

  $conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE, 3306);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $db_select = mysqli_select_db($conn, DATABASE);
  if (!$db_select) {
      die("Database selection failed: " . mysqli_error($conn));
  }


?>