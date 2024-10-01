<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


 $conn = new mysqli('localhost','root','','annonymous');
 if ($conn -> connect_error ) {
    die('connection failed : '.$conn -> connect_error);
    }else {
        $stmt = $conn->prepare("insert into login(username,email,password) values (?,?,?)");
        $stmt->bind_param("sss",$username,$email,$password); 
        $stmt->execute();
        header("location:index.php");
        $stmt->close();
        $conn->close();
    }



?>