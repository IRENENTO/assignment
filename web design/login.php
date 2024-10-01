<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 $conn = new mysqli('localhost','root','','annonymous');
 if ($conn -> connect_error ){
    die('connection failed : '.$conn -> connect_error);
 } else{
    $stmt = $conn->prepare("select * from  login where username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            header("location:dashboard.html");
        }else{
            echo "<h2>Invalid username or password</h2>"; 
        }

    } else {
        echo "<h2>Invalid username or password</h2>";
    }
 
    }


?>