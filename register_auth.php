<?php
$name = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"];
$conPass = $_POST["conPassword"];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "loginCheck";

// Connect DB
$con = new mysqli($servername, $username, $password, $dbName);

// Insert DB
$sql = "INSERT INTO users (username, email, pass)
VALUES ('$name', '$email', '$pass')";
if($conPass === $pass){
    if ($con->query($sql) === TRUE) {    
    header("Location: login.php");
    exit();
    }else {
        echo "Error: " . $sql . "<br>" . $con->error;
          }
}else{ 
    ?>
    <script>window.history.back();</script>
    <?php
} 

$con->close();


?>