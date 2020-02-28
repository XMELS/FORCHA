<?php
require_once ('connect_db.php');
$login = mysqli_real_escape_string($connection, $_POST['login']);
$email = $_POST['email'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$nickname = $_POST['nickname'];
$country = $_POST['country'];
$city = $_POST['city'];
$checkBot = $_POST['checkBot'];
$date = date("Y-m-d");
//$cod_password = sha1($password);
//$re_cod_password = sha1($re_password);


//Валидация кода
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$re_password = stripslashes($re_password);
$re_password = htmlspecialchars($re_password);

$email = stripslashes($email);

$nickname = stripslashes($nickname);
$nickname = htmlspecialchars($nickname);

$city = stripslashes($city);
$city = htmlspecialchars($city);
//Валидация кода


if(isset($_POST['submit']))
{
    $query = "INSERT INTO `users` (login, email, password, repass, nickname, country, city, checkBot, date_reg) VALUES ('$login', '$email', '$password','$re_password', '$nickname', '$country','$city', '$checkBot', '$date')";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
}

