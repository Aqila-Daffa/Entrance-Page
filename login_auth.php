<?php
$email = $_POST["email"];
$pass = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "loginCheck";

// Connect DB
$conn = new mysqli($servername, $username, $password, $dbName);

// Select
$sql = "SELECT * FROM users WHERE email = '".$email."'";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())  
        {
        $dbUsername=$row['username'];    
        $dbEmail=$row['email'];  
        $dbPassword=$row['pass'];  
        } 
    }

    if(!empty($email) && !empty($pass)){
        if($dbEmail == $email && $dbPassword == $pass) {  
            session_start();
            $_SESSION['username']=$dbUsername; 
            header("Location: welcome.php");  
            }
        else {
            session_start();
            $_SESSION['message'] = 'Try again with the correct Email and Password!😊';  
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            }   
    }else{  
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
    }

$conn->close();
?>