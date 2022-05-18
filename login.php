<?php
    $username  =$_POST['username']; 
    $password =$_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','mb1');
    if($conn->connect_error){
        die('Connection Failed  : '. $conn->connect_error);
    }else{
        $username=stripcslashes($username);
        $password=stripcslashes($password);
        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);
        $sql = "select * from users where uname='$username' and pass='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        echo($count);
        if($count==2){
            header("Location: home.php");
        }
        else{
            header("Location: index.php");
            echo "Login Failed";
        }
        }
 ?>