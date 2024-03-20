<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wylogowywanie</title>
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <?php
    $_SESSION['zalogowano']=false;
    $_SESSION['user'] = "";
    $_SESSION['upr'] = "";
    
    echo "Nie można się zalogować.";

    echo "
    <script>
    setTimeout(()=>{
        location.href = './main.php'
    },'2000');
    </script>
    ";
    
    ?>
</body>
</html>