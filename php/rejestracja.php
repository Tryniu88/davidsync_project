<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
<h1>Rejestracja</h1>
    <?php
    include 'menu.php'
    ?>
    <form action="rejestracja.php" method="POST">
        <input type="text" name="login" id="login" placeholder="Login">
        <input type="text" name="pass" id="pass" placeholder="Password">
        <input type="submit" value="Zarejestruj się">
    </form>
    <?php
    if(isset($_POST["login"]) && isset($_POST["pass"])){
        $log=$_POST["login"];
        $pas=$_POST["pass"];


        function szyfruj_haslo($pas){
            return md5($pas);
        }
        $zaszyfrowane=szyfruj_haslo($pas);
        
        $host="192.168.15.179";
        $dbuser="root";
        $dbpassword="zaq12wsx";
        $dbname="bazadavidsync";

        $conn=mysqli_connect($host,$dbuser,$dbpassword,$dbname);

        if(!$conn){
            die (mysqli_connect_error() . "error");
        }

        

        $sql="INSERT INTO pracownicydavidsync(login,password,upr) VALUES ('$log','$zaszyfrowane','user')";
        if(mysqli_query($conn,$sql)){
            echo "Pomyślnie zarejestrowano";
        } else echo mysqli_error($conn);
    }
    ?>
</body>
</html>