<?php

require('connect_db.php');


$login = mysqli_real_escape_string($connection, $_POST['login']);
$password = $_POST['password'];
$checkBot = $_POST['checkBot'];

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);

if(isset($_POST['submit']))
{
    if($login && $password && $checkBot)
    {
        $user = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `checkBot` = '$checkBot'");
        $id_user = mysqli_fetch_array($user);
        if (empty($id_user['id'])) {
            echo 'Введенные данные не верны';
        } else {
            $_SESSION['password'] = $password;
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $id_user['id'];

            header('Location: ../account/index.php');
        }
    }
    else{
        echo 'Введите данные';
    }
}
function isUser()
{
    if (!empty($_SESSION['login']) && !empty($_SESSION['id'])) {
        return true;
    }

    return false;
}

if (isUser()) {
  // header('Location: ../index.php');
}



