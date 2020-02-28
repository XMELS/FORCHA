<?php session_start();
require ('../scripts/auth/login_db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>Бизнес форум по страхованию</title>
    <?php require('../layout/Link.php')?>
    <!-- Link Bootstrap подключаются с помощью доп страницы -->
    <link rel="stylesheet" href="/resource/css/style.css">
    <link rel="stylesheet" href="/resource/css/login/loginform.css">
</head>

<body>
<?php require('../layout/Menu.php')?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Вход</li>
    </ol>
</nav>
<div class="container">

    <div class="cont"></div>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Вход</h3>
                    <div class="d-flex justify-content-end social_icon">
<!--                        <span><i class="fab fa-facebook"></i></span>-->
<!--                        <span><i class="fab fa-google"></i></span>-->
                        <span><i class="fab fa-vk"></i></span>
<!--                        <i class="fab fa-twitter-square "> <i class="fab fa-google-plus-square"></i></i>-->
                    </div>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="login" placeholder="Логин" maxlength="10" pattern="[A-Za-z-0-9]{3,10}" title="Не менее 3 и неболее 10 латынских символов или цифр." required>

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Пароль" maxlength="15" pattern="[A-Za-z-0-9]{5,15}" title="Не менее 5 и неболее 15 латынских символов или цифр." required>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" name="checkBot"><a href="#">Условия  &amp; Конфигурации</a>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Войти" class="btn float-right login_btn">
                        </div>
                    </form>

                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        У вас еще нет аккаунта? <a href="register.php">Зарегестрироваться</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Забыли пароль?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>


<?php require('../layout/Footer.php')?>

<?php require ('../layout/scriptBootstrap.php')?>

</body>
</html>