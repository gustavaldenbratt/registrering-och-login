<?php

session_start();

if(isset($_POST['mail']) && isset($_POST['pass'])){
   
    $dbc_reg = mysqli_connect("localhost","root","","reg");
   
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
   
    $query = "SELECT * FROM users WHERE mail='$mail' AND password='$pass'";
   
    $result = mysqli_query($dbc_reg,$query);
   
    if(mysqli_num_rows($result) == 1){
        
        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['login'] = "INLOGGAD";
        header("Location: index.php");
    }
    else{
        
        $_SESSION['error_msg'] = "Felaktiga uppgifter!";
        $_SESSION['login'] = "UTLOGGAD";
        header("Location: index.php");
    }
}
else{ 
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location: index.php");
}
?>