<?php
echo "Zalogowano na: ";
echo $_SESSION['user'];
?>


<ul>
<li> <a href='/php/main.php'>Strona główna</a></li>


<?php
if($_SESSION['upr']=='admin'){
    echo "<li><a href='/php/admin.php'>Panel Admina</a></li>";
}
?>


<li><a href='/php/rejestracja.php'>Rejestracja</a></li>


<?php
if(!$_SESSION['zalogowano']){
    echo "<li><a href='/php/login.php'>Logowanie</a></li>";
} else {
    echo "<li><a href='/php/logout.php'>Wylogowywanie</a></li>";
}
?>


</ul>
