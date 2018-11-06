<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
   
    $show_form = true;
    
   
    if(isset($_SESSION['error_msg'])){
       
        echo $_SESSION['error_msg'] . "<br>";
       
        
        unset($_SESSION['error_msg']);
    }
    
   
    if(isset($_SESSION['login'])){
       
        
       
        if($_SESSION['login'] == "INLOGGAD"){
            $show_form = false; 
            echo "Välkommen   ".$_SESSION['name'] . " du är inloggad!"; 
            ?>

           
            <form action="logout.php">
                <input type="submit" value="Logga ut">
            </form>

            <?php
        }
    }    
    
   
    if($show_form){
      
         ?>
        REGISTER:<br>
        <form action="register.php" method="POST">

            Namn: <input type="text" name="name"><br>
            Mail: <input type="email" name="mail"><br>
            Man <input type="radio" name="gender" value="male">
            Kvinna <input type="radio" name="gender" value="female"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit">

        </form>

        <br><br><br>
        LOGIN:<br>
        <form action="login.php" method="POST">

            Mail: <input type="email" name="mail"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit">

        </form>
    <?php    
    }
    ?>
</body>

</html>