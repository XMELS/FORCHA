<?php session_start();
require ('../scripts/reg/registr.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>Главная страница</title>
    <?php require('../layout/Link.php')?>
    <!-- Link Bootstrap подключаются с помощью доп страницы -->
    <link rel="stylesheet" href="/resource/css/style.css">
    <link rel="stylesheet" href="/resource/css/login/registerform.css">
</head>
<body>
<?php require('../layout/Menu.php') ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Регистрация</li>
    </ol>
</nav>
<div class="container">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Регистрация</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <!--                        <span><i class="fab fa-facebook"></i></span>-->
                        <!--                        <span><i class="fab fa-google"></i></span>-->
                        <span><i class="fab fa-vk"></i></span>
                        <!--                        <i class="fab fa-twitter-square "> <i class="fab fa-google-plus-square"></i></i>-->
                    </div>
                </div>
                <div class="card-body">
                    <form action="register.php" method="post">
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
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="re_password" class="form-control" placeholder="Повторите пароль" maxlength="15" pattern="[A-Za-z-0-9]{5,15}" title="Не менее 5 и неболее 15 латынских символов или цифр." required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" title="Введите вашу почту" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-ninja"></i></span>
                            </div>
                            <input type="text" name="nickname" class="form-control" placeholder="Никнейм" minlength="4" maxlength="15" pattern="[A-Za-z-0-9]{4,15}" title="Не менее 4 и неболее 15 символов или цифр." required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                            <select class="custom-select"  name="country" required>
                                <option value="">Страна</option>
                                <option value="RU">Россия | Russia</option>
                                <option value="BY">Белоруссия | Belarus</option>
                                <option value="KZ">Казахстан | Kazakhstan</option>
                                <option value="UA">Украина | Ukraine</option>
                                <option value="US">США | USA</option>
                                <option value="CA">Канада | Canada</option>
                                <option value="KR">Корея | Korea</option>
                                <option value="DE">Германия | Germany</option>
                                <option value="ES">Испания | Spain</option>
                                <option value="IT">Италия | Italy</option>
                                <option value="JP">Япония | Japan</option>
                                <option value="CN">Китай | China</option>
                                <option value="SE">Швеция | Sweden</option>
                                <option value="CH">Швейцария | Switzerland</option>
                            </select>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            </div>
                            <input type="text" name="city" class="form-control" placeholder="Город" maxlength="50" title="Укажите ваш город" required>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" name="checkBot"><a href="#">Условия  &amp; Конфигурация</a>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Отправить" class="btn float-right login_btn">
                        </div>
                        <?php if($result)
                        {
                            echo '<a href="#">Вы успешно зарегестрировались!</a>';
                        }
                            ?>
                    </form>

                </div>
<!--                <div class="card-footer">-->
<!--                    <div class="d-flex justify-content-center links">-->
<!--                        У вас еще нет аккаунта?<a href="register.php">Зарегестрироваться</a>-->
<!--                    </div>-->
<!--                    <div class="d-flex justify-content-center">-->
<!--                        <a href="#">Забыли пароль?</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <br>
</div>
<?php require('../layout/Footer.php')?>
</body>
</html>