<?php
session_start();


$connection = mysqli_connect('localhost', 'root', '', 'myforum') or die(mysqli_error());

if (isset($_POST['submit'])) {
    if (empty($_POST['login'])) {
        $info_input = 'Вы не ввели логин';
    } elseif (empty($_POST['password'])) {
        $info_input = 'Вы не ввели пароль';
    } else {
//        $login = mysqli_real_escape_string($connection, $_POST['login']);
//        $password = $_POST['password'];
//        $checkBot = $_POST['checkBot'];
//        $login = stripslashes($login);
//        $login = htmlspecialchars($login);
//        $password = stripslashes($password);
//        $password = htmlspecialchars($password);
//        //удаляем лишние пробелы
//        $login = trim($login);
//        $password = trim($password);
        $user = mysqli_query($connection, "SELECT `id` FROM `users`");
        $id_user = mysqli_fetch_array($user);

        if (empty($id_user['id'])) {
            $info_input = 'Введенные данные не верны';
        } else {
            $_SESSION['password'] = $password;
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $id_user['id'];

//            header('Location: ../account/index.php');
        }
    }
}
//function isUser()
//{
//    if (!empty($_SESSION['login']) && !empty($_SESSION['id'])) {
//        return true;
//    }
//
//    return false;
//}
//
//if (isUser()) {
////    header('Location: ../index.php');
//}

$info_input = isset($info_input) ? $info_input : NULL;
echo $info_input;




?>
    <!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>Главная страница</title>
    <?php require('../layout/Link.php') ?>
    <!-- Link Bootstrap подключаются с помощью доп страницы -->
    <link rel="stylesheet" href="../resource/css/style.css">
    <link rel="stylesheet" href="/resource/css/forums/forums.css">
</head>
<body>

<?php require('../layout/AccountMenu.php') ?>

<div class="container">

    <!--    <div class="d-flex justify-content-left">-->
<!--    <div class="row">-->
<!--        <div class="col-sm">-->
<!--            <nav aria-label="breadcrumb">-->
<!--                <ol class="breadcrumb">-->
<!--                    <li class="breadcrumb-item"><a href="#">Главная</a></li>-->
<!--                    <li class="breadcrumb-item active" aria-current="page">Форумы</li>-->
<!--                </ol>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-9 m-blocks-container">-->
<!--                <h3>Профиль</h3>-->
<!--                <div class="row">-->
<!--                    <div class="col-8 col-sm-6 blocks-container">-->
<!--                        <a href=""><h6><i class="fas fa-info-circle"></i> Новости и информация</h6></a>-->
<!--                    </div>-->
<!--                    <div class="col-8 col-sm-6 blocks-container">-->
<!--                        <div class="media">-->
<!--                            <img src="/img/img_avatar.png" alt="User" class="mr-3 mt-1 rounded-circle" style="width:40px;">-->
<!--                            <div class="media-body">-->
<!--                                <h6>Новое обновление</h6>-->
<!--                                <ul class="listInline">-->
<!--                                    <li>19.02.2020</li>-->
<!--                                    <li class="listInline-li"> <a href="#"><span>Max Kolbin <i class="fas fa-check-circle"></i></span></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <!-- Заставит следующие колонки перейти на следующую строку на брейкпойнте md и выше -->-->
<!--                    <div class="w-100 d-none d-md-block"></div>-->
<!---->
<!--                    <div class="col-8 col-sm-6 blocks-container">-->
<!--                        <a href=""><h6><i class="fas fa-cogs"></i> Технический раздел</h6></a>-->
<!--                    </div>-->
<!--                    <div class="col-8 col-sm-6 blocks-container">-->
<!--                        <div class="media">-->
<!--                            <img src="/img/img_avatar.png" alt="User" class="mr-3 mt-1 rounded-circle" style="width:40px;">-->
<!--                            <div class="media-body">-->
<!--                                <h6>Новое обновление</h6>-->
<!--                                <ul class="listInline">-->
<!--                                    <li>19.02.2020</li>-->
<!--                                    <li class="listInline-li"> <a href="#"><span>Max Kolbin <i class="fas fa-check-circle"></i></span></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="w-100 d-none d-md-block"></div>-->
<!---->
<!--                    <div class="col-8 col-sm-6 blocks-container">-->
<!--                        <a href=""><i class="fab fa-vk" aria-hidden="true"></i> Официальная группа Вконтакте</a>-->
<!--                    </div>-->
<!--                    <div class="col-8 col-sm-6 blocks-container"></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->

</div>



<?php require('../layout/Footer.php') ?>

<?php require('../layout/scriptBootstrap.php')?>
</body>
</html>
