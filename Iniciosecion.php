<?php
session_start();
  $username = $_POST["username"];
  $password = $_POST["password"];

    $conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com", "hthadmin", "EconomiaDigi21", "HtHbase");

   
    $sql = "SELECT * FROM Clientes WHERE customer_username='$username' AND customer_password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      $_SESSION["username"] = $username;
      header("Location: Menu.php");
      exit();
    } else {
      header("Location: Index.php");
    }
  

?>
