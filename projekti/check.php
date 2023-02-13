<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $yhteys=mysqli_connect("db", "root", "password", "team18");
}
catch(Exception $e){
    header("Location:../html/yhteysvirhe.html");
    exit;
}
    $host = "db";  
    $user = "root";  
    $password = 'password';  
    $db_name = "team18";  

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
    $email = $_GET['email'];  
    $password = $_GET['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from user where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo("<h1>login succesful.</h1>");
            header("Location:main.html");
            exit;
        }  
        else{  
            // echo("<h1>invalid email or password.</h1>");
            header("Location:login.php?virhe=Tadaa");
        }
        
?>