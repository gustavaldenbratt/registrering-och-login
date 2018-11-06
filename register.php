<?php

session_start();

if( isset($_POST['name'])  && isset($_POST['mail']) &&
   isset($_POST['gender']) && isset($_POST['pass'])){
    
   
    $dbc_form = mysqli_connect("localhost","root","","reg");
   
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    
    $query = "INSERT INTO users (name,mail,gender,password) VALUES ('$name','$mail','$gender','$pass');";

    if(mysqli_query($dbc_form,$query)){
       
        header("Location: index.php");
    }else{ 
        
        $_SESSION['error_msg'] = "Upptagen mail!";
        header("Location: index.php");
    }
}
else{ 
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location: index.php");
}
?>